@extends('web.app')

@section('titulo', 'Finalizar Compra - Medical Supplies')

@section('contenido')
    <section class="checkout-section">
        <div class="container">
            <div class="checkout-header">
                <h1><i class="fas fa-shopping-bag me-2"></i>Finalizar Compra</h1>
                <p>Completa tu información para procesar el pedido</p>
            </div>

            <div class="checkout-content">
                <!-- Formulario de Checkout -->
                <div class="checkout-form-wrapper">
                    <form id="checkoutForm" method="POST" action="{{ route('pedido.realizar') }}">
                        @csrf
                        
                        <!-- Información de Envío -->
                        <div class="form-section">
                            <h3><i class="fas fa-map-marker-alt me-2"></i>Información de Envío</h3>
                            
                            <div class="form-group">
                                <label for="direccion">Dirección Completa *</label>
                                <textarea id="direccion" name="direccion" class="form-control" rows="3" required 
                                    placeholder="Calle, número, colonia, código postal, ciudad"></textarea>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="telefono">Teléfono de Contacto</label>
                                    <input type="tel" id="telefono" name="telefono" class="form-control" 
                                        placeholder="(555) 123-4567">
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo Electrónico</label>
                                    <input type="email" id="email" name="email" class="form-control" 
                                        value="{{ auth()->user()->email }}" readonly>
                                </div>
                            </div>
                        </div>

                        <!-- Método de Envío -->
                        <div class="form-section">
                            <h3><i class="fas fa-truck me-2"></i>Método de Envío</h3>
                            
                            <div class="shipping-options">
                                <label class="shipping-option">
                                    <input type="radio" name="metodo_envio" value="standard" checked onchange="updateTotals()">
                                    <div class="option-content">
                                        <div class="option-header">
                                            <span class="option-title">Envío Standard</span>
                                            <span class="option-price">GRATIS</span>
                                        </div>
                                        <p class="option-description">Entrega en 5-7 días hábiles</p>
                                    </div>
                                </label>

                                <label class="shipping-option">
                                    <input type="radio" name="metodo_envio" value="express" onchange="updateTotals()">
                                    <div class="option-content">
                                        <div class="option-header">
                                            <span class="option-title">Envío Express</span>
                                            <span class="option-price">$50.00</span>
                                        </div>
                                        <p class="option-description">Entrega en 2-3 días hábiles</p>
                                    </div>
                                </label>

                                <label class="shipping-option">
                                    <input type="radio" name="metodo_envio" value="premium" onchange="updateTotals()">
                                    <div class="option-content">
                                        <div class="option-header">
                                            <span class="option-title">Envío Premium</span>
                                            <span class="option-price">$100.00</span>
                                        </div>
                                        <p class="option-description">Entrega en 24 horas</p>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Método de Pago -->
                        <div class="form-section">
                            <h3><i class="fas fa-credit-card me-2"></i>Método de Pago</h3>
                            
                            <div class="payment-options">
                                <label class="payment-option">
                                    <input type="radio" name="metodo_pago" value="efectivo" checked>
                                    <div class="option-content">
                                        <div class="option-header">
                                            <i class="fas fa-money-bill-wave" style="font-size: 1.5rem; color: var(--success);"></i>
                                            <span class="option-title">Pago en Efectivo</span>
                                        </div>
                                        <p class="option-description">Paga al recibir tu pedido</p>
                                    </div>
                                </label>

                                <label class="payment-option">
                                    <input type="radio" name="metodo_pago" value="tarjeta">
                                    <div class="option-content">
                                        <div class="option-header">
                                            <i class="fas fa-credit-card" style="font-size: 1.5rem; color: var(--primary);"></i>
                                            <span class="option-title">Tarjeta de Crédito/Débito</span>
                                        </div>
                                        <p class="option-description">Pago seguro en línea</p>
                                    </div>
                                </label>

                                <label class="payment-option">
                                    <input type="radio" name="metodo_pago" value="transferencia">
                                    <div class="option-content">
                                        <div class="option-header">
                                            <i class="fas fa-university" style="font-size: 1.5rem; color: var(--info);"></i>
                                            <span class="option-title">Transferencia Bancaria</span>
                                        </div>
                                        <p class="option-description">Te enviaremos los datos bancarios</p>
                                    </div>
                                </label>

                                <label class="payment-option">
                                    <input type="radio" name="metodo_pago" value="paypal">
                                    <div class="option-content">
                                        <div class="option-header">
                                            <i class="fab fa-paypal" style="font-size: 1.5rem; color: #0070ba;"></i>
                                            <span class="option-title">PayPal</span>
                                        </div>
                                        <p class="option-description">Pago rápido y seguro con PayPal</p>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Notas del Pedido -->
                        <div class="form-section">
                            <h3><i class="fas fa-comment-alt me-2"></i>Notas del Pedido (Opcional)</h3>
                            <div class="form-group">
                                <textarea id="notas" name="notas" class="form-control" rows="3" 
                                    placeholder="Instrucciones especiales para la entrega..."></textarea>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Resumen del Pedido -->
                <div class="order-summary-wrapper">
                    <div class="order-summary-card">
                        <h3>Resumen del Pedido</h3>

                        <div class="order-items" id="orderItems">
                            @foreach($carrito as $id => $item)
                            <div class="order-item">
                                <img src="{{ asset('uploads/productos/' . $item['imagen']) }}" alt="{{ $item['nombre'] }}" class="order-item-image">
                                <div class="order-item-details">
                                    <div class="order-item-name">{{ $item['nombre'] }}</div>
                                    <div class="order-item-quantity">Cantidad: {{ $item['cantidad'] }}</div>
                                </div>
                                <div class="order-item-price">${{ number_format($item['precio'] * $item['cantidad'], 2) }}</div>
                            </div>
                            @endforeach
                        </div>

                        <div class="summary-divider"></div>

                        <div class="summary-totals">
                            @php
                                $subtotal = 0;
                                foreach ($carrito as $item) {
                                    $subtotal += $item['precio'] * $item['cantidad'];
                                }
                            @endphp
                            <div class="summary-row">
                                <span>Subtotal:</span>
                                <span id="summarySubtotal">${{ number_format($subtotal, 2) }}</span>
                            </div>
                            <div class="summary-row">
                                <span>Envío:</span>
                                <span id="summaryShipping">GRATIS</span>
                            </div>
                            <div class="summary-row summary-total">
                                <span>Total:</span>
                                <span id="summaryTotal">${{ number_format($subtotal, 2) }}</span>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-full" onclick="event.preventDefault(); document.getElementById('checkoutForm').submit();">
                            <i class="fas fa-check-circle me-2"></i>
                            Confirmar Pedido
                        </button>

                        <a href="{{ route('carrito.mostrar') }}" class="btn btn-outline btn-full mt-2">
                            <i class="fas fa-arrow-left me-2"></i>
                            Volver al Carrito
                        </a>

                        <div class="security-badge">
                            <i class="fas fa-lock"></i>
                            <span>Pago seguro y protegido</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .checkout-section {
            padding: 3rem 0;
            min-height: 70vh;
            background-color: var(--gray-50);
        }

        .checkout-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .checkout-header h1 {
            font-size: 2.5rem;
            color: var(--gray-900);
            margin-bottom: 0.5rem;
        }

        .checkout-header p {
            color: var(--gray-600);
            font-size: 1.1rem;
        }

        .checkout-content {
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: 2rem;
        }

        .checkout-form-wrapper {
            background: var(--white);
            border-radius: var(--radius-lg);
            padding: 2rem;
            box-shadow: var(--shadow-sm);
        }

        .form-section {
            margin-bottom: 2rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid var(--gray-200);
        }

        .form-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .form-section h3 {
            font-size: 1.3rem;
            color: var(--gray-900);
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            color: var(--gray-700);
            margin-bottom: 0.5rem;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid var(--gray-300);
            border-radius: var(--radius-md);
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .shipping-options {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .shipping-option,
        .payment-option {
            display: flex;
            align-items: flex-start;
            padding: 1rem;
            border: 2px solid var(--gray-200);
            border-radius: var(--radius-md);
            cursor: pointer;
            transition: var(--transition);
        }

        .shipping-option:hover,
        .payment-option:hover {
            border-color: var(--primary);
            background-color: var(--gray-50);
        }

        .shipping-option input[type="radio"],
        .payment-option input[type="radio"] {
            margin-top: 0.25rem;
            margin-right: 1rem;
            cursor: pointer;
        }

        .shipping-option input[type="radio"]:checked ~ .option-content,
        .payment-option input[type="radio"]:checked ~ .option-content {
            color: var(--primary);
        }

        .payment-options {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .option-content {
            flex: 1;
        }

        .option-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.25rem;
        }

        .option-title {
            font-weight: 600;
            font-size: 1.1rem;
        }

        .option-price {
            font-weight: 700;
            color: var(--primary);
        }

        .option-description {
            margin: 0;
            color: var(--gray-600);
            font-size: 0.9rem;
        }

        .order-summary-wrapper {
            position: sticky;
            top: 120px;
            height: fit-content;
        }

        .order-summary-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            padding: 2rem;
            box-shadow: var(--shadow-sm);
        }

        .order-summary-card h3 {
            margin: 0 0 1.5rem 0;
            font-size: 1.3rem;
            color: var(--gray-900);
        }

        .order-items {
            max-height: 300px;
            overflow-y: auto;
            margin-bottom: 1.5rem;
        }

        .order-item {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--gray-200);
        }

        .order-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .order-item-image {
            width: 60px;
            height: 60px;
            border-radius: var(--radius-md);
            object-fit: cover;
            background-color: var(--gray-200);
        }

        .order-item-details {
            flex: 1;
        }

        .order-item-name {
            font-weight: 600;
            color: var(--gray-900);
            margin-bottom: 0.25rem;
        }

        .order-item-quantity {
            color: var(--gray-600);
            font-size: 0.9rem;
        }

        .order-item-price {
            font-weight: 600;
            color: var(--gray-900);
        }

        .summary-divider {
            height: 1px;
            background-color: var(--gray-200);
            margin: 1.5rem 0;
        }

        .summary-totals {
            margin-bottom: 1.5rem;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.75rem;
            color: var(--gray-700);
        }

        .summary-total {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--gray-900);
            margin-top: 0.5rem;
            padding-top: 0.75rem;
            border-top: 2px solid var(--gray-300);
        }

        .security-badge {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 1rem;
            background-color: var(--gray-50);
            border-radius: var(--radius-md);
            margin-top: 1rem;
            color: var(--gray-700);
        }

        @media (max-width: 768px) {
            .checkout-content {
                grid-template-columns: 1fr;
            }

            .order-summary-wrapper {
                position: static;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .payment-options {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <script>
        // Actualizar totales cuando cambia el método de envío
        function updateTotals() {
            const metodoEnvio = document.querySelector('input[name="metodo_envio"]:checked').value;
            const costosEnvio = {
                'standard': 0,
                'express': 50,
                'premium': 100
            };
            const shipping = costosEnvio[metodoEnvio] || 0;
            const subtotal = {{ $subtotal }};
            const total = subtotal + shipping;

            document.getElementById('summaryShipping').textContent = shipping === 0 ? 'GRATIS' : `$${shipping.toFixed(2)}`;
            document.getElementById('summaryTotal').textContent = `$${total.toFixed(2)}`;
        }
    </script>
@endsection
