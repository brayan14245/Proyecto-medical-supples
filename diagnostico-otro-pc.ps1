# Script de Diagnóstico - Ejecutar en el OTRO PC
Write-Host "`n========================================" -ForegroundColor Cyan
Write-Host "  DIAGNÓSTICO DE ANIMACIONES" -ForegroundColor Cyan
Write-Host "========================================`n" -ForegroundColor Cyan

# 1. Verificar Git
Write-Host "1. Verificando Git..." -ForegroundColor Yellow
$branch = git branch --show-current
$lastCommit = git log -1 --oneline
Write-Host "   Rama: $branch" -ForegroundColor White
Write-Host "   Último commit: $lastCommit" -ForegroundColor White

# 2. Verificar archivos JS
Write-Host "`n2. Verificando archivos JavaScript..." -ForegroundColor Yellow
$scriptJs = Test-Path "public/js/script.js"
$pageTransJs = Test-Path "public/js/page-transitions.js"

if ($scriptJs) {
    $size = (Get-Item "public/js/script.js").Length
    Write-Host "   ✓ script.js existe ($size bytes)" -ForegroundColor Green
    
    $content = Get-Content "public/js/script.js" -Raw
    if ($content -match "initPageTransitions") {
        Write-Host "   ✓ script.js contiene funciones de animación" -ForegroundColor Green
    } else {
        Write-Host "   ✗ script.js NO contiene funciones de animación" -ForegroundColor Red
    }
} else {
    Write-Host "   ✗ script.js NO existe" -ForegroundColor Red
}

if ($pageTransJs) {
    Write-Host "   ⚠ page-transitions.js aún existe (debería ser opcional)" -ForegroundColor Yellow
}

# 3. Verificar app.blade.php
Write-Host "`n3. Verificando app.blade.php..." -ForegroundColor Yellow
$appBlade = Get-Content "resources/views/web/app.blade.php" -Raw

if ($appBlade -match 'script\.js') {
    Write-Host "   ✓ Referencia a script.js encontrada" -ForegroundColor Green
} else {
    Write-Host "   ✗ Referencia a script.js NO encontrada" -ForegroundColor Red
}

if ($appBlade -match 'scripts\.js') {
    Write-Host "   ✗ Referencia duplicada a scripts.js (ERROR)" -ForegroundColor Red
} else {
    Write-Host "   ✓ No hay referencia a scripts.js duplicado" -ForegroundColor Green
}

# 4. Verificar CSS
Write-Host "`n4. Verificando CSS de animaciones..." -ForegroundColor Yellow
$cssExists = Test-Path "public/css/page-transitions.css"

if ($cssExists) {
    $size = (Get-Item "public/css/page-transitions.css").Length
    Write-Host "   ✓ page-transitions.css existe ($size bytes)" -ForegroundColor Green
} else {
    Write-Host "   ✗ page-transitions.css NO existe" -ForegroundColor Red
}

$appBladeCss = $appBlade -match 'page-transitions\.css'
if ($appBladeCss) {
    Write-Host "   ✓ Referencia CSS en app.blade.php" -ForegroundColor Green
} else {
    Write-Host "   ✗ Referencia CSS NO encontrada en app.blade.php" -ForegroundColor Red
}

# 5. Comparar hashes con repositorio
Write-Host "`n5. Verificando sincronización con repositorio..." -ForegroundColor Yellow
$localHash = git rev-parse HEAD
$remoteHash = git rev-parse origin/main

if ($localHash -eq $remoteHash) {
    Write-Host "   ✓ Local sincronizado con remoto" -ForegroundColor Green
} else {
    Write-Host "   ✗ Desincronizado con remoto" -ForegroundColor Red
    Write-Host "     Local:  $localHash" -ForegroundColor Gray
    Write-Host "     Remoto: $remoteHash" -ForegroundColor Gray
}

# 6. Verificar cambios pendientes
Write-Host "`n6. Verificando cambios sin commitear..." -ForegroundColor Yellow
$status = git status --porcelain
if ($status) {
    Write-Host "   ⚠ Hay cambios sin commitear:" -ForegroundColor Yellow
    Write-Host $status -ForegroundColor Gray
} else {
    Write-Host "   ✓ No hay cambios pendientes" -ForegroundColor Green
}

# 7. Verificar si hay conflictos en script.js
Write-Host "`n7. Analizando script.js..." -ForegroundColor Yellow
if ($scriptJs) {
    $scriptContent = Get-Content "public/js/script.js" -Raw
    $lines = (Get-Content "public/js/script.js").Count
    Write-Host "   Total de líneas: $lines" -ForegroundColor White
    
    if ($scriptContent -match "SECCIÓN 8: FUNCIONES DE ANIMACIÓN") {
        Write-Host "   ✓ Contiene sección de animaciones" -ForegroundColor Green
    } else {
        Write-Host "   ✗ NO contiene sección de animaciones" -ForegroundColor Red
    }
}

# 8. Recomendaciones
Write-Host "`n========================================" -ForegroundColor Cyan
Write-Host "  SOLUCIONES RECOMENDADAS" -ForegroundColor Cyan
Write-Host "========================================`n" -ForegroundColor Cyan

Write-Host "Ejecuta estos comandos:" -ForegroundColor Yellow
Write-Host ""
Write-Host "1. Actualizar repositorio:" -ForegroundColor White
Write-Host "   git fetch origin" -ForegroundColor Green
Write-Host "   git reset --hard origin/main" -ForegroundColor Green
Write-Host ""
Write-Host "2. Limpiar cachés de Laravel:" -ForegroundColor White
Write-Host "   php artisan cache:clear" -ForegroundColor Green
Write-Host "   php artisan view:clear" -ForegroundColor Green
Write-Host "   php artisan config:clear" -ForegroundColor Green
Write-Host ""
Write-Host "3. Limpiar caché del navegador:" -ForegroundColor White
Write-Host "   - Presiona Ctrl + Shift + Delete" -ForegroundColor Green
Write-Host "   - O abre en modo incógnito (Ctrl + Shift + N)" -ForegroundColor Green
Write-Host ""
Write-Host "4. Si persiste el problema:" -ForegroundColor White
Write-Host "   - Abre DevTools (F12)" -ForegroundColor Green
Write-Host "   - Ve a Console y Network" -ForegroundColor Green
Write-Host "   - Busca errores en rojo" -ForegroundColor Green
Write-Host ""

# 9. Información adicional
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "  INFORMACIÓN DEL SISTEMA" -ForegroundColor Cyan
Write-Host "========================================`n" -ForegroundColor Cyan

$phpVersion = php -v | Select-String "PHP" | Select-Object -First 1
Write-Host "PHP: $phpVersion" -ForegroundColor White

$composerVersion = composer -V 2>$null
if ($composerVersion) {
    Write-Host "Composer: $composerVersion" -ForegroundColor White
}

Write-Host "`nRuta del proyecto: $(Get-Location)" -ForegroundColor White
Write-Host ""
