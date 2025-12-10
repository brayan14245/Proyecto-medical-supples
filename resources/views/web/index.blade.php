@extends('web.app')
@section('header')
@endsection

@section('contenido')
    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <span class="logo-text">Medical Supplies</span>
            </div>

            <nav class="nav">
                <a href="#inicio">Inicio</a>
                <a href="#productos">Productos</a>
                <a href="#categorias">Categorías</a>
                <a href="#sobre-nosotros">Sobre Nosotros</a>
                <a href="#contacto">Contacto</a>
                @guest
                    <a href="javascript:void(0);" onclick="document.getElementById('loginModal').classList.add('active')">Iniciar sesión</a>
                @endguest
            </nav>

            <div class="header-actions">
                @auth
                    <div style="position: relative; display: flex; align-items: center;">
                        <button class="btn-icon" id="userMenuBtn" onclick="toggleUserMenu()" title="Mi Perfil" style="background: none; border: none; cursor: pointer;">
                            <i class="fas fa-user"></i>
                        </button>
                        <div id="userDropdown" style="display: none; position: absolute; top: 100%; right: 0; background: var(--white); border: 1px solid var(--gray-200); border-radius: var(--radius-md); min-width: 200px; box-shadow: var(--shadow-md); z-index: 1000;">
                            <a href="{{ route('perfil.dashboard') }}" style="display: block; padding: 0.75rem 1rem; color: var(--gray-700); text-decoration: none; border-bottom: 1px solid var(--gray-100); transition: var(--transition);" onmouseover="this.style.backgroundColor='var(--gray-50)'" onmouseout="this.style.backgroundColor='transparent'">
                                <i class="fas fa-chart-line" style="margin-right: 0.5rem;"></i> Dashboard
                            </a>
                            <a href="{{ route('perfil.edit') }}" style="display: block; padding: 0.75rem 1rem; color: var(--gray-700); text-decoration: none; border-bottom: 1px solid var(--gray-100); transition: var(--transition);" onmouseover="this.style.backgroundColor='var(--gray-50)'" onmouseout="this.style.backgroundColor='transparent'">
                                <i class="fas fa-user-edit" style="margin-right: 0.5rem;"></i> Mi Perfil
                            </a>
                            <form method="POST" action="{{ route('logout') }}" style="display: inline; width: 100%;">
                                @csrf
                                <button type="submit" style="width: 100%; padding: 0.75rem 1rem; color: var(--gray-700); background: none; border: none; cursor: pointer; text-align: left; transition: var(--transition);" onmouseover="this.style.backgroundColor='var(--gray-50)'" onmouseout="this.style.backgroundColor='transparent'">
                                    <i class="fas fa-sign-out-alt" style="margin-right: 0.5rem;"></i> Cerrar sesión
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <button class="btn-icon" onclick="document.getElementById('loginModal').classList.add('active')" title="Iniciar Sesión" style="background: none; border: none; cursor: pointer;">
                        <i class="fas fa-user"></i>
                    </button>
                @endauth
                <button class="btn-icon cart-btn" onclick="window.location.href='{{ route('carrito.mostrar') }}'" title="Carrito de Compras" style="background: none; border: none; cursor: pointer;">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-badge" id="cartBadge">0</span>
                </button>
                <button class="btn-icon mobile-menu-btn" onclick="toggleMobileMenu()" style="background: none; border: none; cursor: pointer;">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Welcome Banner -->
    <div class="welcome-banner">
        <div class="banner-bg"></div>
        <div class="container banner-content">
            <div class="welcome-message">
                <div class="icon-wrapper">
                    <i class="fas fa-sparkles"></i>
                </div>
                <div>
                    <div class="welcome-title">¡Bienvenido a Medical Supplies!</div>
                    <p class="welcome-subtitle">Tu socio confiable en equipamiento médico</p>
                </div>
            </div>
            <div class="banner-divider"></div>
            <div class="promo-messages">
                <div class="promo-item">
                    <i class="fas fa-trending-up"></i>
                    <span>Envío GRATIS en compras +$500</span>
                </div>
                <div class="promo-item">
                    <i class="fas fa-award"></i>
                    <span>Productos 100% Certificados</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section id="inicio" class="hero">
        <div class="container hero-content">
            <div class="hero-text">
                <div class="hero-badge">
                    ✨ Calidad y Confianza en Equipos Médicos
                </div>
                
                <h1>
                    Equipos Médicos de <span class="text-blue">Alta Calidad</span> para Profesionales de la Salud
                </h1>
                
                <p class="hero-description">
                    Suministramos los mejores equipos y productos médicos con certificaciones internacionales. 
                    Innovación, precisión y confiabilidad para tu práctica médica.
                </p>

                <div class="hero-features">
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Productos certificados internacionalmente</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-shipping-fast"></i>
                        <span>Envío rápido a toda la región</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-shield-alt"></i>
                        <span>Garantía de 100% satisfacción</span>
                    </div>
                </div>

                <div class="hero-buttons">
                    <button class="btn btn-primary btn-lg" onclick="document.getElementById('productos').scrollIntoView({ behavior: 'smooth' })">
                        <i class="fas fa-shopping-bag"></i>
                        Ver Catálogo
                    </button>
                    <button class="btn btn-outline btn-lg" onclick="document.getElementById('contacto').scrollIntoView({ behavior: 'smooth' })">
                        <i class="fas fa-phone"></i>
                        Contactar
                    </button>
                </div>
            </div>

            <div class="hero-image">
                <div class="image-bg-decoration"></div>
                <div class="image-wrapper">
                    <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=800&q=80" alt="Equipos médicos de alta calidad">
                </div>
                
                <div class="stat-card stat-card-left">
                    <div class="stat-number">{{ $stats['productos_count'] ?? '500+' }}</div>
                    <div class="stat-label">Productos Disponibles</div>
                </div>
                
                <div class="stat-card stat-card-right">
                    <div class="stat-number">15+</div>
                    <div class="stat-label">Años de Experiencia</div>
                </div>
            </div>
        </div>
        <div class="hero-decoration hero-decoration-top"></div>
        <div class="hero-decoration hero-decoration-bottom"></div>
    </section>

    <!-- Image Carousel -->
    <section class="carousel-section">
        <div class="container">
            <div class="carousel-wrapper">
                <div class="carousel-track" id="carouselTrack">
                    <div class="carousel-slide">
                        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=1200&q=80" alt="Equipos médicos">
                    </div>
                    <div class="carousel-slide">
                        <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=1200&q=80" alt="Tecnología médica">
                    </div>
                    <div class="carousel-slide">
                        <img src="https://images.unsplash.com/photo-1579154204601-01d82b44c141?w=1200&q=80" alt="Instrumentos médicos">
                    </div>
                </div>
                <button class="carousel-btn carousel-btn-prev" onclick="prevSlide()">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="carousel-btn carousel-btn-next" onclick="nextSlide()">
                    <i class="fas fa-chevron-right"></i>
                </button>
                <div class="carousel-indicators" id="carouselIndicators"></div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <i class="fas fa-hospital stat-icon"></i>
                    <div class="stat-value">{{ $stats['clientes'] ?? '1,000+' }}</div>
                    <div class="stat-title">Clientes Satisfechos</div>
                </div>
                <div class="stat-item">
                    <i class="fas fa-box stat-icon"></i>
                    <div class="stat-value">{{ $stats['productos_count'] ?? '500+' }}</div>
                    <div class="stat-title">Productos en Stock</div>
                </div>
                <div class="stat-item">
                    <i class="fas fa-certificate stat-icon"></i>
                    <div class="stat-value">100%</div>
                    <div class="stat-title">Certificados</div>
                </div>
                <div class="stat-item">
                    <i class="fas fa-shipping-fast stat-icon"></i>
                    <div class="stat-value">24h</div>
                    <div class="stat-title">Envío Express</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="categorias" class="categories-section">
        <div class="container">
            <div class="section-header">
                <h2>Categorías de Productos</h2>
                <p>Encuentra los equipos médicos que necesitas</p>
            </div>

            <div class="categories-grid">
                <div class="category-card" onclick="filterByCategory('diagnostico')">
                    <div class="category-icon">
                        <i class="fas fa-stethoscope"></i>
                    </div>
                    <h3>Diagnóstico</h3>
                    <p>Equipos para diagnóstico preciso</p>
                    <div class="category-badge">45 productos</div>
                </div>

                <div class="category-card" onclick="filterByCategory('cirugia')">
                    <div class="category-icon">
                        <i class="fas fa-scalpel"></i>
                    </div>
                    <h3>Cirugía</h3>
                    <p>Instrumental quirúrgico profesional</p>
                    <div class="category-badge">62 productos</div>
                </div>

                <div class="category-card" onclick="filterByCategory('laboratorio')">
                    <div class="category-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3>Laboratorio</h3>
                    <p>Equipamiento para laboratorio clínico</p>
                    <div class="category-badge">38 productos</div>
                </div>

                <div class="category-card" onclick="filterByCategory('urgencias')">
                    <div class="category-icon">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <h3>Urgencias</h3>
                    <p>Equipos de emergencia médica</p>
                    <div class="category-badge">29 productos</div>
                </div>

                <div class="category-card" onclick="filterByCategory('imagenologia')">
                    <div class="category-icon">
                        <i class="fas fa-x-ray"></i>
                    </div>
                    <h3>Imagenología</h3>
                    <p>Equipos de imagen médica</p>
                    <div class="category-badge">21 productos</div>
                </div>

                <div class="category-card" onclick="filterByCategory('rehabilitacion')">
                    <div class="category-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <h3>Rehabilitación</h3>
                    <p>Equipos de fisioterapia</p>
                    <div class="category-badge">34 productos</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Catalog -->
    <section id="productos" class="product-catalog">
        <div class="container">
            <div class="section-header">
                <h2>Catálogo de Productos</h2>
                <p>Explora nuestra amplia selección de equipos médicos</p>
            </div>

            <!-- Search and Filters -->
            <div class="search-filters">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" id="searchInput" placeholder="Buscar productos..." oninput="filterProducts()">
                </div>

                <div class="filter-group">
                    <select id="brandFilter" onchange="filterProducts()">
                        <option value="">Todas las marcas</option>
                        @foreach($marcas ?? [] as $marca)
                            <option value="{{ $marca }}">{{ $marca }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="filter-group">
                    <select id="categoryFilter" onchange="filterProducts()">
                        <option value="">Todas las categorías</option>
                        <option value="diagnostico">Diagnóstico</option>
                        <option value="cirugia">Cirugía</option>
                        <option value="laboratorio">Laboratorio</option>
                        <option value="urgencias">Urgencias</option>
                        <option value="imagenologia">Imagenología</option>
                        <option value="rehabilitacion">Rehabilitación</option>
                    </select>
                </div>

                <div class="filter-group">
                    <select id="zoneFilter" onchange="filterProducts()">
                        <option value="">Todas las zonas</option>
                        <option value="cardiovascular">Cardiovascular</option>
                        <option value="neurologico">Neurológico</option>
                        <option value="musculoesqueletico">Musculoesquelético</option>
                        <option value="respiratorio">Respiratorio</option>
                    </select>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="products-grid" id="productsGrid">
                <!-- Products will be rendered by JavaScript -->
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <h2>Lo Que Dicen Nuestros Clientes</h2>
                <p>Testimonios de profesionales de la salud</p>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">
                        "Excelente calidad en los productos y muy profesional el servicio. Recomendado al 100%."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-name">Dr. Juan García</div>
                        <div class="author-role">Cardiólogo</div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">
                        "Los equipos son de primera calidad y el envío fue muy rápido. Perfectamente empaquetado."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-name">Dra. María López</div>
                        <div class="author-role">Cirujana</div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">
                        "Mejor opción en relación a precio y calidad. Muy atentos con mis consultas."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-name">Dr. Carlos Rodríguez</div>
                        <div class="author-role">Neurocirujano</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brands -->
    <section class="brands-section">
        <div class="container">
            <div class="section-header">
                <h2>Marcas de Confianza</h2>
                <p>Trabajamos con las mejores marcas del mercado</p>
            </div>

            <div class="brands-grid">
                <div class="brand-logo">Medtronic</div>
                <div class="brand-logo">Philips</div>
                <div class="brand-logo">GE Healthcare</div>
                <div class="brand-logo">Siemens</div>
                <div class="brand-logo">3M</div>
                <div class="brand-logo">Johnson & Johnson</div>
            </div>
        </div>
    </section>

    <!-- Certifications -->
    <section class="certifications-section">
        <div class="container">
            <div class="section-header">
                <h2>Certificaciones y Garantías</h2>
                <p>Nuestros productos cuentan con las certificaciones más importantes</p>
            </div>

            <div class="certifications-grid">
                <div class="certification-card">
                    <i class="fas fa-certificate"></i>
                    <h3>ISO 9001</h3>
                    <p>Gestión de Calidad</p>
                </div>
                <div class="certification-card">
                    <i class="fas fa-check-circle"></i>
                    <h3>FDA</h3>
                    <p>Aprobado por la FDA</p>
                </div>
                <div class="certification-card">
                    <i class="fas fa-shield-alt"></i>
                    <h3>CE</h3>
                    <p>Certificación Europea</p>
                </div>
                <div class="certification-card">
                    <i class="fas fa-medal"></i>
                    <h3>ISO 13485</h3>
                    <p>Dispositivos Médicos</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section id="contacto" class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Ponte en Contacto</h2>
                    <p>¿Tienes preguntas? Nos encantaría escucharte. Envíanos un mensaje.</p>

                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <div class="contact-label">Dirección</div>
                                <div class="contact-value">Calle Principal 123, Ciudad, País</div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <div class="contact-label">Teléfono</div>
                                <div class="contact-value">+1 (555) 123-4567</div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <div class="contact-label">Email</div>
                                <div class="contact-value">info@medicalsupplies.com</div>
                            </div>
                        </div>
                    </div>
                </div>

                <form class="contact-form" onsubmit="handleContactSubmit(event)">
                    <div class="form-group">
                        <label for="name">Nombre Completo</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-full">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="footer-logo">
                        <i class="fas fa-heartbeat"></i>
                        <span>Medical Supplies</span>
                    </div>
                    <p>Tu socio confiable en equipamiento médico de calidad.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h3>Productos</h3>
                    <ul>
                        <li><a href="#">Diagnóstico</a></li>
                        <li><a href="#">Cirugía</a></li>
                        <li><a href="#">Laboratorio</a></li>
                        <li><a href="#">Urgencias</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Empresa</h3>
                    <ul>
                        <li><a href="#">Sobre Nosotros</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Carreras</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Información Legal</h3>
                    <ul class="contact-list">
                        <li><i class="fas fa-envelope"></i> <a href="mailto:info@medicalsupplies.com">info@medicalsupplies.com</a></li>
                        <li><i class="fas fa-phone"></i> <a href="tel:+15551234567">+1 (555) 123-4567</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2024 Medical Supplies. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/15551234567" class="whatsapp-button" target="_blank" aria-label="Contactar por WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Modals -->
    <!-- Login Modal -->
    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Iniciar Sesión</h2>
                <button class="modal-close" onclick="document.getElementById('loginModal').classList.remove('active')">&times;</button>
            </div>
            <form method="POST" action="{{ route('login') }}" class="register-form">
                @csrf
                <div class="form-group">
                    <label for="loginEmail">Email</label>
                    <input type="email" id="loginEmail" name="email" placeholder="tu@email.com" required>
                </div>
                <div class="form-group">
                    <label for="loginPassword">Contraseña</label>
                    <input type="password" id="loginPassword" name="password" placeholder="Tu contraseña" required>
                </div>
                <button type="submit" class="btn btn-primary btn-full">Iniciar Sesión</button>
            </form>
            <p class="modal-footer-text">
                ¿No tienes cuenta? <a href="javascript:void(0);" onclick="document.getElementById('loginModal').classList.remove('active'); document.getElementById('registerModal').classList.add('active')">Regístrate aquí</a>
            </p>
        </div>
    </div>

    <!-- Register Modal -->
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Crear Cuenta</h2>
                <button class="modal-close" onclick="document.getElementById('registerModal').classList.remove('active')">&times;</button>
            </div>
            <form action="{{ route('register') }}" method="POST" class="register-form">
                @csrf
                <div class="form-group">
                    <label for="registerName">Nombre Completo</label>
                    <input type="text" id="registerName" name="name" placeholder="Tu nombre completo" required>
                </div>
                <div class="form-group">
                    <label for="registerEmail">Email</label>
                    <input type="email" id="registerEmail" name="email" placeholder="tu@email.com" required>
                </div>
                <div class="form-group">
                    <label for="registerPassword">Contraseña</label>
                    <input type="password" id="registerPassword" name="password" placeholder="Mínimo 8 caracteres" required>
                </div>
                <div class="form-group">
                    <label for="registerPasswordConfirm">Confirmar Contraseña</label>
                    <input type="password" id="registerPasswordConfirm" name="password_confirmation" placeholder="Confirma tu contraseña" required>
                </div>
                <button type="submit" class="btn btn-primary btn-full">Crear Cuenta</button>
            </form>
            <p class="modal-footer-text">
                ¿Ya tienes cuenta? <a href="javascript:void(0);" onclick="document.getElementById('registerModal').classList.remove('active'); document.getElementById('loginModal').classList.add('active')">Inicia sesión aquí</a>
            </p>
        </div>
    </div>
    </div>

    <!-- Shopping Cart Modal -->
    <div id="cartModal" class="modal cart-modal">
        <div class="modal-content cart-content">
            <div class="modal-header">
                <h2>Carrito de Compras</h2>
                <button class="modal-close" onclick="closeCart()">&times;</button>
            </div>
            <div class="cart-items" id="cartItems">
                <!-- Cart items will be rendered here -->
            </div>
            <div class="cart-summary">
                <div class="summary-row">
                    <span>Subtotal:</span>
                    <span id="cartSubtotal">$0.00</span>
                </div>
                <div class="summary-row">
                    <span>Envío:</span>
                    <span id="cartShipping">$0.00</span>
                </div>
                <div class="summary-row summary-total">
                    <span>Total:</span>
                    <span id="cartTotal">$0.00</span>
                </div>
                <button class="btn btn-primary btn-full" onclick="checkout()">Proceder al Pago</button>
            </div>
        </div>
    </div>

    <!-- Product Detail Modal -->
    <div id="productModal" class="modal">
        <div class="modal-content product-modal-content">
            <button class="modal-close" onclick="closeProductModal()">&times;</button>
            <div class="product-detail" id="productDetail">
                <!-- Product details will be rendered here -->
            </div>
        </div>
    </div>

    <script>
        // Productos desde Laravel (pasar como datos globales)
        const products = @json($productos ?? []);

        // Toggle user menu dropdown
        function toggleUserMenu() {
            const dropdown = document.getElementById('userDropdown');
            if (dropdown.style.display === 'none' || dropdown.style.display === '') {
                dropdown.style.display = 'block';
            } else {
                dropdown.style.display = 'none';
            }
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const userMenuBtn = document.getElementById('userMenuBtn');
            const userDropdown = document.getElementById('userDropdown');
            
            if (userMenuBtn && userDropdown) {
                if (!userMenuBtn.contains(event.target) && !userDropdown.contains(event.target)) {
                    userDropdown.style.display = 'none';
                }
            }
        });
    </script>
@endsection

@push('page-scripts')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<script src="{{ asset('js/script.js') }}"></script>
<script>
// Override para trabajar con datos de Laravel si existen
document.addEventListener('DOMContentLoaded', function() {
    if (typeof products !== 'undefined' && products.length > 0) {
        // Ya tenemos los productos de Laravel
        filteredProducts = [...products];
    }
    renderProducts();
    updateCartBadge();
    updateIndicators();
});
</script>
@endpush
