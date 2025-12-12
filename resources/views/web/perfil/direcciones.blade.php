@extends('web.app')

@section('titulo', 'Mis Direcciones - Medical Supples')

@section('contenido')
<div class="container dashboard-container">
    <div style="margin-bottom: 2rem;">
        <a href="{{ route('perfil.dashboard') }}" style="color: var(--primary); text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
            <i class="fas fa-arrow-left"></i> Volver al Dashboard
        </a>
    </div>

    <div style="background: var(--white); border-radius: var(--radius-lg); padding: 2rem; box-shadow: var(--shadow-sm); min-height: 50vh;">
        <h1 style="color: var(--gray-900); margin-bottom: 1rem;">Mis Direcciones</h1>
        <p style="color: var(--gray-600);">Esta sección está en desarrollo. Aquí podrás gestionar tus direcciones de envío.</p>
    </div>
</div>
@endsection
