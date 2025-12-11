// Medical Supplies - JavaScript

// Product Data - Esta variable será inicializada por Laravel en la vista
// Si no existe, usa un array vacío por defecto
let products = window.laravelProducts || [];

// Cart Management
let cart = JSON.parse(localStorage.getItem('medicalCart')) || [];

function updateCart() {
    localStorage.setItem('medicalCart', JSON.stringify(cart));
    updateCartBadge();
    renderCart();
}

function updateCartBadge() {
    const badge = document.getElementById('cartBadge');
    const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
    badge.textContent = totalItems;
    badge.style.display = totalItems > 0 ? 'flex' : 'none';
}

function addToCart(productId) {
    const product = products.find(p => p.id === productId);
    const existingItem = cart.find(item => item.id === productId);
    
    if (existingItem) {
        existingItem.quantity += 1;
    } else {
        cart.push({
            id: product.id,
            name: product.name,
            price: product.price,
            image: product.image,
            quantity: 1
        });
    }
    
    updateCart();
    showNotification('Producto agregado al carrito');
}

function removeFromCart(productId) {
    cart = cart.filter(item => item.id !== productId);
    updateCart();
}

function updateQuantity(productId, change) {
    const item = cart.find(item => item.id === productId);
    if (item) {
        item.quantity += change;
        if (item.quantity <= 0) {
            removeFromCart(productId);
        } else {
            updateCart();
        }
    }
}

function renderCart() {
    const cartItems = document.getElementById('cartItems');
    const subtotalEl = document.getElementById('cartSubtotal');
    const shippingEl = document.getElementById('cartShipping');
    const totalEl = document.getElementById('cartTotal');
    
    if (cart.length === 0) {
        cartItems.innerHTML = '<div class="cart-empty">Tu carrito está vacío</div>';
        subtotalEl.textContent = '$0.00';
        shippingEl.textContent = '$0.00';
        totalEl.textContent = '$0.00';
        return;
    }
    
    cartItems.innerHTML = cart.map(item => `
        <div class="cart-item">
            <div class="cart-item-image">
                <img src="${item.image}" alt="${item.name}">
            </div>
            <div class="cart-item-info">
                <div class="cart-item-name">${item.name}</div>
                <div class="cart-item-price">$${item.price.toFixed(2)}</div>
                <div class="cart-item-quantity">
                    <button class="quantity-btn" onclick="updateQuantity(${item.id}, -1)">-</button>
                    <span>${item.quantity}</span>
                    <button class="quantity-btn" onclick="updateQuantity(${item.id}, 1)">+</button>
                </div>
            </div>
            <button class="cart-item-remove" onclick="removeFromCart(${item.id})">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    `).join('');
    
    const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
    const shipping = subtotal >= 500 ? 0 : 50;
    const total = subtotal + shipping;
    
    subtotalEl.textContent = `$${subtotal.toFixed(2)}`;
    shippingEl.textContent = shipping === 0 ? 'GRATIS' : `$${shipping.toFixed(2)}`;
    totalEl.textContent = `$${total.toFixed(2)}`;
}

function checkout() {
    if (cart.length === 0) {
        showNotification('Tu carrito está vacío', 'error');
        return;
    }
    showNotification('Procesando pedido...');
    setTimeout(() => {
        cart = [];
        updateCart();
        closeCart();
        showNotification('¡Pedido realizado con éxito!', 'success');
    }, 1500);
}

// Products Rendering and Filtering
let filteredProducts = [...products];

function renderProducts() {
    const grid = document.getElementById('productsGrid');
    
    if (!products || products.length === 0) {
        grid.innerHTML = '<div style="grid-column: 1/-1; text-align: center; padding: 3rem; color: var(--gray-500);">No hay productos disponibles</div>';
        return;
    }
    
    if (filteredProducts.length === 0) {
        grid.innerHTML = '<div style="grid-column: 1/-1; text-align: center; padding: 3rem; color: var(--gray-500);">No se encontraron productos</div>';
        return;
    }
    
    grid.innerHTML = filteredProducts.map(product => {
        // Manejar la imagen del producto
        const imageUrl = product.image && product.image.startsWith('http') 
            ? product.image 
            : (product.image ? `/uploads/productos/${product.image}` : 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=500&q=80');
        
        return `
            <div class="product-card" onclick="openProductDetail(${product.id})">
                <div class="product-image">
                    <img src="${imageUrl}" alt="${product.name}">
                </div>
                <div class="product-info">
                    <span class="product-category">${getCategoryName(product.category)}</span>
                    <h3 class="product-name">${product.name}</h3>
                    <p class="product-brand">${product.brand}</p>
                    <div class="product-price">$${parseFloat(product.price).toFixed(2)}</div>
                    <div class="product-actions">
                        <button class="btn btn-primary btn-add-to-cart" onclick="event.stopPropagation(); addToCart(${product.id})">
                            <i class="fas fa-shopping-cart"></i>
                            Agregar
                        </button>
                    </div>
                </div>
            </div>
        `;
    }).join('');
}

function getCategoryName(category) {
    const names = {
        'diagnostico': 'Diagnóstico',
        'cirugia': 'Cirugía',
        'laboratorio': 'Laboratorio',
        'urgencias': 'Urgencias',
        'imagenologia': 'Imagenología',
        'rehabilitacion': 'Rehabilitación'
    };
    return names[category] || category;
}

function filterProducts() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    const brand = document.getElementById('brandFilter').value;
    const category = document.getElementById('categoryFilter').value;
    const zone = document.getElementById('zoneFilter').value;
    
    filteredProducts = products.filter(product => {
        const matchesSearch = product.name.toLowerCase().includes(searchTerm) ||
                            product.brand.toLowerCase().includes(searchTerm);
        const matchesBrand = !brand || product.brand === brand;
        const matchesCategory = !category || product.category === category;
        const matchesZone = !zone || product.zone === zone;
        
        return matchesSearch && matchesBrand && matchesCategory && matchesZone;
    });
    
    renderProducts();
}

function filterByCategory(category) {
    document.getElementById('categoryFilter').value = category;
    filterProducts();
    document.getElementById('productos').scrollIntoView({ behavior: 'smooth' });
}

// Product Detail Modal
function openProductDetail(productId) {
    const product = products.find(p => p.id === productId);
    if (!product) return;
    
    const modal = document.getElementById('productModal');
    const detail = document.getElementById('productDetail');
    
    // Manejar la imagen del producto
    const imageUrl = product.image && product.image.startsWith('http') 
        ? product.image 
        : (product.image ? `/uploads/productos/${product.image}` : 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=500&q=80');
    
    // Manejar especificaciones
    let specsHtml = '';
    if (product.specs && typeof product.specs === 'object' && Object.keys(product.specs).length > 0) {
        specsHtml = `
            <div class="product-specs">
                <h3>Ficha Técnica</h3>
                ${Object.entries(product.specs).map(([key, value]) => `
                    <div class="spec-row">
                        <span class="spec-label">${key}:</span>
                        <span class="spec-value">${value}</span>
                    </div>
                `).join('')}
            </div>
        `;
    }
    
    detail.innerHTML = `
        <div class="product-detail-grid">
            <div class="product-detail-image">
                <img src="${imageUrl}" alt="${product.name}">
            </div>
            <div class="product-detail-info">
                <span class="product-category">${getCategoryName(product.category)}</span>
                <h2>${product.name}</h2>
                <p class="product-brand"><strong>Marca:</strong> ${product.brand}</p>
                <div class="product-price">$${parseFloat(product.price).toFixed(2)}</div>
                
                <div class="product-detail-description">
                    <h3>Descripción</h3>
                    <p>${product.description}</p>
                </div>
                
                ${specsHtml}
                
                <button class="btn btn-primary btn-full" onclick="addToCart(${product.id}); closeProductModal();">
                    <i class="fas fa-shopping-cart"></i>
                    Agregar al Carrito
                </button>
            </div>
        </div>
    `;
    
    modal.classList.add('active');
}

function closeProductModal() {
    document.getElementById('productModal').classList.remove('active');
}

// Modal Management
function openLoginModal() {
    document.getElementById('loginModal').classList.add('active');
}

function closeLoginModal() {
    document.getElementById('loginModal').classList.remove('active');
}

function openRegisterModal() {
    document.getElementById('registerModal').classList.add('active');
}

function closeRegisterModal() {
    document.getElementById('registerModal').classList.remove('active');
}

function switchToRegister() {
    closeLoginModal();
    openRegisterModal();
}

function switchToLogin() {
    closeRegisterModal();
    openLoginModal();
}

function openCart() {
    document.getElementById('cartModal').classList.add('active');
    renderCart();
}

function closeCart() {
    document.getElementById('cartModal').classList.remove('active');
}

// Close modals when clicking outside
window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
        event.target.classList.remove('active');
    }
}

// Forms
function handleLogin(event) {
    event.preventDefault();
    const email = document.getElementById('loginEmail').value;
    showNotification('Iniciando sesión...');
    setTimeout(() => {
        closeLoginModal();
        showNotification('¡Bienvenido de nuevo!', 'success');
    }, 1000);
}

function handleRegister(event) {
    event.preventDefault();
    const name = document.getElementById('registerName').value;
    showNotification('Creando cuenta...');
    setTimeout(() => {
        closeRegisterModal();
        showNotification('¡Cuenta creada con éxito!', 'success');
    }, 1000);
}

function handleContactSubmit(event) {
    event.preventDefault();
    const name = document.getElementById('name').value;
    showNotification('Enviando mensaje...');
    setTimeout(() => {
        event.target.reset();
        showNotification('¡Mensaje enviado con éxito!', 'success');
    }, 1000);
}

// Carousel
let currentSlide = 0;
const totalSlides = 3;

function updateCarousel() {
    const track = document.getElementById('carouselTrack');
    track.style.transform = `translateX(-${currentSlide * 100}%)`;
    updateIndicators();
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateCarousel();
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    updateCarousel();
}

function goToSlide(index) {
    currentSlide = index;
    updateCarousel();
}

function updateIndicators() {
    const indicators = document.getElementById('carouselIndicators');
    indicators.innerHTML = Array.from({ length: totalSlides }, (_, i) => `
        <div class="carousel-indicator ${i === currentSlide ? 'active' : ''}" onclick="goToSlide(${i})"></div>
    `).join('');
}

// Auto-advance carousel
setInterval(nextSlide, 5000);

// Mobile Menu
function toggleMobileMenu() {
    const nav = document.querySelector('.nav');
    nav.style.display = nav.style.display === 'flex' ? 'none' : 'flex';
}

// Notifications
function showNotification(message, type = 'info') {
    // Create a simple notification
    const notification = document.createElement('div');
    notification.textContent = message;
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background-color: ${type === 'success' ? '#10b981' : type === 'error' ? '#dc2626' : '#0066cc'};
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        z-index: 10000;
        animation: slideIn 0.3s ease-out;
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.animation = 'slideOut 0.3s ease-out';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// Add keyframe animations
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from {
            transform: translateX(400px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    @keyframes slideOut {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(400px);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    renderProducts();
    updateCartBadge();
    updateIndicators();
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
