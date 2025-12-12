@extends('web.app')

@section('titulo', 'Detalle del Pedido #' . str_pad($pedido->id, 6, '0', STR_PAD_LEFT) . ' - Medical Supples')

@section('contenido')
<div class="container" style="padding: 2rem 0; min-height: 70vh;">
    <div style="margin-bottom: 2rem;">
        <a href="{{ route('perfil.dashboard') }}" style="color: var(--primary); text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
            <i class="fas fa-arrow-left"></i> Volver al Dashboard
        </a>
    </div>

    <div style="background: var(--white); border-radius: var(--radius-lg); padding: 2rem; box-shadow: var(--shadow-sm);">
        <!-- Header -->
        <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 2rem; padding-bottom: 1.5rem; border-bottom: 2px solid var(--gray-100);">
            <div>
                <h1 style="margin: 0 0 0.5rem 0; color: var(--gray-900);">Pedido #{{ str_pad($pedido->id, 6, '0', STR_PAD_LEFT) }}</h1>
                <p style="margin: 0; color: var(--gray-600);">Realizado el {{ $pedido->created_at->format('d \d\e F \d\e Y \a \l\a\s H:i') }}</p>
            </div>
            @php
                $estado = strtolower($pedido->estado);
                $statusClass = match($estado) {
                    'en espera' => 'pending',
                    'pendiente' => 'pending',
                    'procesando' => 'processing',
                    'completado' => 'completed',
                    'cancelado' => 'cancelled',
                    default => 'pending'
                };
                $statusLabel = match($estado) {
                    'en espera' => 'En Espera',
                    'pendiente' => 'Pendiente',
                    'procesando' => 'Procesando',
                    'completado' => 'Completado',
                    'cancelado' => 'Cancelado',
                    default => 'Desconocido'
                };
            @endphp
            <span class="status-badge {{ $statusClass }}" style="font-size: 1rem; padding: 0.5rem 1rem;">{{ $statusLabel }}</span>
        </div>

        <!-- Order Information -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 2rem;">
            <div>
                <h3 style="margin: 0 0 1rem 0; color: var(--gray-900);">Información del Pedido</h3>
                <div style="background: var(--gray-50); padding: 1rem; border-radius: var(--radius-md); color: var(--gray-700);">
                    <p style="margin: 0 0 0.5rem 0;"><strong>Número de Pedido:</strong> #{{ str_pad($pedido->id, 6, '0', STR_PAD_LEFT) }}</p>
                    <p style="margin: 0 0 0.5rem 0;"><strong>Estado:</strong> {{ $statusLabel }}</p>
                    <p style="margin: 0 0 0.5rem 0;"><strong>Fecha de Pedido:</strong> {{ $pedido->created_at->format('d/m/Y') }}</p>
                    <p style="margin: 0 0 0.5rem 0;"><strong>Total Artículos:</strong> {{ $pedido->detalles->count() }}</p>
                    <p style="margin: 0;"><strong>Total:</strong> <span style="color: var(--primary); font-size: 1.2rem; font-weight: 700;">${{ number_format($pedido->total, 2) }}</span></p>
                </div>
            </div>

            <div>
                <h3 style="margin: 0 0 1rem 0; color: var(--gray-900);">Detalles de Envío</h3>
                <div style="background: var(--gray-50); padding: 1rem; border-radius: var(--radius-md); color: var(--gray-700);">
                    <p style="margin: 0 0 0.5rem 0;"><strong>Método de Envío:</strong> {{ $pedido->metodo_envio ?? 'Estándar' }}</p>
                    <p style="margin: 0 0 0.5rem 0;"><strong>Costo de Envío:</strong> ${{ number_format($pedido->costo_envio ?? 0, 2) }}</p>
                    <p style="margin: 0;"><strong>Estado de Envío:</strong> {{ ucfirst($estado) }}</p>
                </div>
            </div>
        </div>

        <!-- Products Table -->
        <div style="margin-bottom: 2rem;">
            <h3 style="margin: 0 0 1rem 0; color: var(--gray-900);">Artículos del Pedido</h3>
            <table class="orders-table" style="width: 100%;">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Código</th>
                        <th>Marca</th>
                        <th style="text-align: center;">Cantidad</th>
                        <th style="text-align: right;">Precio Unitario</th>
                        <th style="text-align: right;">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pedido->detalles as $detalle)
                        <tr>
                            <td>
                                <div style="display: flex; gap: 1rem; align-items: center;">
                                    @if($detalle->producto && $detalle->producto->imagen)
                                        <img src="{{ asset('uploads/productos/' . $detalle->producto->imagen) }}" alt="{{ $detalle->producto->nombre }}" style="width: 50px; height: 50px; object-fit: cover; border-radius: var(--radius-md);">
                                    @else
                                        <div style="width: 50px; height: 50px; background-color: var(--gray-200); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center;">
                                            <i class="fas fa-image" style="color: var(--gray-400);"></i>
                                        </div>
                                    @endif
                                    <div>
                                        <p style="margin: 0; color: var(--gray-900); font-weight: 500;">{{ $detalle->nombre_producto ?? ($detalle->producto->nombre ?? 'Producto no disponible') }}</p>
                                        <p style="margin: 0; color: var(--gray-600); font-size: 0.9rem;">{{ Str::limit($detalle->descripcion_producto ?? '', 50) }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $detalle->codigo_producto ?? ($detalle->producto->codigo ?? 'N/A') }}</td>
                            <td>{{ $detalle->marca_producto ?? ($detalle->producto->marca ?? 'N/A') }}</td>
                            <td style="text-align: center;">{{ $detalle->cantidad }}</td>
                            <td style="text-align: right;">${{ number_format($detalle->precio_unitario ?? 0, 2) }}</td>
                            <td style="text-align: right; font-weight: 600; color: var(--primary);">${{ number_format(($detalle->precio_unitario ?? 0) * $detalle->cantidad, 2) }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" style="text-align: center; padding: 2rem; color: var(--gray-600);">
                                <i class="fas fa-inbox" style="font-size: 2rem; color: var(--gray-300);"></i>
                                <p>No hay artículos en este pedido</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Summary -->
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 2rem; margin-bottom: 2rem;">
            <div></div>
            <div style="background: var(--gray-50); padding: 1.5rem; border-radius: var(--radius-md);">
                <div style="display: flex; justify-content: space-between; margin-bottom: 0.75rem; color: var(--gray-700);">
                    <span>Subtotal:</span>
                    <span>${{ number_format($pedido->subtotal ?? ($pedido->total - ($pedido->costo_envio ?? 0)), 2) }}</span>
                </div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 0.75rem; color: var(--gray-700);">
                    <span>Envío:</span>
                    <span>${{ number_format($pedido->costo_envio ?? 0, 2) }}</span>
                </div>
                @if($pedido->descuento)
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.75rem; color: var(--success);">
                        <span>Descuento:</span>
                        <span>-${{ number_format($pedido->descuento, 2) }}</span>
                    </div>
                @endif
                <div style="border-top: 2px solid var(--gray-200); margin-top: 1rem; padding-top: 1rem; display: flex; justify-content: space-between; font-size: 1.1rem; font-weight: 700; color: var(--gray-900);">
                    <span>Total:</span>
                    <span style="color: var(--primary);">${{ number_format($pedido->total, 2) }}</span>
                </div>
            </div>
        </div>

        <!-- Actions -->
        <div style="display: flex; gap: 1rem; padding-top: 1.5rem; border-top: 2px solid var(--gray-100);">
            @if($estado === 'pendiente')
                <form method="POST" action="{{ route('perfil.pedido.cancelar', $pedido->id) }}" style="display: inline;">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="action-btn danger" onclick="return confirm('¿Estás seguro de que deseas cancelar este pedido?')" style="padding: 0.75rem 1.5rem; font-size: 1rem;">
                        Cancelar Pedido
                    </button>
                </form>
            @endif
            <a href="{{ route('perfil.dashboard') }}" class="action-btn" style="padding: 0.75rem 1.5rem; font-size: 1rem;">Volver a Pedidos</a>
        </div>
    </div>
</div>
@endsection
