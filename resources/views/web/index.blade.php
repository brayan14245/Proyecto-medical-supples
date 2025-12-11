@extends('web.app')
@section('header')
    <!-- Header incluido desde app.blade.php -->
@endsection

@section('contenido')
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

    @include('web.partials.whatsapp-button')
    @include('web.partials.modals')

    <script>
        // Productos desde Laravel (pasar como datos globales)
        window.laravelProducts = @json($productos ?? []);
    </script>
@endsection

@push('page-scripts')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<script src="{{ asset('js/script.js') }}"></script>
<script>
// Inicializar productos desde Laravel
document.addEventListener('DOMContentLoaded', function() {
    // Asignar productos de Laravel al array global
    if (window.laravelProducts && window.laravelProducts.length > 0) {
        products = window.laravelProducts;
        filteredProducts = [...products];
    }
    renderProducts();
    updateCartBadge();
    updateIndicators();
});
</script>
@endpush
