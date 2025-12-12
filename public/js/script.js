// Medical Supplies - JavaScript Unificado
// Incluye funcionalidad de productos y animaciones de página

// ============================================
// SECCIÓN 1: VARIABLES GLOBALES
// ============================================

// Product Data - Esta variable será inicializada por Laravel en la vista
let products = window.laravelProducts || [];
let filteredProducts = [...products];

// Carousel variables
let currentSlide = 0;
const totalSlides = 3;

// ============================================
// SECCIÓN 2: FUNCIONES DE PRODUCTOS
// ============================================

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
    const categoryFilter = document.getElementById('categoryFilter');
    if (categoryFilter) {
        categoryFilter.value = category;
    }
    filterProducts();
    
    // Scroll suave a productos
    const productsSection = document.getElementById('productos');
    if (productsSection) {
        const navbar = document.querySelector('nav');
        const navbarHeight = navbar ? navbar.offsetHeight : 80;
        const targetPosition = productsSection.getBoundingClientRect().top + window.pageYOffset - navbarHeight;
        
        window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
        });
    }
}

// ============================================
// SECCIÓN 3: ANIMACIONES DE PÁGINA
// ============================================

// ============================================
// SECCIÓN 4: MODALES
// ============================================

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

// ============================================
// SECCIÓN 5: FORMULARIOS
// ============================================

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

// ============================================
// SECCIÓN 6: CARRUSEL
// ============================================

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

// ============================================
// SECCIÓN 7: UTILIDADES
// ============================================

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
    // Inicializar productos
    renderProducts();
    updateCartBadge();
    updateIndicators();
    
    // Inicializar animaciones de página
    initPageTransitions();
    initScrollProgress();
    initImageLoading();
    initSmoothScrollLinks();
    initNavbarScroll();
    initParallaxEffect();
    animateCounters();
    staggerAnimation('.category-card', 100);
    staggerAnimation('.stat-item', 100);
    staggerAnimation('.testimonial-card', 150);
    
    console.log('✨ Medical Supplies iniciado correctamente');
});

// ============================================
// SECCIÓN 8: FUNCIONES DE ANIMACIÓN
// ============================================

/**
 * Initialize section visibility animations
 */
function initPageTransitions() {
    const sections = document.querySelectorAll('section');
    
    // Add animate-on-scroll class to sections (except hero)
    sections.forEach(section => {
        if (!section.classList.contains('hero')) {
            section.classList.add('animate-on-scroll');
        }
    });
    
    // Options for Intersection Observer
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };
    
    // Callback function when section enters viewport
    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    };
    
    // Create observer
    const observer = new IntersectionObserver(observerCallback, observerOptions);
    
    // Observe all sections with animation
    sections.forEach(section => {
        if (section.classList.contains('animate-on-scroll')) {
            observer.observe(section);
        }
    });
    
    // Make hero section immediately visible
    const heroSection = document.querySelector('.hero');
    if (heroSection) {
        heroSection.classList.add('visible');
    }
}

/**
 * Initialize scroll progress bar
 */
function initScrollProgress() {
    const progressBar = document.createElement('div');
    progressBar.className = 'scroll-progress';
    document.body.appendChild(progressBar);
    
    window.addEventListener('scroll', () => {
        const windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (window.scrollY / windowHeight) * 100;
        progressBar.style.transform = `scaleX(${scrolled / 100})`;
    });
}

/**
 * Initialize image lazy loading with fade-in effect
 */
function initImageLoading() {
    const images = document.querySelectorAll('img');
    
    images.forEach(img => {
        if (img.complete) {
            img.classList.add('loaded');
        } else {
            img.addEventListener('load', () => {
                img.classList.add('loaded');
            });
        }
    });
}

/**
 * Initialize smooth scroll for navigation links
 */
function initSmoothScrollLinks() {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            
            if (href === '#') return;
            
            const targetId = href.substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                e.preventDefault();
                
                const navbar = document.querySelector('nav');
                const navbarHeight = navbar ? navbar.offsetHeight : 80;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navbarHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
                
                if (history.pushState) {
                    history.pushState(null, null, href);
                }
            }
        });
    });
}

/**
 * Initialize navbar scroll effect
 */
function initNavbarScroll() {
    const navbar = document.querySelector('nav');
    
    if (!navbar) return;
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
}

/**
 * Add parallax effect to sections
 */
function initParallaxEffect() {
    window.addEventListener('scroll', () => {
        const parallaxElements = document.querySelectorAll('.hero-image, .image-bg-decoration');
        
        parallaxElements.forEach(element => {
            const scrolled = window.pageYOffset;
            const rate = scrolled * 0.3;
            element.style.transform = `translateY(${rate}px)`;
        });
    });
}

/**
 * Animate counters when visible
 */
function animateCounters() {
    const counters = document.querySelectorAll('.stat-value');
    const speed = 200;
    
    const observerOptions = {
        threshold: 0.5
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                const counter = entry.target;
                const target = parseInt(counter.innerText.replace(/\D/g, '')) || 100;
                const increment = target / speed;
                let current = 0;
                
                const updateCounter = () => {
                    if (current < target) {
                        current += increment;
                        counter.innerText = Math.ceil(current) + (counter.innerText.includes('+') ? '+' : '');
                        setTimeout(updateCounter, 1);
                    } else {
                        counter.innerText = counter.dataset.originalValue || counter.innerText;
                    }
                };
                
                counter.dataset.originalValue = counter.innerText;
                counter.classList.add('counted');
                updateCounter();
            }
        });
    }, observerOptions);
    
    counters.forEach(counter => {
        observer.observe(counter);
    });
}

/**
 * Add stagger animation to grid items
 */
function staggerAnimation(selector, delay = 100) {
    const items = document.querySelectorAll(selector);
    items.forEach((item, index) => {
        item.style.animationDelay = `${index * delay}ms`;
    });
}

/**
 * Add entrance animation to modals/popups
 */
window.showModal = function(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = 'flex';
        setTimeout(() => {
            modal.classList.add('active');
        }, 10);
    }
};

window.hideModal = function(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.remove('active');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 300);
    }
};
