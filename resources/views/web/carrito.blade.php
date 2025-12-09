@extends('web.app')

@section('titulo', 'Carrito de Compras - Medical Supplies')

@section('contenido')
    <!-- Carrito Section -->
    <section class="carrito-section">
        <div class="container">
            <div class="carrito-header">
                <h1>Carrito de Compras</h1>
                <p>Revisa y confirma tus productos antes de pagar</p>
            </div>

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
                        <tbody id="carritoItems">
                            <!-- Items del carrito se renderizarán aquí -->
                        </tbody>
                    </table>
                </div>

                <!-- Resumen del Carrito -->
                <div class="carrito-summary">
                    <div class="summary-card">
                        <h3>Resumen del Pedido</h3>
                        
                        <div class="summary-row">
                            <span>Subtotal:</span>
                            <span id="subtotal">$0.00</span>
                        </div>
                        
                        <div class="summary-row">
                            <span>Envío:</span>
                            <select id="shippingMethod" onchange="updateShipping()">
                                <option value="0">Envío Standard (Gratis)</option>
                                <option value="50">Envío Express ($50)</option>
                                <option value="100">Envío Premium ($100)</option>
                            </select>
                        </div>

                        <div class="summary-row" id="shippingRow" style="display: none;">
                            <span>Costo de Envío:</span>
                            <span id="shipping">$0.00</span>
                        </div>
                        
                        <div class="promo-code">
                            <input type="text" id="promoCode" placeholder="Código de promoción">
                            <button onclick="applyPromo()">Aplicar</button>
                        </div>

                        <div class="summary-row" id="discountRow" style="display: none;">
                            <span>Descuento:</span>
                            <span id="discount">-$0.00</span>
                        </div>

                        <hr>

                        <div class="summary-total">
                            <span>Total:</span>
                            <span id="total">$0.00</span>
                        </div>

                        <button class="btn btn-primary btn-full" onclick="proceedToCheckout()">
                            <i class="fas fa-lock me-2"></i>
                            Proceder al Pago
                        </button>

                        <a href="/" class="btn btn-outline btn-full mt-2">
                            <i class="fas fa-arrow-left me-2"></i>
                            Continuar Comprando
                        </a>
                    </div>
                </div>
            </div>

            <!-- Empty Cart Message -->
            <div id="emptyCart" class="empty-cart" style="display: none;">
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
        </div>
    </section>

    <!-- Related Products -->
    <section class="related-products">
        <div class="container">
            <h2>Productos Relacionados</h2>
            <p>Quizás te interesen estos productos</p>
            <div class="products-grid" id="relatedProducts">
                <!-- Productos relacionados se renderizarán aquí -->
            </div>
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
        }

        .quantity-btn:hover {
            background-color: var(--gray-300);
        }

        .quantity-input {
            width: 50px;
            text-align: center;
            border: 1px solid var(--gray-300);
            border-radius: var(--radius-md);
            padding: 0.5rem;
        }

        .remove-btn {
            background: none;
            border: none;
            color: var(--error);
            cursor: pointer;
            font-size: 1.2rem;
            transition: var(--transition);
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

        .summary-row select {
            border: 1px solid var(--gray-300);
            border-radius: var(--radius-md);
            padding: 0.5rem;
            background-color: var(--white);
            cursor: pointer;
            flex: 1;
            margin-left: 0.5rem;
        }

        .promo-code {
            display: flex;
            gap: 0.5rem;
            margin: 1.5rem 0;
        }

        .promo-code input {
            flex: 1;
            border: 1px solid var(--gray-300);
            border-radius: var(--radius-md);
            padding: 0.75rem;
            font-size: 0.9rem;
        }

        .promo-code button {
            background-color: var(--primary);
            color: var(--white);
            border: none;
            border-radius: var(--radius-md);
            padding: 0.75rem 1.5rem;
            cursor: pointer;
            font-weight: 600;
            transition: var(--transition);
        }

        .promo-code button:hover {
            background-color: var(--primary-dark);
        }

        .summary-total {
            display: flex;
            justify-content: space-between;
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--gray-900);
            margin: 1rem 0;
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

        .related-products {
            background-color: var(--gray-50);
            padding: 4rem 0;
        }

        .related-products h2 {
            text-align: center;
            margin-bottom: 0.5rem;
            color: var(--gray-900);
        }

        .related-products > .container > p {
            text-align: center;
            color: var(--gray-600);
            margin-bottom: 2rem;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        @media (max-width: 768px) {
            .carrito-content {
                grid-template-columns: 1fr;
            }

            .carrito-summary {
                position: static;
            }

            .carrito-header h1 {
                font-size: 1.8rem;
            }

            .carrito-table th,
            .carrito-table td {
                padding: 1rem;
                font-size: 0.9rem;
            }

            .product-image {
                width: 60px;
                height: 60px;
            }
        }
    </style>

    <script>
        // Cargar carrito desde session/localStorage
        function loadCart() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const carritoItems = document.getElementById('carritoItems');
            const emptyCart = document.getElementById('emptyCart');

            if (cart.length === 0) {
                carritoItems.parentElement.style.display = 'none';
                emptyCart.style.display = 'block';
                return;
            }

            carritoItems.innerHTML = cart.map((item, index) => `
                <tr>
                    <td>
                        <div class="product-info">
                            <img src="${item.imagen || 'https://via.placeholder.com/80'}" alt="${item.nombre}" class="product-image">
                            <div class="product-details">
                                <h4>${item.nombre}</h4>
                                <p>${item.marca || 'Sin marca'}</p>
                            </div>
                        </div>
                    </td>
                    <td>$${parseFloat(item.precio).toFixed(2)}</td>
                    <td>
                        <div class="quantity-control">
                            <button class="quantity-btn" onclick="updateQuantity(${index}, -1)">-</button>
                            <input type="number" class="quantity-input" value="${item.cantidad}" onchange="setQuantity(${index}, this.value)">
                            <button class="quantity-btn" onclick="updateQuantity(${index}, 1)">+</button>
                        </div>
                    </td>
                    <td>$${(item.precio * item.cantidad).toFixed(2)}</td>
                    <td>
                        <button class="remove-btn" onclick="removeItem(${index})" title="Eliminar">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            `).join('');

            updateCartSummary();
        }

        function updateQuantity(index, change) {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart[index].cantidad += change;
            if (cart[index].cantidad < 1) cart[index].cantidad = 1;
            localStorage.setItem('cart', JSON.stringify(cart));
            loadCart();
        }

        function setQuantity(index, value) {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart[index].cantidad = parseInt(value) || 1;
            localStorage.setItem('cart', JSON.stringify(cart));
            loadCart();
        }

        function removeItem(index) {
            if (confirm('¿Deseas eliminar este producto?')) {
                const cart = JSON.parse(localStorage.getItem('cart')) || [];
                cart.splice(index, 1);
                localStorage.setItem('cart', JSON.stringify(cart));
                loadCart();
            }
        }

        function updateCartSummary() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const subtotal = cart.reduce((sum, item) => sum + (item.precio * item.cantidad), 0);
            const shipping = parseFloat(document.getElementById('shippingMethod').value) || 0;
            const discount = 0; // Será actualizado si hay código de promoción
            const total = subtotal + shipping - discount;

            document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
            document.getElementById('shipping').textContent = `$${shipping.toFixed(2)}`;
            document.getElementById('total').textContent = `$${total.toFixed(2)}`;
        }

        function updateShipping() {
            const shippingRow = document.getElementById('shippingRow');
            const shippingValue = parseFloat(document.getElementById('shippingMethod').value);
            if (shippingValue > 0) {
                shippingRow.style.display = 'flex';
            } else {
                shippingRow.style.display = 'none';
            }
            updateCartSummary();
        }

        function applyPromo() {
            alert('Sistema de promociones en desarrollo');
        }

        function proceedToCheckout() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            if (cart.length === 0) {
                alert('Tu carrito está vacío');
                return;
            }
            // Redirigir a checkout
            window.location.href = '/checkout';
        }

        // Cargar carrito al iniciar
        document.addEventListener('DOMContentLoaded', function() {
            loadCart();
        });
    </script>
@endsection
