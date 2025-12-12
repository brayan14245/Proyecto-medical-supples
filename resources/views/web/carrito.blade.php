@extends('web.app')

@section('titulo', 'Carrito de Compras - Medical Supplies')

@section('contenido')
    <!-- Carrito Section -->
    <section class="carrito-section">
        <div class="container">
            <div class="carrito-header">
                <h1><i class="fas fa-shopping-cart me-2"></i>Carrito de Compras</h1>
                <p>Revisa y confirma tus productos antes de pagar</p>
            </div>

            @if (session('mensaje'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('mensaje') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                </div>
            @endif

            @if(!empty($carrito))
            <div class="carrito-content">
                <!-- Tabla de Productos -->
                <div class="carrito-table-wrapper">
                    <table class="carrito-table">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Subtotal</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($carrito as $id => $item)
                            <tr>
                                <td>
                                    <div class="product-info">
                                        <img src="{{ asset('uploads/productos/' . $item['imagen']) }}" 
                                             alt="{{ $item['nombre'] }}" 
                                             class="product-image">
                                        <div class="product-details">
                                            <h4>{{ $item['nombre'] }}</h4>
                                            <p>{{ $item['codigo'] }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="price">${{ number_format($item['precio'], 2) }}</span>
                                </td>
                                <td>
                                    <div class="quantity-control">
                                        <a href="{{ route('carrito.restar', ['producto_id' => $id]) }}" class="quantity-btn">-</a>
                                        <input type="text" class="quantity-input" value="{{ $item['cantidad'] }}" readonly>
                                        <a href="{{ route('carrito.sumar', ['producto_id' => $id]) }}" class="quantity-btn">+</a>
                                    </div>
                                </td>
                                <td>
                                    <span class="subtotal">${{ number_format($item['precio'] * $item['cantidad'], 2) }}</span>
                                </td>
                                <td>
                                    <a href="{{ route('carrito.eliminar', $id) }}" class="remove-btn" title="Eliminar">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Resumen del Carrito -->
                <div class="carrito-summary">
                    <div class="summary-card">
                        <h3>Resumen del Pedido</h3>
                        
                        @php
                            $total = 0;
                            foreach ($carrito as $item) {
                                $total += $item['precio'] * $item['cantidad'];
                            }
                        @endphp

                        <div class="summary-row">
                            <span>Subtotal:</span>
                            <span>${{ number_format($total, 2) }}</span>
                        </div>
                        
                        <div class="summary-row">
                            <span>Envío:</span>
                            <span class="text-muted">Calcular en checkout</span>
                        </div>

                        <div class="summary-divider"></div>

                        <div class="summary-total">
                            <span>Total:</span>
                            <span>${{ number_format($total, 2) }}</span>
                        </div>

                        @auth
                            <a href="{{ route('checkout') }}" class="btn btn-primary btn-full">
                                <i class="fas fa-lock me-2"></i>
                                Proceder al Pago
                            </a>
                        @else
                            <button type="button" class="btn btn-primary btn-full" onclick="document.getElementById('loginModal').classList.add('active')">
                                <i class="fas fa-lock me-2"></i>
                                Iniciar Sesión para Comprar
                            </button>
                        @endauth

                        <a href="/" class="btn btn-outline btn-full mt-2">
                            <i class="fas fa-arrow-left me-2"></i>
                            Continuar Comprando
                        </a>

                        <a href="{{ route('carrito.vaciar') }}" class="btn btn-outline-danger btn-full mt-2">
                            <i class="fas fa-trash me-2"></i>
                            Vaciar Carrito
                        </a>
                    </div>
                </div>
            </div>
            @else
            <!-- Empty Cart Message -->
            <div class="empty-cart">
                <div class="empty-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <h2>Tu carrito está vacío</h2>
                <p>Agrega productos a tu carrito para continuar</p>
                <a href="/" class="btn btn-primary">
                    <i class="fas fa-shopping-bag me-2"></i>
                    Ir al Catálogo
                </a>
            </div>
            @endif
        </div>
    </section>

    <style>
        .carrito-section {
            padding: 3rem 0;
            min-height: 60vh;
        }

        .carrito-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .carrito-header h1 {
            font-size: 2.5rem;
            color: var(--gray-900);
            margin-bottom: 0.5rem;
        }

        .carrito-header p {
            color: var(--gray-600);
            font-size: 1.1rem;
        }

        .carrito-content {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .carrito-table-wrapper {
            background: var(--white);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
        }

        .carrito-table {
            width: 100%;
            border-collapse: collapse;
        }

        .carrito-table thead {
            background-color: var(--gray-100);
            border-bottom: 2px solid var(--gray-200);
        }

        .carrito-table th {
            padding: 1.5rem;
            text-align: left;
            font-weight: 600;
            color: var(--gray-900);
        }

        .carrito-table td {
            padding: 1.5rem;
            border-bottom: 1px solid var(--gray-200);
        }

        .carrito-table tbody tr:last-child td {
            border-bottom: none;
        }

        .product-info {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .product-image {
            width: 80px;
            height: 80px;
            border-radius: var(--radius-md);
            object-fit: cover;
            background-color: var(--gray-200);
        }

        .product-details h4 {
            margin: 0 0 0.5rem 0;
            color: var(--gray-900);
            font-weight: 600;
        }

        .product-details p {
            margin: 0;
            color: var(--gray-600);
            font-size: 0.9rem;
        }

        .price {
            font-weight: 600;
            color: var(--gray-900);
        }

        .quantity-control {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .quantity-btn {
            background-color: var(--gray-200);
            border: none;
            width: 30px;
            height: 30px;
            border-radius: var(--radius-md);
            cursor: pointer;
            font-weight: 600;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: var(--gray-700);
        }

        .quantity-btn:hover {
            background-color: var(--primary);
            color: var(--white);
        }

        .quantity-input {
            width: 50px;
            text-align: center;
            border: 1px solid var(--gray-300);
            border-radius: var(--radius-md);
            padding: 0.5rem;
            background-color: var(--gray-50);
        }

        .subtotal {
            font-weight: 700;
            color: var(--gray-900);
        }

        .remove-btn {
            background: none;
            border: none;
            color: var(--error);
            cursor: pointer;
            font-size: 1.2rem;
            transition: var(--transition);
            text-decoration: none;
            display: inline-block;
        }

        .remove-btn:hover {
            color: var(--warning);
        }

        .carrito-summary {
            position: sticky;
            top: 120px;
            height: fit-content;
        }

        .summary-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            padding: 2rem;
            box-shadow: var(--shadow-sm);
        }

        .summary-card h3 {
            margin: 0 0 1.5rem 0;
            font-size: 1.3rem;
            color: var(--gray-900);
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
            color: var(--gray-700);
        }

        .summary-divider {
            height: 1px;
            background-color: var(--gray-200);
            margin: 1.5rem 0;
        }

        .summary-total {
            display: flex;
            justify-content: space-between;
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--gray-900);
            margin: 1rem 0 1.5rem 0;
        }

        .empty-cart {
            text-align: center;
            padding: 4rem 2rem;
        }

        .empty-icon {
            font-size: 4rem;
            color: var(--gray-300);
            margin-bottom: 1rem;
        }

        .empty-cart h2 {
            color: var(--gray-900);
            margin-bottom: 0.5rem;
        }

        .empty-cart p {
            color: var(--gray-600);
            margin-bottom: 2rem;
        }

        @media (max-width: 768px) {
            .carrito-content {
                grid-template-columns: 1fr;
            }

            .carrito-summary {
                position: static;
            }

            .carrito-table-wrapper {
                overflow-x: auto;
            }
        }
    </style>
@endsection
