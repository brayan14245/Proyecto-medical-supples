# Script de verificación de animaciones
Write-Host "`n=== VERIFICACIÓN DE ANIMACIONES ===" -ForegroundColor Cyan

# 1. Verificar archivos CSS y JS
Write-Host "`n1. Verificando existencia de archivos..." -ForegroundColor Yellow
$cssExists = Test-Path "public/css/page-transitions.css"
$jsExists = Test-Path "public/js/page-transitions.js"

if ($cssExists) {
    Write-Host "   ✓ page-transitions.css existe" -ForegroundColor Green
    $cssSize = (Get-Item "public/css/page-transitions.css").Length
    Write-Host "     Tamaño: $cssSize bytes" -ForegroundColor Gray
} else {
    Write-Host "   ✗ page-transitions.css NO existe" -ForegroundColor Red
}

if ($jsExists) {
    Write-Host "   ✓ page-transitions.js existe" -ForegroundColor Green
    $jsSize = (Get-Item "public/js/page-transitions.js").Length
    Write-Host "     Tamaño: $jsSize bytes" -ForegroundColor Gray
} else {
    Write-Host "   ✗ page-transitions.js NO existe" -ForegroundColor Red
}

# 2. Verificar referencias en app.blade.php
Write-Host "`n2. Verificando referencias en app.blade.php..." -ForegroundColor Yellow
$appBlade = Get-Content "resources/views/web/app.blade.php" -Raw
if ($appBlade -match "page-transitions.css") {
    Write-Host "   ✓ Referencia CSS encontrada" -ForegroundColor Green
} else {
    Write-Host "   ✗ Referencia CSS NO encontrada" -ForegroundColor Red
}

if ($appBlade -match "page-transitions.js") {
    Write-Host "   ✓ Referencia JS encontrada" -ForegroundColor Green
} else {
    Write-Host "   ✗ Referencia JS NO encontrada" -ForegroundColor Red
}

# 3. Verificar contenido de los archivos
Write-Host "`n3. Verificando contenido de archivos..." -ForegroundColor Yellow
if ($cssExists) {
    $cssContent = Get-Content "public/css/page-transitions.css" -Raw
    if ($cssContent -match "page-transitions" -or $cssContent -match "section") {
        Write-Host "   ✓ CSS contiene código de animaciones" -ForegroundColor Green
    } else {
        Write-Host "   ⚠ CSS parece estar vacío o incompleto" -ForegroundColor Yellow
    }
}

if ($jsExists) {
    $jsContent = Get-Content "public/js/page-transitions.js" -Raw
    if ($jsContent -match "initPageTransitions" -or $jsContent -match "IntersectionObserver") {
        Write-Host "   ✓ JS contiene código de animaciones" -ForegroundColor Green
    } else {
        Write-Host "   ⚠ JS parece estar vacío o incompleto" -ForegroundColor Yellow
    }
}

# 4. Verificar estado de Git
Write-Host "`n4. Verificando estado de Git..." -ForegroundColor Yellow
$gitStatus = git status --porcelain
if ($gitStatus) {
    Write-Host "   ⚠ Hay cambios sin commitear:" -ForegroundColor Yellow
    Write-Host $gitStatus -ForegroundColor Gray
} else {
    Write-Host "   ✓ Working tree limpio" -ForegroundColor Green
}

$currentBranch = git branch --show-current
Write-Host "   Rama actual: $currentBranch" -ForegroundColor Gray

# 5. Verificar último commit
Write-Host "`n5. Verificando último commit..." -ForegroundColor Yellow
$lastCommit = git log -1 --oneline
Write-Host "   $lastCommit" -ForegroundColor Gray

# 6. Verificar si los archivos están en Git
Write-Host "`n6. Verificando archivos en Git..." -ForegroundColor Yellow
$cssInGit = git ls-files | Select-String "page-transitions.css"
$jsInGit = git ls-files | Select-String "page-transitions.js"

if ($cssInGit) {
    Write-Host "   ✓ page-transitions.css está trackeado en Git" -ForegroundColor Green
} else {
    Write-Host "   ✗ page-transitions.css NO está trackeado en Git" -ForegroundColor Red
}

if ($jsInGit) {
    Write-Host "   ✓ page-transitions.js está trackeado en Git" -ForegroundColor Green
} else {
    Write-Host "   ✗ page-transitions.js NO está trackeado en Git" -ForegroundColor Red
}

# 7. Verificar permisos
Write-Host "`n7. Verificando permisos de archivos..." -ForegroundColor Yellow
if ($cssExists) {
    $cssPerms = (Get-Acl "public/css/page-transitions.css").Access | Select-Object -First 1
    Write-Host "   CSS: Permisos OK" -ForegroundColor Green
}
if ($jsExists) {
    $jsPerms = (Get-Acl "public/js/page-transitions.js").Access | Select-Object -First 1
    Write-Host "   JS: Permisos OK" -ForegroundColor Green
}

# 8. Recomendaciones
Write-Host "`n=== RECOMENDACIONES ===" -ForegroundColor Cyan
Write-Host "En el otro PC, ejecuta:" -ForegroundColor Yellow
Write-Host "  1. git pull origin main" -ForegroundColor White
Write-Host "  2. php artisan cache:clear" -ForegroundColor White
Write-Host "  3. php artisan view:clear" -ForegroundColor White
Write-Host "  4. Ctrl + Shift + R en el navegador (hard refresh)" -ForegroundColor White
Write-Host "  5. Abre DevTools (F12) > Network > Deshabilita caché" -ForegroundColor White
Write-Host "`n"
