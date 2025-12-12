@extends('web.app')
@section('header')
@endsection

@section('contenido')
<div class="container" style="padding: 2rem 0;">
    <div class="alert alert-info" role="alert">
        <h4 class="alert-heading">✅ Integración Completada</h4>
        <p>Los archivos frontend han sido integrados exitosamente al sistema Medical Supplies.</p>
        <hr>
        <p class="mb-0">
            <strong>Archivos instalados:</strong>
            <ul>
                <li>✓ CSS: <code>public/css/styles.css</code></li>
                <li>✓ JavaScript: <code>public/js/script.js</code></li>
                <li>✓ Vistas Blade: <code>resources/views/web/</code></li>
                <li>✓ Controlador: <code>app/Http/Controllers/WebController.php</code></li>
            </ul>
        </p>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">📊 Estadísticas</h5>
                    <ul class="list-unstyled">
                        <li><strong>Productos:</strong> {{ $stats['productos_count'] ?? 'N/A' }}</li>
                        <li><strong>Clientes:</strong> {{ $stats['clientes'] ?? 'N/A' }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">🔧 Acciones</h5>
                    <a href="{{ route('web.index') }}" class="btn btn-primary btn-sm">Ver Catálogo</a>
                    @auth
                        <a href="{{ route('perfil.edit') }}" class="btn btn-secondary btn-sm">Mi Perfil</a>
                    @else
                        <button onclick="openLoginModal()" class="btn btn-secondary btn-sm">Iniciar Sesión</button>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <h5>📚 Documentación</h5>
        <p>Consulta el archivo <code>INTEGRACION_FRONTEND.md</code> para más información sobre la integración.</p>
    </div>
</div>
@endsection
