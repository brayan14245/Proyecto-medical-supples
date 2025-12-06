#!/bin/bash
# Script de verificación de integración - Medical Supplies

echo "🔍 VERIFICANDO INTEGRACIÓN DE FRONTEND..."
echo "==========================================="

# Colores
GREEN='\033[0;32m'
RED='\033[0;31m'
NC='\033[0m' # No Color

# Arrays para resultados
declare -a CHECKS=()
declare -a RESULTS=()

# Función para verificar archivos
check_file() {
    local file=$1
    local name=$2
    
    if [ -f "$file" ]; then
        echo -e "${GREEN}✓${NC} $name"
        CHECKS+=("$name")
        RESULTS+=("PASS")
    else
        echo -e "${RED}✗${NC} $name"
        CHECKS+=("$name")
        RESULTS+=("FAIL")
    fi
}

echo ""
echo "📁 VERIFICANDO ARCHIVOS..."
echo ""

# Verificar archivos CSS
check_file "public/css/styles.css" "CSS: public/css/styles.css"

# Verificar archivos JavaScript
check_file "public/js/script.js" "JavaScript: public/js/script.js"

# Verificar vistas Blade
check_file "resources/views/web/app.blade.php" "Vista: resources/views/web/app.blade.php"
check_file "resources/views/web/index.blade.php" "Vista: resources/views/web/index.blade.php"

# Verificar controlador
check_file "app/Http/Controllers/WebController.php" "Controlador: app/Http/Controllers/WebController.php"

# Verificar migraciones
check_file "database/migrations/2025_04_08_032354_create_productos_table.php" "Migración: productos table"

# Verificar documentación
check_file "INTEGRACION_FRONTEND.md" "Documentación: INTEGRACION_FRONTEND.md"

echo ""
echo "==========================================="
echo "📊 RESUMEN DE VERIFICACIÓN"
echo "==========================================="

# Contar resultados
passed=0
failed=0

for result in "${RESULTS[@]}"; do
    if [ "$result" = "PASS" ]; then
        ((passed++))
    else
        ((failed++))
    fi
done

echo ""
echo -e "✓ Archivos correctos: ${GREEN}$passed${NC}"
echo -e "✗ Archivos faltantes: ${RED}$failed${NC}"

echo ""
echo "==========================================="
echo "🚀 PASOS SIGUIENTES"
echo "==========================================="
echo ""
echo "1. Ejecutar migraciones:"
echo "   php artisan migrate"
echo ""
echo "2. Crear productos de prueba:"
echo "   php artisan tinker"
echo ""
echo "3. Iniciar servidor de desarrollo:"
echo "   php artisan serve"
echo ""
echo "4. Acceder al sitio:"
echo "   http://localhost:8000/"
echo ""

if [ $failed -eq 0 ]; then
    echo -e "${GREEN}✓ ¡Integración completa y verificada!${NC}"
else
    echo -e "${RED}✗ Hay archivos faltantes. Verifica la instalación.${NC}"
fi

echo ""
