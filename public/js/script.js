// Medical Supplies - JavaScript

// Product Data - Esta variable será inicializada por Laravel en la vista
// Si no existe, usa un array vacío por defecto
let products = window.laravelProducts || [];

// El carrito ahora se maneja con sesiones PHP del lado del servidor
// Estas funciones están deshabilitadas para evitar conflictos

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
        
        // Obtener CSRF token
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content || '';
        
        return `
            <div class="product-card">
                <div class="product-image" onclick="window.location.href='/producto/${product.id}'" style="cursor: pointer;">
                    <img src="${imageUrl}" alt="${product.name}">
                </div>
                <div class="product-info">
                    <span class="product-category">${getCategoryName(product.category)}</span>
                    <h3 class="product-name">${product.name}</h3>
                    <p class="product-brand">${product.brand}</p>
                    <div class="product-price">$${parseFloat(product.price).toFixed(2)}</div>
                    <div class="product-actions">
                        <form class="add-to-cart-form" action="/carrito/agregar" method="POST" style="width: 100%;">
                            <input type="hidden" name="_token" value="${csrfToken}">
                            <input type="hidden" name="producto_id" value="${product.id}">
                            <input type="hidden" name="cantidad" value="1">
                            <button type="submit" class="btn btn-primary btn-add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
                                Agregar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        `;
    }).join('');
    
    // Agregar event listeners a los formularios después de renderizar
    attachCartFormListeners();
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

// Función para agregar event listeners a formularios de agregar al carrito
function attachCartFormListeners() {
    const forms = document.querySelectorAll('.add-to-cart-form');
    forms.forEach(form => {
        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const button = this.querySelector('button[type="submit"]');
            const originalText = button.innerHTML;
            
            // Deshabilitar botón y mostrar estado de carga
            button.disabled = true;
            button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Agregando...';
            
            try {
                const response = await fetch(this.action, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                    },
                    body: formData
                });
                
                const data = await response.json();
                
                if (data.success) {
                    // Actualizar badge del carrito
                    const badge = document.querySelector('.cart-badge');
                    if (badge) {
                        badge.textContent = data.totalItems;
                        badge.style.display = data.totalItems > 0 ? 'block' : 'none';
                    }
                    
                    // Mostrar notificación de éxito
                    showNotification(data.message, 'success');
                    
                    // Cambiar temporalmente el texto del botón
                    button.innerHTML = '<i class="fas fa-check"></i> Agregado';
                    setTimeout(() => {
                        button.innerHTML = originalText;
                        button.disabled = false;
                    }, 1500);
                } else {
                    throw new Error(data.message || 'Error al agregar producto');
                }
            } catch (error) {
                console.error('Error:', error);
                showNotification('Error al agregar el producto al carrito', 'error');
                button.innerHTML = originalText;
                button.disabled = false;
            }
        });
    });
}

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
