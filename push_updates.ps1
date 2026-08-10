$git = "C:\Program Files\Git\cmd\git.exe"
$repoDir = "c:\Users\canbe\OneDrive\Desktop\ESNAFCOCO"

Set-Location $repoDir

Remove-Item -Path "$repoDir\update_zip_package.ps1" -Force -ErrorAction SilentlyContinue

& $git add .
& $git commit -m "fix: inline SVG icons for Instagram & YouTube, update links and form submission to info@esnafcocollective.com"
& $git push origin main

Write-Host "GitHub Push Completed Successfully!"
