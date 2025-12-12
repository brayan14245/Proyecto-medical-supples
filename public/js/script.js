// Productos globales
let products = [];
let filteredProducts = [];
let cart = [];

// Funciones de carrito
function addToCart(productId) {
    const product = products.find(p => p.id === productId);
    if (!product) {
        showNotification('Producto no encontrado');
        return;
    }
    
    // Enviar petición al servidor
    const formData = new FormData();
    formData.append('producto_id', productId);
    formData.append('cantidad', 1);
    
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
    
    fetch('/carrito/agregar', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': csrfToken,
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            updateCartBadge();
            showNotification(`${product.name} agregado al carrito`);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showNotification('Error al agregar el producto');
    });
}

function updateCartBadge() {
    const badge = document.getElementById('cartBadge');
    if (!badge) return;
    
    // Obtener el carrito de la sesión del servidor mediante AJAX
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
    
    fetch('/api/carrito/count', {
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        const total = data.count || 0;
        badge.textContent = total;
        badge.style.display = total > 0 ? 'flex' : 'none';
    })
    .catch(error => {
        console.error('Error updating cart badge:', error);
    });
}

function showNotification(message) {
    // Crear notificación temporal
    const notification = document.createElement('div');
    notification.className = 'notification';
    notification.textContent = message;
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: #28a745;
        color: white;
        padding: 15px 20px;
        border-radius: 5px;
        z-index: 1000;
        animation: slideIn 0.3s ease-out;
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 3000);
}

// Renderizar productos
function renderProducts() {
    const productsGrid = document.getElementById('productsGrid');
    
    if (!productsGrid) {
        console.error('productsGrid element not found');
        return;
    }
    
    if (filteredProducts.length === 0) {
        productsGrid.innerHTML = '<div class="no-products">No hay productos disponibles</div>';
        return;
    }
    
    productsGrid.innerHTML = filteredProducts.map(product => `
        <div class="product-card" data-product-id="${product.id}">
            <div class="product-image">
                <img src="${getProductImage(product.image)}" alt="${product.name}" onerror="this.src='https://via.placeholder.com/300x300?text=Sin+Imagen'">
                <div class="product-badge">${product.brand || 'Medical'}</div>
            </div>
            <div class="product-info">
                <h3 class="product-name">${product.name}</h3>
                <p class="product-description">${product.description || 'Producto médico de calidad'}</p>
                
                <div class="product-specs">
                    <span class="spec-tag">${product.category || 'Diagnóstico'}</span>
                    <span class="spec-tag">${product.zone || 'General'}</span>
                </div>
                
                <div class="product-footer">
                    <div class="product-price">$${parseFloat(product.price).toFixed(2)}</div>
                    <button class="btn btn-add-cart" onclick="addToCart(${product.id})">
                        <i class="fas fa-shopping-cart"></i>
                        Agregar
                    </button>
                </div>
            </div>
        </div>
    `).join('');
}

function getProductImage(imagePath) {
    if (!imagePath) {
        return 'https://via.placeholder.com/300x300?text=Sin+Imagen';
    }
    
    if (imagePath.startsWith('http')) {
        return imagePath;
    }
    
    return `${window.location.origin}/${imagePath}`;
}

// Filtrar productos
function filterProducts() {
    const searchInput = document.getElementById('searchInput');
    const brandFilter = document.getElementById('brandFilter');
    const categoryFilter = document.getElementById('categoryFilter');
    const zoneFilter = document.getElementById('zoneFilter');
    
    const searchTerm = searchInput ? searchInput.value.toLowerCase() : '';
    const selectedBrand = brandFilter ? brandFilter.value : '';
    const selectedCategory = categoryFilter ? categoryFilter.value : '';
    const selectedZone = zoneFilter ? zoneFilter.value : '';
    
    filteredProducts = products.filter(product => {
        const matchesSearch = product.name.toLowerCase().includes(searchTerm) || 
                            product.description.toLowerCase().includes(searchTerm);
        const matchesBrand = !selectedBrand || product.brand === selectedBrand;
        const matchesCategory = !selectedCategory || product.category === selectedCategory;
        const matchesZone = !selectedZone || product.zone === selectedZone;
        
        return matchesSearch && matchesBrand && matchesCategory && matchesZone;
    });
    
    renderProducts();
}

// Filtrar por categoría
function filterByCategory(category) {
    const categoryFilter = document.getElementById('categoryFilter');
    if (categoryFilter) {
        categoryFilter.value = category;
        filterProducts();
    }
}

// Carrusel
let currentSlide = 0;

function nextSlide() {
    const carousel = document.getElementById('carouselTrack');
    if (!carousel) return;
    
    const slides = carousel.querySelectorAll('.carousel-slide');
    currentSlide = (currentSlide + 1) % slides.length;
    updateCarouselPosition(slides);
}

function prevSlide() {
    const carousel = document.getElementById('carouselTrack');
    if (!carousel) return;
    
    const slides = carousel.querySelectorAll('.carousel-slide');
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    updateCarouselPosition(slides);
}

function updateCarouselPosition(slides) {
    if (slides.length > 0) {
        const offset = -currentSlide * 100;
        slides[0].parentElement.style.transform = `translateX(${offset}%)`;
        updateIndicators();
    }
}

function updateIndicators() {
    const carousel = document.getElementById('carouselTrack');
    if (!carousel) return;
    
    const slides = carousel.querySelectorAll('.carousel-slide');
    const indicatorsContainer = document.getElementById('carouselIndicators');
    
    if (indicatorsContainer) {
        indicatorsContainer.innerHTML = '';
        slides.forEach((_, index) => {
            const indicator = document.createElement('div');
            indicator.className = `carousel-indicator ${index === currentSlide ? 'active' : ''}`;
            indicator.onclick = () => {
                currentSlide = index;
                updateCarouselPosition(slides);
            };
            indicatorsContainer.appendChild(indicator);
        });
    }
}

// Contact form
function handleContactSubmit(event) {
    event.preventDefault();
    
    const formData = new FormData(event.target);
    
    fetch('/contact', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showNotification('Mensaje enviado correctamente');
            event.target.reset();
        } else {
            showNotification('Error al enviar el mensaje');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showNotification('Error al enviar el mensaje');
    });
}

// Cargar carrito desde servidor al iniciar
function loadCart() {
    updateCartBadge();
}

// Inicializar cuando el DOM está listo
document.addEventListener('DOMContentLoaded', function() {
    loadCart();
    
    // Si hay datos de Laravel, usarlos
    if (typeof window.laravelProducts !== 'undefined' && window.laravelProducts.length > 0) {
        products = window.laravelProducts;
        filteredProducts = [...products];
    }
    
    renderProducts();
    updateIndicators();
});

// Auto-avance del carrusel cada 5 segundos
setInterval(() => {
    const carousel = document.getElementById('carouselTrack');
    if (carousel && carousel.querySelectorAll('.carousel-slide').length > 0) {
        nextSlide();
    }
}, 5000);
