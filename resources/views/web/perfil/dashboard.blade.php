@extends('web.app')

@section('titulo', 'Dashboard - Medical Supples')

@section('contenido')
<div class="container dashboard-container">
    <div class="dashboard-header">
        <h1>Mi Panel de Control</h1>
        <p>Bienvenido, {{ auth()->user()->name }}. Aquí puedes ver tus pedidos y seguimiento.</p>
    </div>

    <div class="dashboard-grid">
        <!-- Main Content -->
        <div>
            <!-- Stats Row -->
            <div class="stats-row">
                <div class="stat-card">
                    <h3>Pedidos Totales</h3>
                    <div class="value">{{ $totalPedidos }}</div>
                </div>
                <div class="stat-card pending">
                    <h3>Pendientes</h3>
                    <div class="value">{{ $pedidosPendientes }}</div>
                </div>
                <div class="stat-card processing">
                    <h3>En Proceso</h3>
                    <div class="value">{{ $pedidosEnProceso }}</div>
                </div>
                <div class="stat-card completed">
                    <h3>Completados</h3>
                    <div class="value">{{ $pedidosCompletados }}</div>
                </div>
            </div>

            <!-- Orders Section -->
            <div class="orders-section">
                <div class="orders-header">
                    <h2>Historial de Pedidos</h2>
                    <div class="filter-buttons">
                        <a href="{{ route('perfil.dashboard') }}" class="filter-btn active">Todos</a>
                        <a href="{{ route('perfil.dashboard', ['estado' => 'pendiente']) }}" class="filter-btn">Pendientes</a>
                        <a href="{{ route('perfil.dashboard', ['estado' => 'procesando']) }}" class="filter-btn">Procesando</a>
                        <a href="{{ route('perfil.dashboard', ['estado' => 'completado']) }}" class="filter-btn">Completados</a>
                    </div>
                </div>

                @if($pedidos->count() > 0)
                    <table class="orders-table">
                        <thead>
                            <tr>
                                <th>ID de Pedido</th>
                                <th>Fecha</th>
                                <th>Artículos</th>
                                <th>Total</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pedidos as $pedido)
                                <tr>
                                    <td>
                                        <span class="order-id">#{{ str_pad($pedido->id, 6, '0', STR_PAD_LEFT) }}</span>
                                    </td>
                                    <td>
                                        {{ $pedido->created_at->format('d/m/Y') }}
                                    </td>
                                    <td>
                                        <span class="order-items">
                                            {{ $pedido->detalles->count() }} artículo(s)
                                        </span>
                                    </td>
                                    <td>
                                        <span class="order-amount">${{ number_format($pedido->total, 2) }}</span>
                                    </td>
                                    <td>
                                        @php
                                            $estado = strtolower($pedido->estado);
                                            $statusClass = match($estado) {
                                                'pendiente' => 'pending',
                                                'procesando' => 'processing',
                                                'completado' => 'completed',
                                                'cancelado' => 'cancelled',
                                                default => 'pending'
                                            };
                                            $statusLabel = match($estado) {
                                                'pendiente' => 'Pendiente',
                                                'procesando' => 'Procesando',
                                                'completado' => 'Completado',
                                                'cancelado' => 'Cancelado',
                                                default => 'Desconocido'
                                            };
                                        @endphp
                                        <span class="status-badge {{ $statusClass }}">{{ $statusLabel }}</span>
                                    </td>
                                    <td>
                                        <div class="order-actions">
                                            <a href="{{ route('perfil.pedido.detalle', $pedido->id) }}" class="action-btn">Ver Detalles</a>
                                            @if($estado === 'pendiente')
                                                <form method="POST" action="{{ route('perfil.pedido.cancelar', $pedido->id) }}" style="display: inline;">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="action-btn danger" onclick="return confirm('¿Estás seguro de que deseas cancelar este pedido?')">Cancelar</button>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="pagination">
                        {{ $pedidos->links() }}
                    </div>
                @else
                    <div class="empty-state">
                        <div class="empty-icon">
                            <i class="fas fa-inbox"></i>
                        </div>
                        <h3>No hay pedidos</h3>
                        <p>Aún no has realizado ningún pedido. ¡Explora nuestros productos!</p>
                        <a href="{{ route('productos') }}" class="btn btn-primary">Ir a Productos</a>
                    </div>
                @endif
            </div>
        </div>

        <!-- Sidebar -->
        <aside class="dashboard-sidebar">
            <!-- Quick Stats -->
            <div class="sidebar-card">
                <h3>Resumen de Cuenta</h3>
                <ul class="sidebar-list">
                    <li>
                        <a href="{{ route('perfil.edit') }}">
                            <span>Mi Perfil</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('perfil.direcciones') }}">
                            <span>Direcciones</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('perfil.pagos') }}">
                            <span>Métodos de Pago</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Order Stats -->
            <div class="sidebar-card">
                <h3>Estadísticas</h3>
                <ul class="sidebar-list">
                    <li>
                        <a href="{{ route('perfil.dashboard') }}">
                            <span>Total Gastado</span>
                            <strong>${{ number_format($totalGastado, 2) }}</strong>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('perfil.dashboard') }}">
                            <span>Promedio por Pedido</span>
                            <strong>${{ $totalPedidos > 0 ? number_format($totalGastado / $totalPedidos, 2) : '0.00' }}</strong>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('perfil.dashboard') }}">
                            <span>Último Pedido</span>
                            <strong>{{ $ultimoPedido ? $ultimoPedido->created_at->format('d/m/Y') : 'N/A' }}</strong>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Quick Actions -->
            <div class="sidebar-card">
                <h3>Acciones Rápidas</h3>
                <ul class="sidebar-list">
                    <li>
                        <a href="{{ route('carrito.mostrar') }}">
                            <span>Ver Carrito</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('productos') }}">
                            <span>Continuar Comprando</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('perfil.descargas') }}">
                            <span>Mis Descargas</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
</div>
@endsection
