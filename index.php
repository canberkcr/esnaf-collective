<?php
/**
 * Esnaf Collective — Dynamic Server-Side Rendered (SSR) Entry Point (index.php)
 * Reads content.json dynamically for 100% SEO Google crawlability.
 */

$content_file = __DIR__ . '/content.json';
$c = [
  "hero" => [
    "tagline" => "360° Medya & PR Kolektifi",
    "headline_main" => "Esnafın Ruhu,",
    "headline_highlight" => "Dijital Sinemada.",
    "paragraph" => "Geleneksel zanaatkâr kültürünü dijital çağın yüksek estetiğiyle buluşturuyoruz. 360° PR, sinematik prodüksiyon ve kreatif marka stratejisi ile Türkiye genelinde yerel işletmelere prestijli bir ses veriyoruz."
  ],
  "about" => [
    "section_tag" => "01 / SANATSAL VİZYON",
    "title_main" => "Gelenekten Geleceğe",
    "title_highlight" => "Sinematik Bir Köprü",
    "quote" => "Her zanaat bir eserdir; her esnaf ise zamanın ötesine aktarılması gereken canlı bir hikaye.",
    "paragraph_left" => "Esnaf Collective; Anadolu'nun köklü kültürünü ve yerel işletmelerin tutkulu serüvenini yüksek estetik standartlarla dijital mecralara taşıyan bağımsız bir 360° medya ve PR kolektifidir.",
    "paragraph_right" => "Geleneksel ajansların şişirilmiş yapılarından uzak, doğrudan yaratıcılarla çalışan çevik bir kolektif model. Yerel işletmeler için sürdürülebilir fiyatlandırma, hızlı teslimat ve gerçek yaratıcı iş birliği. Esnaf Collective, aracıları ortadan kaldırarak kaliteyi erişilebilir kılıyor. Her proje, doğrudan uzman yaratıcılarla yürütülür — fazla maliyet yok, gereksiz katman yok, sadece sonuç."
  ],
  "services" => [
    ["number" => "01", "title" => "360° PR & İletişim Yönetimi", "description" => "Basın bültenleri, medya ilişkileri, dijital itibar kurgusu ve stratejik marka haberleri ile ulusal görünürlük."],
    ["number" => "02", "title" => "Sinematik Video Prodüksiyon", "description" => "4K/6K sinema kameralarıyla reklam filmleri, dikey video (Shorts/Reels) üretimi, mekan belgeselleri ve kurgu."],
    ["number" => "03", "title" => "Dijital Pazarlama & Sosyal Medya", "description" => "Instagram, YouTube ve TikTok kanal yönetimi, performans reklamcılığı ve veri odaklı büyüme stratejileri."],
    ["number" => "04", "title" => "Marka Kimliği & Yaratıcı Ajans", "description" => "Logo, ambalaj, kurumsal kimlik kitapçığı ve işletmenizin karakterini yansıtan kreatif konseptler."],
    ["number" => "05", "title" => "İçerik Stratejisi & Storytelling", "description" => "Esnaf samimiyetini sanatsal dille sunan reklam metinleri, video senaryoları ve marka hikaye kurgusu."]
  ],
  "team" => [
    ["badge" => "FOUNDER", "name" => "Sıla Turaç Aksoy", "role" => "Kurucu & Yaratıcı Direktör", "description" => "Markaların anlatısını sinematik hikayelerle şekillendiriyor.", "image" => "assets/team-sila.png"],
    ["badge" => "DIGITAL LEAD", "name" => "Canberk Engin", "role" => "Dijital Direktör", "description" => "Dijital medya stratejileri ve büyüme süreçlerini yönetiyor.", "image" => "assets/team-canberk.png"],
    ["badge" => "MARKETING", "name" => "Ezgi Gökkaya", "role" => "Marketing Manager", "description" => "Pazarlama kampanyaları ve PR operasyonlarını yürütüyor.", "image" => "assets/team-ezgi.png"],
    ["badge" => "PRODUCER", "name" => "Kaan Tuncer", "role" => "Yapımcı", "description" => "Film prodüksiyon süreçlerini ve saha operasyonlarını yönetiyor.", "image" => "assets/team-kreatif.png"]
  ],
  "faq" => [
    ["question" => "Esnaf Collective Türkiye genelinde çekim yapıyor mu?", "answer" => "Evet. İstanbul merkezli ekibimizle Türkiye'nin 81 ilindeki tüm esnaf ve yerel işletmelere yerinde sinematik çekim ve 360° ajans hizmeti sunuyoruz."],
    ["question" => "YouTube Shorts ve dikey video prodüksiyonu süreci nasıl işliyor?", "answer" => "Öncelikle işletmenizin ruhunu yansıtan senaryolar hazırlıyoruz. Ardından 4K/6K sinema kameralarıyla yapılan çekimleri profesyonel kurgu, renk düzenlemesi (color grading) ve yüksek etkileşimli sosyal medya formatlarıyla teslim ediyoruz."],
    ["question" => "360° PR paketine hangi hizmetler dahildir?", "answer" => "Basın bülteni hazırlığı ve dağıtımı, dijital itibar yönetimi, sosyal medya hesap yönetimi, marka kimliği tasarımı ve hedefli reklam kampanyalarını kapsayan bütüncül bir iletişim stratejisidir."]
  ],
  "contact" => [
    "email" => "info@esnafcocollective.com",
    "region" => "Türkiye Geneli (İstanbul & Tüm Şehirler)",
    "instagram" => "https://www.instagram.com/esnafco.collective/",
    "youtube" => "https://www.youtube.com/@Esnafco_tv"
  ]
];

if (file_exists($content_file)) {
    $loaded = json_decode(file_get_contents($content_file), true);
    if (is_array($loaded)) {
        $c = array_replace_recursive($c, $loaded);
    }
}
?>
<!DOCTYPE html>
<html lang="tr" class="scroll-smooth">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Esnaf Collective — Esnafın Ruhu, Dijitalde | 360° Medya, PR & Sinematik Prodüksiyon</title>
  
  <meta name="description" content="Esnaf Collective, geleneksel zanaatkâr kültürünün özgünlüğünü dijital çağın dinamizmiyle buluşturan 360° PR, sinematik video prodüksiyonu ve yaratıcı medya kolektifidir." />
  <meta name="keywords" content="Esnaf Collective, 360 PR ajansı, sinematik video prodüksiyon, dikey video çekimi, YouTube Shorts prodüksiyon, yerel işletme pazarlama, esnaf ajansı, kurumsal tanıtım filmi, dijital medya ajansı İstanbul, Türkiye geneli ajans" />
  <meta name="author" content="Esnaf Collective" />
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
  <link rel="canonical" href="https://esnafcocollective.com/" />

  <!-- GEO Location Meta Tags -->
  <meta name="geo.region" content="TR-34" />
  <meta name="geo.placename" content="İstanbul, Türkiye" />
  <meta name="geo.position" content="41.0082;28.9784" />
  <meta name="ICBM" content="41.0082, 28.9784" />

  <!-- OpenGraph & Social Meta Tags -->
  <meta property="og:title" content="Esnaf Collective — Esnafın Ruhu, Dijitalde." />
  <meta property="og:description" content="Yerel işletmenize sinematik bir ses verin. 360° PR, video prodüksiyon ve yaratıcı ajans hizmetleriyle Esnaf Collective yanınızda." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://esnafcocollective.com/" />
  <meta property="og:image" content="https://esnafcocollective.com/assets/logo-beyaz.png" />
  <meta property="og:site_name" content="Esnaf Collective" />
  <meta property="og:locale" content="tr_TR" />

  <!-- Google Fonts: Cormorant Garamond, Syne & Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600&family=Syne:wght@600;700;800&display=swap" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          fontFamily: {
            serif: ['Cormorant Garamond', 'serif'],
            syne: ['Syne', 'sans-serif'],
            sans: ['Plus Jakarta Sans', 'sans-serif'],
          },
          colors: {
            noir: {
              950: '#050505',
              900: '#0A0A0C',
              850: '#111114',
              800: '#18181C',
              700: '#26262E',
            },
            luxury: {
              champagne: '#C5A880',
              gold: '#D4AF37',
              bronze: '#9A7B4F',
              cream: '#F4EBE1',
            }
          }
        }
      }
    }
  </script>

  <!-- JSON-LD Structured Data Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "Esnaf Collective",
    "url": "https://esnafcocollective.com/",
    "logo": "https://esnafcocollective.com/assets/logo-beyaz.png",
    "image": "https://esnafcocollective.com/assets/logo-beyaz.png",
    "description": "360° PR, sinematik video prodüksiyonu ve yaratıcı ajans hizmetleriyle Türkiye genelinde yerel işletmelere dijital çözümler sunan sanatsal medya kolektifi.",
    "email": "<?php echo htmlspecialchars($c['contact']['email']); ?>",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "İstanbul",
      "addressCountry": "TR"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 41.0082,
      "longitude": 28.9784
    },
    "areaServed": {
      "@type": "Country",
      "name": "Turkey"
    },
    "founder": [
      { "@type": "Person", "name": "Sıla Turaç Aksoy", "jobTitle": "Kurucu & Yaratıcı Direktör" },
      { "@type": "Person", "name": "Canberk Engin", "jobTitle": "Dijital Direktör" },
      { "@type": "Person", "name": "Ezgi Gökkaya", "jobTitle": "Marketing Manager" },
      { "@type": "Person", "name": "Kaan Tuncer", "jobTitle": "Yapımcı" }
    ],
    "sameAs": [
      "<?php echo htmlspecialchars($c['contact']['instagram']); ?>",
      "<?php echo htmlspecialchars($c['contact']['youtube']); ?>"
    ]
  }
  </script>

  <style>
    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-track { background: #050505; }
    ::-webkit-scrollbar-thumb { background: #26262E; border-radius: 3px; }
    ::-webkit-scrollbar-thumb:hover { background: #C5A880; }

    .glass-nav {
      background: rgba(5, 5, 5, 0.85);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    }
    .luxury-card {
      background: rgba(10, 10, 12, 0.7);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.06);
      transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .luxury-card:hover {
      border-color: rgba(197, 168, 128, 0.3);
      background: rgba(17, 17, 20, 0.85);
      transform: translateY(-4px);
    }
    .text-gradient-gold {
      background: linear-gradient(135deg, #FFF 0%, #E8D1B5 40%, #C5A880 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .bg-grain {
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.025'/%3E%3C/svg%3E");
    }
    .reveal {
      opacity: 0;
      transform: translateY(25px);
      transition: opacity 1s cubic-bezier(0.16, 1, 0.3, 1), transform 1s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .reveal.active { opacity: 1; transform: translateY(0); }
    #spotlight-glow {
      pointer-events: none;
      position: fixed;
      width: 600px;
      height: 600px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(197, 168, 128, 0.04) 0%, transparent 65%);
      transform: translate(-50%, -50%);
      z-index: 1;
    }
    @keyframes marquee { 0% { transform: translateX(0%); } 100% { transform: translateX(-50%); } }
    .animate-marquee { display: flex; width: 200%; animation: marquee 35s linear infinite; }
  </style>
</head>

<body class="bg-noir-950 text-slate-300 font-sans antialiased overflow-x-hidden selection:bg-luxury-champagne selection:text-noir-950 bg-grain relative">

  <div id="spotlight-glow"></div>

  <!-- HEADER -->
  <header class="fixed top-0 left-0 right-0 z-50 glass-nav transition-all duration-500" id="navbar">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 h-24 flex items-center justify-between">
      <a href="#" class="flex items-center group" aria-label="Esnaf Collective">
        <img src="assets/logo-beyaz.png" alt="Esnaf Collective Logo" class="h-9 sm:h-10 w-auto object-contain transition-opacity duration-300 group-hover:opacity-80" />
      </a>
      <nav class="hidden md:flex items-center space-x-10 text-xs font-mono uppercase tracking-[0.25em] text-slate-400">
        <a href="#hakkimizda" class="hover:text-luxury-champagne transition-colors duration-300">01 / Hakkımızda</a>
        <a href="#hizmetlerimiz" class="hover:text-luxury-champagne transition-colors duration-300">02 / Hizmetlerimiz</a>
        <a href="#portfoy" class="hover:text-luxury-champagne transition-colors duration-300">03 / Portföy</a>
        <a href="#ekibimiz" class="hover:text-luxury-champagne transition-colors duration-300">04 / Ekibimiz</a>
        <a href="#sss" class="hover:text-luxury-champagne transition-colors duration-300">05 / SSS</a>
      </nav>
      <div class="hidden md:flex items-center">
        <a href="#iletisim" class="px-6 py-2.5 rounded-full border border-slate-700 hover:border-luxury-champagne text-xs font-mono uppercase tracking-widest text-slate-200 hover:text-luxury-champagne transition-all duration-300">
          İletişime Geç
        </a>
      </div>
      <button id="mobile-menu-btn" class="md:hidden text-slate-300 hover:text-white p-2" aria-label="Menüyü Aç/Kapat">
        <svg class="w-6 h-6 stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
      </button>
    </div>
    <div id="mobile-menu" class="hidden md:hidden bg-noir-900/95 backdrop-blur-2xl border-b border-slate-800 px-8 py-8 transition-all duration-300">
      <div class="flex flex-col space-y-5 text-sm font-mono uppercase tracking-widest text-slate-300">
        <a href="#hakkimizda" class="mobile-nav-link hover:text-luxury-champagne py-1">01 / Hakkımızda</a>
        <a href="#hizmetlerimiz" class="mobile-nav-link hover:text-luxury-champagne py-1">02 / Hizmetlerimiz</a>
        <a href="#portfoy" class="mobile-nav-link hover:text-luxury-champagne py-1">03 / Portföy</a>
        <a href="#ekibimiz" class="mobile-nav-link hover:text-luxury-champagne py-1">04 / Ekibimiz</a>
        <a href="#sss" class="mobile-nav-link hover:text-luxury-champagne py-1">05 / SSS</a>
        <a href="#iletisim" class="mobile-nav-link hover:text-luxury-champagne py-1">06 / İletişim</a>
      </div>
    </div>
  </header>

  <!-- HERO -->
  <section class="relative min-h-screen flex flex-col justify-between pt-36 pb-16 px-6 sm:px-8 lg:px-12 border-b border-slate-900">
    <div class="max-w-7xl mx-auto w-full my-auto">
      <div class="flex items-center gap-3 text-xs font-mono uppercase tracking-[0.3em] text-luxury-champagne mb-8 reveal">
        <span class="w-8 h-[1px] bg-luxury-champagne"></span>
        <span id="hero-tagline-txt"><?php echo htmlspecialchars($c['hero']['tagline']); ?></span>
      </div>
      <h1 class="font-syne text-4xl sm:text-7xl md:text-8xl lg:text-[6.5rem] font-bold text-white leading-[1.02] tracking-tight mb-10 reveal">
        <span id="hero-main-txt"><?php echo htmlspecialchars($c['hero']['headline_main']); ?></span> <br />
        <span id="hero-highlight-txt" class="font-serif italic font-normal text-gradient-gold"><?php echo htmlspecialchars($c['hero']['headline_highlight']); ?></span>
      </h1>
      <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-end reveal">
        <div class="md:col-span-7">
          <p id="hero-paragraph-txt" class="text-lg sm:text-2xl text-slate-300 font-light leading-relaxed">
            <?php echo htmlspecialchars($c['hero']['paragraph']); ?>
          </p>
        </div>
        <div class="md:col-span-5 flex md:justify-end gap-6 pt-4 md:pt-0">
          <a href="#portfoy" class="px-8 py-4 rounded-full bg-luxury-champagne text-noir-950 font-mono text-xs font-bold uppercase tracking-widest hover:bg-white transition-all duration-300 flex items-center gap-3">
            <span>Portföyü İncele</span>
            <svg class="w-4 h-4 fill-none stroke-current" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3"/></svg>
          </a>
          <a href="#iletisim" class="px-8 py-4 rounded-full border border-slate-800 text-white hover:border-luxury-champagne font-mono text-xs font-bold uppercase tracking-widest transition-all duration-300">
            Bize Ulaşın
          </a>
        </div>
      </div>
    </div>
    <div class="max-w-7xl mx-auto w-full pt-16 grid grid-cols-2 md:grid-cols-4 gap-6 border-t border-slate-900/80 text-xs font-mono text-slate-400 reveal">
      <div><div class="text-luxury-champagne text-base font-syne font-bold mb-1">360°</div><div>Bütüncül PR & İletişim</div></div>
      <div><div class="text-white text-base font-syne font-bold mb-1">81 İL</div><div>Türkiye Geneli Çekim Ağı</div></div>
      <div><div class="text-luxury-champagne text-base font-syne font-bold mb-1">4K/6K</div><div>Sinematik Prodüksiyon</div></div>
      <div><div class="text-white text-base font-syne font-bold mb-1">PRESTİJ</div><div>Nitelikli İtibar Yönetimi</div></div>
    </div>
  </section>

  <!-- MARQUEE -->
  <div class="py-6 border-b border-slate-900 bg-noir-900/60 overflow-hidden select-none">
    <div class="animate-marquee whitespace-nowrap text-xs font-mono uppercase tracking-[0.4em] text-slate-500">
      <span class="mx-8">• SİNEMATİK PRODÜKSİYON</span>
      <span class="mx-8 text-luxury-champagne">• 360° PR & İLETİŞİM</span>
      <span class="mx-8">• MARKA KİMLİĞİ</span>
      <span class="mx-8 text-white">• YEREL KÜLTÜR & ZANAAT</span>
      <span class="mx-8">• DİJİTAL İTİBAR YÖNETİMİ</span>
      <span class="mx-8">• TÜRKİYE GENELİ HİZMET</span>
      <span class="mx-8">• SİNEMATİK PRODÜKSİYON</span>
      <span class="mx-8 text-luxury-champagne">• 360° PR & İLETİŞİM</span>
      <span class="mx-8">• MARKA KİMLİĞİ</span>
      <span class="mx-8 text-white">• YEREL KÜLTÜR & ZANAAT</span>
      <span class="mx-8">• DİJİTAL İTİBAR YÖNETİMİ</span>
      <span class="mx-8">• TÜRKİYE GENELİ HİZMET</span>
    </div>
  </div>

  <!-- HAKKIMIZDA -->
  <section id="hakkimizda" class="py-32 px-6 sm:px-8 lg:px-12 relative border-b border-slate-900">
    <div class="max-w-7xl mx-auto">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
        <div class="lg:col-span-4 space-y-4 reveal">
          <div class="text-xs font-mono uppercase tracking-[0.3em] text-luxury-champagne"><?php echo htmlspecialchars($c['about']['section_tag']); ?></div>
          <h2 class="font-syne text-3xl sm:text-5xl font-bold text-white leading-tight">
            <?php echo htmlspecialchars($c['about']['title_main']); ?> <br />
            <span class="font-serif italic font-normal text-gradient-gold"><?php echo htmlspecialchars($c['about']['title_highlight']); ?></span>
          </h2>
        </div>
        <div class="lg:col-span-8 space-y-8 reveal">
          <blockquote class="font-serif italic text-2xl sm:text-3xl text-slate-100 font-normal leading-snug pl-6 border-l-2 border-luxury-champagne">
            "<?php echo htmlspecialchars($c['about']['quote']); ?>"
          </blockquote>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-sm font-light text-slate-400 leading-relaxed">
            <p><?php echo htmlspecialchars($c['about']['paragraph_left']); ?></p>
            <p class="text-slate-300"><?php echo htmlspecialchars($c['about']['paragraph_right']); ?></p>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 pt-6 border-t border-slate-900">
            <div class="space-y-2"><div class="text-xs font-mono text-luxury-champagne">01. PRODÜKSİYON</div><div class="text-sm font-syne font-semibold text-white">Sinematik Dil</div><p class="text-xs text-slate-400 font-light">Film kalitesinde kadrajlar ve özgün anlatı.</p></div>
            <div class="space-y-2"><div class="text-xs font-mono text-luxury-champagne">02. İLETİŞİM</div><div class="text-sm font-syne font-semibold text-white">360° Bütüncüllük</div><p class="text-xs text-slate-400 font-light">Medya ilişkileri, dijital itibar ve algı yönetimi.</p></div>
            <div class="space-y-2"><div class="text-xs font-mono text-luxury-champagne">03. ERİŞİM</div><div class="text-sm font-syne font-semibold text-white">Türkiye Kapsamı</div><p class="text-xs text-slate-400 font-light">Tüm şehirlerde yerinde profesyonel çekim.</p></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- HİZMETLERİMİZ -->
  <section id="hizmetlerimiz" class="py-32 px-6 sm:px-8 lg:px-12 relative border-b border-slate-900 bg-noir-900/40">
    <div class="max-w-7xl mx-auto">
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-20 reveal">
        <div>
          <div class="text-xs font-mono uppercase tracking-[0.3em] text-luxury-champagne mb-3">02 / UZMANLIK ALANLARIMIZ</div>
          <h2 class="font-syne text-3xl sm:text-5xl font-bold text-white">
            360° PR & <span class="font-serif italic font-normal text-gradient-gold">Prodüksiyon Hizmetleri</span>
          </h2>
        </div>
        <p class="text-xs font-mono text-slate-400 max-w-xs mt-4 md:mt-0">Markanızın prestijini artıracak bütüncül medya çözümleri.</p>
      </div>
      <div class="space-y-6">
        <?php foreach ($c['services'] as $idx => $serv): ?>
        <div class="luxury-card p-8 sm:p-10 rounded-2xl group reveal">
          <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
            <div class="md:col-span-2 text-2xl font-mono font-light text-luxury-champagne"><?php echo htmlspecialchars($serv['number']); ?></div>
            <div class="md:col-span-4">
              <h3 class="font-syne text-2xl font-bold text-white group-hover:text-luxury-champagne transition-colors"><?php echo htmlspecialchars($serv['title']); ?></h3>
            </div>
            <div class="md:col-span-4 text-xs font-light text-slate-400 leading-relaxed"><?php echo htmlspecialchars($serv['description']); ?></div>
            <div class="md:col-span-2 flex justify-end">
              <span class="w-10 h-10 rounded-full border border-slate-800 flex items-center justify-center text-slate-400 group-hover:border-luxury-champagne group-hover:text-luxury-champagne transition-all">
                <svg class="w-4 h-4 fill-none stroke-current" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
              </span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- PORTFÖY -->
  <section id="portfoy" class="py-32 px-6 sm:px-8 lg:px-12 relative border-b border-slate-900">
    <div class="max-w-7xl mx-auto">
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-20 reveal">
        <div>
          <div class="text-xs font-mono uppercase tracking-[0.3em] text-luxury-champagne mb-3">03 / SEÇKİN ÇALIŞMALAR</div>
          <h2 class="font-syne text-3xl sm:text-5xl font-bold text-white">Sinematik <span class="font-serif italic font-normal text-gradient-gold">Shorts Galerisi</span></h2>
        </div>
        <p class="text-xs font-mono text-slate-400 max-w-xs mt-4 md:mt-0">Yerel zanaatın ve mekanların dikey kadrajlardaki anlatımı.</p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
        <div class="luxury-card rounded-3xl overflow-hidden group reveal">
          <div class="relative w-full aspect-[9/16] bg-noir-900">
            <iframe class="w-full h-full object-cover" src="https://www.youtube.com/embed/ajCe7ScWDnA?rel=0&modestbranding=1" title="Esnaf Collective Shorts 1" allowfullscreen></iframe>
          </div>
          <div class="p-6 bg-noir-900 border-t border-slate-800/60">
            <div class="text-[10px] font-mono uppercase tracking-widest text-luxury-champagne mb-1">Shorts #01</div>
            <h3 class="font-syne text-lg font-bold text-white group-hover:text-luxury-champagne transition-colors">Zanaatın Sinematik Dokusu</h3>
            <p class="text-slate-400 text-xs font-light mt-1">Ustalarımızın detaycı işçiliği ve mekan atmosferi.</p>
          </div>
        </div>
        <div class="luxury-card rounded-3xl overflow-hidden group reveal">
          <div class="relative w-full aspect-[9/16] bg-noir-900">
            <iframe class="w-full h-full object-cover" src="https://www.youtube.com/embed/t_iNFplBkFo?rel=0&modestbranding=1" title="Esnaf Collective Shorts 2" allowfullscreen></iframe>
          </div>
          <div class="p-6 bg-noir-900 border-t border-slate-800/60">
            <div class="text-[10px] font-mono uppercase tracking-widest text-luxury-champagne mb-1">Shorts #02</div>
            <h3 class="font-syne text-lg font-bold text-white group-hover:text-luxury-champagne transition-colors">Geleneksel Tatlar & Kültür</h3>
            <p class="text-slate-400 text-xs font-light mt-1">Yerel lezzetlerin ardındaki tutku dolu serüven.</p>
          </div>
        </div>
        <div class="luxury-card rounded-3xl overflow-hidden group sm:col-span-2 lg:col-span-1 reveal">
          <div class="relative w-full aspect-[9/16] bg-noir-900">
            <iframe class="w-full h-full object-cover" src="https://www.youtube.com/embed/88blg3OlazA?rel=0&modestbranding=1" title="Esnaf Collective Shorts 3" allowfullscreen></iframe>
          </div>
          <div class="p-6 bg-noir-900 border-t border-slate-800/60">
            <div class="text-[10px] font-mono uppercase tracking-widest text-luxury-champagne mb-1">Shorts #03</div>
            <h3 class="font-syne text-lg font-bold text-white group-hover:text-luxury-champagne transition-colors">Esnafın İnsan Odaklı Yüzü</h3>
            <p class="text-slate-400 text-xs font-light mt-1">Esnaflık ahlakı ve samimi müşteri diyalogları.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- EKİBİMİZ -->
  <section id="ekibimiz" class="py-32 px-6 sm:px-8 lg:px-12 relative border-b border-slate-900 bg-noir-900/30">
    <div class="max-w-7xl mx-auto">
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-20 reveal">
        <div>
          <div class="text-xs font-mono uppercase tracking-[0.3em] text-luxury-champagne mb-3">04 / KREATİF KADRO</div>
          <h2 class="font-syne text-3xl sm:text-5xl font-bold text-white">Kolektif <span class="font-serif italic font-normal text-gradient-gold">Ekibimiz</span></h2>
        </div>
        <p class="text-xs font-mono text-slate-400 max-w-xs mt-4 md:mt-0">Strateji, prodüksiyon ve tasarımın profesyonel uygulayıcıları.</p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
        <?php foreach ($c['team'] as $tm): ?>
        <div class="luxury-card rounded-2xl overflow-hidden group reveal">
          <div class="relative overflow-hidden h-56 sm:h-64 bg-noir-900">
            <img src="<?php echo htmlspecialchars($tm['image']); ?>" alt="<?php echo htmlspecialchars($tm['name']); ?>" class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105" />
            <div class="absolute inset-0 bg-gradient-to-t from-noir-950 via-transparent to-transparent opacity-80"></div>
          </div>
          <div class="p-6 bg-noir-900 border-t border-slate-800/60">
            <div class="text-[10px] font-mono uppercase tracking-widest text-luxury-champagne mb-1"><?php echo htmlspecialchars($tm['badge']); ?></div>
            <h3 class="font-syne text-xl font-bold text-white group-hover:text-luxury-champagne transition-colors"><?php echo htmlspecialchars($tm['name']); ?></h3>
            <p class="text-[11px] font-mono text-slate-400 mt-0.5 mb-3"><?php echo htmlspecialchars($tm['role']); ?></p>
            <p class="text-slate-400 text-xs font-light leading-relaxed mb-4"><?php echo htmlspecialchars($tm['description']); ?></p>
            <div class="flex items-center gap-3 text-slate-400">
              <a href="<?php echo htmlspecialchars($c['contact']['instagram']); ?>" target="_blank" rel="noopener noreferrer" class="hover:text-luxury-champagne transition-colors" aria-label="Instagram">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
              </a>
              <a href="<?php echo htmlspecialchars($c['contact']['youtube']); ?>" target="_blank" rel="noopener noreferrer" class="hover:text-luxury-champagne transition-colors" aria-label="YouTube">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
              </a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- SSS -->
  <section id="sss" class="py-32 px-6 sm:px-8 lg:px-12 relative border-b border-slate-900">
    <div class="max-w-4xl mx-auto">
      <div class="text-center mb-16 reveal">
        <div class="text-xs font-mono uppercase tracking-[0.3em] text-luxury-champagne mb-3">05 / BİLGİ MERKEZİ</div>
        <h2 class="font-syne text-3xl sm:text-5xl font-bold text-white">Sıkça Sorulan <span class="font-serif italic font-normal text-gradient-gold">Sorular</span></h2>
      </div>
      <div class="space-y-6 reveal">
        <?php foreach ($c['faq'] as $f): ?>
        <details class="luxury-card p-8 rounded-2xl group cursor-pointer">
          <summary class="font-syne font-semibold text-lg text-white flex items-center justify-between list-none">
            <span><?php echo htmlspecialchars($f['question']); ?></span>
            <svg class="w-5 h-5 text-luxury-champagne transition-transform group-open:rotate-180 fill-none stroke-current" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
          </summary>
          <p class="text-slate-400 text-sm font-light leading-relaxed mt-4 pt-4 border-t border-slate-800/60"><?php echo htmlspecialchars($f['answer']); ?></p>
        </details>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- İLETİŞİM -->
  <section id="iletisim" class="py-32 px-6 sm:px-8 lg:px-12 relative bg-noir-900/40">
    <div class="max-w-7xl mx-auto">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
        <div class="lg:col-span-5 space-y-8 reveal">
          <div>
            <div class="text-xs font-mono uppercase tracking-[0.3em] text-luxury-champagne mb-3">06 / İLETİŞİM</div>
            <h2 class="font-syne text-3xl sm:text-5xl font-bold text-white leading-tight">İşletmenize Sinematik <br /><span class="font-serif italic font-normal text-gradient-gold">Bir Ses Verelim</span></h2>
            <p class="text-slate-400 text-sm font-light leading-relaxed mt-4">Projeniz, markanız veya çekim talepleriniz için bize ulaşın. Türkiye'nin neresinde olursanız olun ekibimiz yanınızda.</p>
          </div>
          <div class="space-y-4 text-xs font-mono">
            <div class="p-6 luxury-card rounded-2xl flex items-center gap-4">
              <div class="w-10 h-10 rounded-full border border-slate-800 flex items-center justify-center text-luxury-champagne">
                <svg class="w-5 h-5 fill-none stroke-current" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
              </div>
              <div>
                <div class="text-slate-500 mb-1">E-POSTA</div>
                <a href="mailto:<?php echo htmlspecialchars($c['contact']['email']); ?>" class="text-white hover:text-luxury-champagne transition-colors"><?php echo htmlspecialchars($c['contact']['email']); ?></a>
              </div>
            </div>
            <div class="p-6 luxury-card rounded-2xl flex items-center gap-4">
              <div class="w-10 h-10 rounded-full border border-slate-800 flex items-center justify-center text-luxury-champagne">
                <svg class="w-5 h-5 fill-none stroke-current" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
              </div>
              <div>
                <div class="text-slate-500 mb-1">HİZMET BÖLGESİ</div>
                <div class="text-white"><?php echo htmlspecialchars($c['contact']['region']); ?></div>
              </div>
            </div>
          </div>
          <div class="pt-4">
            <div class="text-xs font-mono text-slate-500 mb-4">SOSYAL MEDYA</div>
            <div class="flex items-center gap-4">
              <a href="<?php echo htmlspecialchars($c['contact']['instagram']); ?>" target="_blank" rel="noopener noreferrer" class="w-11 h-11 rounded-full border border-slate-800 flex items-center justify-center text-slate-300 hover:border-luxury-champagne hover:text-luxury-champagne transition-all" aria-label="Instagram">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
              </a>
              <a href="<?php echo htmlspecialchars($c['contact']['youtube']); ?>" target="_blank" rel="noopener noreferrer" class="w-11 h-11 rounded-full border border-slate-800 flex items-center justify-center text-slate-300 hover:border-luxury-champagne hover:text-luxury-champagne transition-all" aria-label="YouTube">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
              </a>
            </div>
          </div>
        </div>

        <div class="lg:col-span-7 reveal">
          <div class="luxury-card p-8 sm:p-12 rounded-3xl relative">
            <h3 class="font-syne text-2xl font-bold text-white mb-2">Projenizi Başlatın</h3>
            <p class="text-xs text-slate-400 font-light mb-8">Formu doldurarak detayları iletin; talebiniz doğrudan <strong class="text-luxury-champagne font-mono"><?php echo htmlspecialchars($c['contact']['email']); ?></strong> adresine ulaşsın.</p>
            <form id="contact-form" action="https://formsubmit.co/<?php echo htmlspecialchars($c['contact']['email']); ?>" method="POST" class="space-y-6">
              <input type="hidden" name="_subject" value="Esnaf Collective Web Sitesi - Yeni Proje Başlatın Talebi">
              <input type="hidden" name="_captcha" value="false">
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                  <label for="form-name" class="block text-xs font-mono uppercase tracking-widest text-slate-400 mb-2">Ad Soyad / İşletme Adı</label>
                  <input id="form-name" name="Isim_Isletme" type="text" required placeholder="Ahmet Yılmaz" class="w-full bg-noir-950 border border-slate-800 rounded-xl px-4 py-3.5 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-luxury-champagne transition-colors" />
                </div>
                <div>
                  <label for="form-email" class="block text-xs font-mono uppercase tracking-widest text-slate-400 mb-2">E-Posta Adresi</label>
                  <input id="form-email" name="Email" type="email" required placeholder="ahmet@isletme.com" class="w-full bg-noir-950 border border-slate-800 rounded-xl px-4 py-3.5 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-luxury-champagne transition-colors" />
                </div>
              </div>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                  <label for="form-phone" class="block text-xs font-mono uppercase tracking-widest text-slate-400 mb-2">Telefon Numarası</label>
                  <input id="form-phone" name="Telefon" type="tel" placeholder="05XX XXX XX XX" class="w-full bg-noir-950 border border-slate-800 rounded-xl px-4 py-3.5 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-luxury-champagne transition-colors" />
                </div>
                <div>
                  <label for="form-service" class="block text-xs font-mono uppercase tracking-widest text-slate-400 mb-2">İlgilendiğiniz Hizmet</label>
                  <select id="form-service" name="Hizmet" class="w-full bg-noir-950 border border-slate-800 rounded-xl px-4 py-3.5 text-sm text-white focus:outline-none focus:border-luxury-champagne transition-colors">
                    <option value="360-pr">360° PR & İletişim</option>
                    <option value="video-prod">Sinematik Video Prodüksiyon</option>
                    <option value="dijital-pazarlama">Dijital Pazarlama & Sosyal Medya</option>
                    <option value="marka-kimligi">Marka Kimliği & Yaratıcı Ajans</option>
                    <option value="tam-paket">Tam Kapsamlı Paket</option>
                  </select>
                </div>
              </div>
              <div>
                <label for="form-message" class="block text-xs font-mono uppercase tracking-widest text-slate-400 mb-2">Proje Notları & Mesajınız</label>
                <textarea id="form-message" name="Mesaj" rows="4" required placeholder="İşletmeniz ve gerçekleştirmek istediğiniz çalışma hakkında bilgi verin..." class="w-full bg-noir-950 border border-slate-800 rounded-xl px-4 py-3.5 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-luxury-champagne transition-colors"></textarea>
              </div>
              <button type="submit" class="w-full py-4 rounded-xl bg-luxury-champagne text-noir-950 font-mono text-xs font-bold uppercase tracking-widest hover:bg-white transition-all duration-300 flex items-center justify-center gap-2">
                <span>Projenizi Başlatın / Mesajı Gönder</span>
                <svg class="w-4 h-4 fill-none stroke-current" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
              </button>
              <div id="form-toast" class="hidden p-4 rounded-xl bg-luxury-champagne/10 border border-luxury-champagne/30 text-luxury-champagne text-xs text-center font-mono">
                ✓ Mesajınız alındı! Talebiniz <?php echo htmlspecialchars($c['contact']['email']); ?> adresine yönlendiriliyor.
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="py-12 px-6 sm:px-8 lg:px-12 border-t border-slate-900 bg-noir-950 text-slate-500">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6">
      <a href="#" aria-label="Esnaf Collective">
        <img src="assets/logo-beyaz.png" alt="Esnaf Collective Logo" class="h-8 w-auto opacity-80 hover:opacity-100 transition-opacity" />
      </a>
      <div class="text-center text-xs font-mono">
        <p>© 2026 Esnaf Collective. Tüm Hakları Saklıdır. | <a href="mailto:<?php echo htmlspecialchars($c['contact']['email']); ?>" class="text-slate-400 hover:text-luxury-champagne transition-colors"><?php echo htmlspecialchars($c['contact']['email']); ?></a></p>
        <p class="text-slate-600 mt-1">Support Your Local Esnaf — 360° Medya & PR Kolektifi</p>
      </div>
      <div class="flex items-center gap-4">
        <a href="<?php echo htmlspecialchars($c['contact']['instagram']); ?>" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full border border-slate-800 flex items-center justify-center text-slate-400 hover:border-luxury-champagne hover:text-luxury-champagne transition-colors" aria-label="Instagram">
          <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
        </a>
        <a href="<?php echo htmlspecialchars($c['contact']['youtube']); ?>" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full border border-slate-800 flex items-center justify-center text-slate-400 hover:border-luxury-champagne hover:text-luxury-champagne transition-colors" aria-label="YouTube">
          <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
        </a>
        <a href="#" class="w-9 h-9 rounded-full border border-slate-800 flex items-center justify-center text-slate-400 hover:border-luxury-champagne hover:text-luxury-champagne transition-colors" aria-label="Yukarı Çık">
          <svg class="w-4 h-4 fill-none stroke-current" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5"/></svg>
        </a>
      </div>
    </div>
  </footer>

  <script>
    const glow = document.getElementById('spotlight-glow');
    document.addEventListener('mousemove', (e) => {
      if (glow) { glow.style.left = e.clientX + 'px'; glow.style.top = e.clientY + 'px'; }
    });
    const menuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    if (menuBtn && mobileMenu) {
      menuBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
      document.querySelectorAll('.mobile-nav-link').forEach(link => link.addEventListener('click', () => mobileMenu.classList.add('hidden')));
    }
    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('active'); observer.unobserve(entry.target); } });
    }, { root: null, threshold: 0.12 });
    document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));
  </script>

</body>
</html>
