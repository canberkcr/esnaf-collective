<?php
/**
 * Esnaf Collective — CMS Backend API (save_content.php)
 * High-Security JSON Data Handler & Auth Manager
 */

// Secure Session Configuration
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    ini_set('session.cookie_secure', 1);
}
session_start();

header('Content-Type: application/json; charset=utf-8');

$content_file = __DIR__ . '/content.json';
$default_password_hash = password_hash('Esnaf2026!Admin', PASSWORD_BCRYPT);

// Helper function to read content.json safely
function load_content_data($file, $default_hash) {
    if (file_exists($file)) {
        $json = file_get_contents($file);
        $data = json_decode($json, true);
        if (is_array($data)) {
            if (!isset($data['admin_security']['password_hash'])) {
                $data['admin_security']['password_hash'] = $default_hash;
            }
            return $data;
        }
    }
    return [
        'admin_security' => ['password_hash' => $default_hash]
    ];
}

// Helper to save content.json safely with file locking
function save_content_data($file, $data) {
    $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    return file_put_contents($file, $json, LOCK_EX) !== false;
}

// Generate CSRF Token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$action = $_REQUEST['action'] ?? '';

// Check Brute Force Lockout
if (!isset($_SESSION['failed_logins'])) {
    $_SESSION['failed_logins'] = 0;
}
if (isset($_SESSION['lockout_until']) && time() < $_SESSION['lockout_until']) {
    $remaining = $_SESSION['lockout_until'] - time();
    echo json_encode([
        'success' => false,
        'error' => "Güvenlik nedeniyle hesabınız kilitlendi. Lütfen {$remaining} saniye sonra tekrar deneyin."
    ]);
    exit;
}

// ACTION: Check Auth Status
if ($action === 'check_auth') {
    $is_logged_in = !empty($_SESSION['admin_logged_in']);
    echo json_encode([
        'success' => true,
        'logged_in' => $is_logged_in,
        'csrf_token' => $_SESSION['csrf_token']
    ]);
    exit;
}

// ACTION: Login
if ($action === 'login') {
    $password = $_POST['password'] ?? '';
    $data = load_content_data($content_file, $default_password_hash);
    $current_hash = $data['admin_security']['password_hash'];

    if (password_verify($password, $current_hash)) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['failed_logins'] = 0;
        unset($_SESSION['lockout_until']);
        
        echo json_encode([
            'success' => true,
            'message' => 'Giriş başarılı.',
            'csrf_token' => $_SESSION['csrf_token']
        ]);
    } else {
        $_SESSION['failed_logins']++;
        if ($_SESSION['failed_logins'] >= 5) {
            $_SESSION['lockout_until'] = time() + 900; // 15 min lockout
            echo json_encode([
                'success' => false,
                'error' => '5 kez hatalı şifre girdiniz. Giriş 15 dakika boyunca kilitlendi.'
            ]);
        } else {
            $rem = 5 - $_SESSION['failed_logins'];
            echo json_encode([
                'success' => false,
                'error' => "Hatalı şifre! Kalan deneme hakkı: {$rem}"
            ]);
        }
    }
    exit;
}

// ACTION: Logout
if ($action === 'logout') {
    $_SESSION['admin_logged_in'] = false;
    session_destroy();
    echo json_encode(['success' => true, 'message' => 'Çıkış yapıldı.']);
    exit;
}

// Require Auth for all modifying actions
if (empty($_SESSION['admin_logged_in'])) {
    http_response_code(401);
    echo json_encode(['success' => false, 'error' => 'Yetkisiz erişim. Lütfen giriş yapın.']);
    exit;
}

// Verify CSRF Token for POST requests
$user_csrf = $_SERVER['HTTP_X_CSRF_TOKEN'] ?? ($_POST['csrf_token'] ?? '');
if (!hash_equals($_SESSION['csrf_token'], $user_csrf)) {
    http_response_code(403);
    echo json_encode(['success' => false, 'error' => 'Geçersiz CSRF Güvenlik Jetonu.']);
    exit;
}

// ACTION: Get Content Data for Admin Form
if ($action === 'get_data') {
    $data = load_content_data($content_file, $default_password_hash);
    // Don't send password hash to client
    unset($data['admin_security']);
    echo json_encode(['success' => true, 'data' => $data]);
    exit;
}

// ACTION: Save Content Data
if ($action === 'save_data') {
    $raw_input = file_get_contents('php://input');
    $post_data = json_decode($raw_input, true);
    
    if (!$post_data || !isset($post_data['payload'])) {
        echo json_encode(['success' => false, 'error' => 'Geçersiz veri biçimi.']);
        exit;
    }

    $existing_data = load_content_data($content_file, $default_password_hash);
    $payload = $post_data['payload'];

    // Preserve existing security settings
    $payload['admin_security'] = $existing_data['admin_security'];

    // Basic sanitization
    array_walk_recursive($payload, function(&$value, $key) {
        if (is_string($value) && $key !== 'password_hash') {
            $value = trim(strip_tags($value, '<br><b><strong><i><em>'));
        }
    });

    if (save_content_data($content_file, $payload)) {
        echo json_encode(['success' => true, 'message' => 'Tüm site metinleri başarıyla güncellendi!']);
    } else {
        echo json_encode(['success' => false, 'error' => 'Veri dosyasına yazılamadı. Dosya izinlerini kontrol edin.']);
    }
    exit;
}

// ACTION: Change Password
if ($action === 'change_password') {
    $current_pwd = $_POST['current_password'] ?? '';
    $new_pwd = $_POST['new_password'] ?? '';

    if (strlen($new_pwd) < 8) {
        echo json_encode(['success' => false, 'error' => 'Yeni şifre en az 8 karakter olmalıdır.']);
        exit;
    }

    $existing_data = load_content_data($content_file, $default_password_hash);
    if (!password_verify($current_pwd, $existing_data['admin_security']['password_hash'])) {
        echo json_encode(['success' => false, 'error' => 'Mevcut şifre hatalı!']);
        exit;
    }

    $existing_data['admin_security']['password_hash'] = password_hash($new_pwd, PASSWORD_BCRYPT);

    if (save_content_data($content_file, $existing_data)) {
        echo json_encode(['success' => true, 'message' => 'Yönetici şifreniz başarıyla değiştirildi!']);
    } else {
        echo json_encode(['success' => false, 'error' => 'Şifre güncellenemedi.']);
    }
    exit;
}

echo json_encode(['success' => false, 'error' => 'Bilinmeyen işlem.']);
