# 🎯 GUÍA RÁPIDA DE USO - Medical Supplies

## ✨ Lo que se ha integrado

### ✅ Completado
- ✓ Estilos CSS modernos y responsivos
- ✓ JavaScript interactivo (carrito, filtros, etc.)
- ✓ Vistas Blade del sistema
- ✓ Controlador actualizado
- ✓ Integración con Base de Datos

---

## 🚀 Inicio Rápido

### 1. **Configurar el servidor**
```bash
cd c:\BO\medical-supples
php artisan serve
```
Luego accede a: `http://localhost:8000`

### 2. **Verificar que todo funcione**

El sitio debe mostrar:
- ✓ Banner de bienvenida
- ✓ Sección Hero
- ✓ Carrusel de imágenes
- ✓ Catálogo de productos (vacío si no hay datos)
- ✓ Secciones de testimonios, marcas, certificaciones

### 3. **Agregar productos (via Terminal)**

```bash
php artisan tinker

# Luego en la consola:
>>> App\Models\Producto::create([
    'nombre' => 'Monitor de Signos Vitales',
    'precio' => 2500,
    'marca' => 'Philips',
    'categoria' => 'diagnostico',
    'zona' => 'cardiovascular',
    'imagen' => 'https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=500&q=80',
    'descripcion' => 'Monitor multiparamétrico de última generación',
    'especificaciones' => json_encode([
        'Certificación' => 'FDA, CE, ISO 13485',
        'Garantía' => '2 años',
        'Pantalla' => '12.1 pulgadas táctil',
        'Parámetros' => 'ECG, SpO2, NIBP, Temp, Resp'
    ])
])

>>> exit
```

---

## 📱 Pruebas Funcionales

### 1. **Búsqueda**
- [ ] Escribe en el campo de búsqueda
- [ ] Los productos deben filtrarse en tiempo real

### 2. **Filtros**
- [ ] Selecciona una categoría
- [ ] Selecciona una marca
- [ ] Selecciona una zona médica

### 3. **Carrito**
- [ ] Haz click en "Agregar al carrito"
- [ ] El badge debe actualizarse
- [ ] Abre el carrito y verifica los productos
- [ ] Prueba aumentar/disminuir cantidad
- [ ] Elimina un producto

### 4. **Autenticación**
- [ ] Haz click en el icono de usuario
- [ ] Prueba a registrarte
- [ ] Intenta iniciar sesión

### 5. **Responsividad**
- [ ] Abre las herramientas del navegador (F12)
- [ ] Cambia a modo móvil
- [ ] Verifica que todo se vea bien

---

## 🎨 Personalización

### Cambiar colores
Edita `public/css/styles.css`:

```css
:root {
    --primary: #0066cc;        /* Azul principal */
    --primary-dark: #0052a3;   /* Azul oscuro */
    --secondary: #e0f2fe;      /* Azul claro */
    --success: #10b981;        /* Verde */
    --error: #dc2626;          /* Rojo */
}
```

### Cambiar textos y logos
Edita `resources/views/web/index.blade.php`:

```blade
<!-- Para cambiar el nombre del sitio -->
<span class="logo-text">Mi Empresa</span>

<!-- Para cambiar el eslogan -->
<p class="welcome-subtitle">Tu nuevo eslogan aquí</p>
```

---

## 🔧 Solución de Problemas

### Problema: "No se muestran los productos"
**Solución:**
1. Verifica que hay productos en la BD
2. Revisa la consola (F12) para errores
3. Comprueba que `WebController.php` esté actualizado

### Problema: "Los estilos no se ven"
**Solución:**
1. Limpia el caché del navegador (Ctrl+Shift+Del)
2. Verifica que `public/css/styles.css` existe
3. Ejecuta: `php artisan view:clear`

### Problema: "El carrito no funciona"
**Solución:**
1. Abre la consola del navegador (F12)
2. Verifica que `public/js/script.js` está cargado
3. Revisa si hay errores en la consola

### Problema: "El modal de login no funciona"
**Solución:**
1. Verifica que las rutas estén correctas en `routes/web.php`
2. Asegúrate de que Laravel Auth esté configurado
3. Revisa en la consola (F12) si hay errores AJAX

---

## 📊 Estructura de la Base de Datos

### Tabla: productos
```
id (primary key)
nombre (string)
precio (decimal)
marca (string, nullable)
categoria (string, enum: diagnostico, cirugia, laboratorio, urgencias, imagenologia, rehabilitacion)
zona (string, enum: cardiovascular, neurologico, musculoesqueletico, respiratorio)
imagen (string, nullable)
descripcion (text, nullable)
especificaciones (json, nullable)
created_at (timestamp)
updated_at (timestamp)
deleted_at (timestamp, soft delete)
```

---

## 🔗 Rutas Disponibles

```
GET  /                          → Página principal (index)
GET  /producto/{id}             → Detalle del producto
POST /login                     → Iniciar sesión (si está configurado)
POST /register                  → Registrarse (si está configurado)
GET  /carrito                   → Ver carrito
POST /carrito/agregar           → Agregar al carrito
GET  /carrito/eliminar/{id}     → Eliminar del carrito
```

---

## 💡 Tips y Trucos

### 1. **Agregar más productos rápidamente**
```bash
php artisan tinker
>>> for ($i = 1; $i <= 12; $i++) {
    App\Models\Producto::create([
        'nombre' => "Producto $i",
        'precio' => rand(100, 5000),
        'marca' => ['Medtronic', 'Philips', 'GE'][rand(0, 2)],
        'categoria' => ['diagnostico', 'cirugia'][rand(0, 1)],
        'zona' => ['cardiovascular', 'neurologico'][rand(0, 1)],
        'imagen' => 'https://via.placeholder.com/400',
        'descripcion' => "Descripción del producto $i"
    ]);
}
```

### 2. **Limpiar localStorage (carrito)**
En la consola del navegador (F12):
```javascript
localStorage.removeItem('medicalCart');
```

### 3. **Forzar recarga de estilos**
```bash
php artisan view:clear
php artisan cache:clear
```

---

## 📞 Contacto y Soporte

Para problemas o preguntas sobre la integración:

1. Revisa `INTEGRACION_FRONTEND.md` para documentación técnica
2. Revisa `INTEGRACION_RESUMEN.md` para un resumen completo
3. Consulta los comentarios en el código

---

## 🎓 Próximas Mejoras (Opcional)

- [ ] Implementar API endpoints
- [ ] Agregar carrito en la BD (en lugar de localStorage)
- [ ] Sistema de pedidos
- [ ] Panel administrativo
- [ ] Integración de pagos
- [ ] Correos electrónicos automáticos
- [ ] Sistema de reseñas
- [ ] Búsqueda avanzada

---

**¡Listo para empezar! 🚀**

Visita `http://localhost:8000` después de ejecutar `php artisan serve`

