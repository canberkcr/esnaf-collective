$git = "C:\Program Files\Git\cmd\git.exe"
$repoDir = "c:\Users\canbe\OneDrive\Desktop\ESNAFCOCO"

Set-Location $repoDir

# Configure git user identity for this repo
& $git config user.name "canberkcr"
& $git config user.email "canberkcr@users.noreply.github.com"

Write-Host "Staging files..."
& $git add .

Write-Host "`nCreating commit..."
& $git commit -m "feat: ultra-niche artistic 360 PR agency website redesign, cpanel turn-key files, sitemap, robots, htaccess and assets"

Write-Host "`nPushing to GitHub (origin main)..."
& $git push -u origin main --force

Write-Host "`nPush complete!"
