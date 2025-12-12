/**
 * Page Transitions & Section Animations
 * Handles smooth transitions between sections and viewport visibility
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all animations
    initPageTransitions();
    initScrollProgress();
    initImageLoading();
    initSmoothScrollLinks();
    initNavbarScroll();
});

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
        threshold: 0.1 // Trigger when 10% of section is visible
    };
    
    // Callback function when section enters viewport
    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                // Optional: stop observing after animation
                // observer.unobserve(entry.target);
            } else {
                // Remove class when scrolling back up for re-animation
                // Comment this line if you want animation to happen only once
                // entry.target.classList.remove('visible');
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
    // Create progress bar element
    const progressBar = document.createElement('div');
    progressBar.className = 'scroll-progress';
    document.body.appendChild(progressBar);
    
    // Update progress on scroll
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
            
            // Skip if it's just "#"
            if (href === '#') return;
            
            const targetId = href.substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                e.preventDefault();
                
                // Calculate offset for navbar
                const navbar = document.querySelector('nav');
                const navbarHeight = navbar ? navbar.offsetHeight : 80;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navbarHeight;
                
                // Add page transition effect (optional)
                showPageTransition();
                
                setTimeout(() => {
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                    
                    // Hide transition overlay
                    setTimeout(() => {
                        hidePageTransition();
                    }, 300);
                }, 100);
                
                // Update URL without triggering navigation
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
 * Show page transition overlay
 */
function showPageTransition() {
    let overlay = document.querySelector('.page-transition-overlay');
    
    if (!overlay) {
        overlay = document.createElement('div');
        overlay.className = 'page-transition-overlay';
        overlay.innerHTML = '<div class="spinner"></div>';
        document.body.appendChild(overlay);
    }
    
    setTimeout(() => {
        overlay.classList.add('active');
    }, 10);
}

/**
 * Hide page transition overlay
 */
function hidePageTransition() {
    const overlay = document.querySelector('.page-transition-overlay');
    if (overlay) {
        overlay.classList.remove('active');
    }
}

/**
 * Enhanced filter products with animation
 */
const originalFilterProducts = window.filterProducts;
window.filterProducts = function() {
    const productsGrid = document.getElementById('productsGrid');
    if (!productsGrid) {
        if (typeof originalFilterProducts === 'function') {
            return originalFilterProducts();
        }
        return;
    }
    
    // Add fade-out effect
    productsGrid.style.opacity = '0';
    productsGrid.style.transform = 'translateY(20px)';
    
    // Perform filtering after fade-out
    setTimeout(() => {
        // Call original filter function if exists
        if (typeof originalFilterProducts === 'function') {
            originalFilterProducts();
        }
        
        // Fade back in
        setTimeout(() => {
            productsGrid.style.opacity = '1';
            productsGrid.style.transform = 'translateY(0)';
        }, 50);
    }, 300);
};

/**
 * Enhanced filter by category with smooth transition
 */
const originalFilterByCategory = window.filterByCategory;
window.filterByCategory = function(category) {
    const categoryFilter = document.getElementById('categoryFilter');
    if (categoryFilter) {
        categoryFilter.value = category;
    }
    
    // Scroll to products section
    const productsSection = document.getElementById('productos');
    if (productsSection) {
        showPageTransition();
        
        setTimeout(() => {
            // Calculate offset for navbar
            const navbar = document.querySelector('nav');
            const navbarHeight = navbar ? navbar.offsetHeight : 80;
            const targetPosition = productsSection.getBoundingClientRect().top + window.pageYOffset - navbarHeight;
            
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
            
            // Apply filter
            if (typeof originalFilterProducts === 'function') {
                setTimeout(() => {
                    originalFilterProducts();
                }, 300);
            } else if (typeof window.filterProducts === 'function') {
                setTimeout(() => {
                    window.filterProducts();
                }, 300);
            }
            
            setTimeout(() => {
                hidePageTransition();
            }, 800);
        }, 200);
    } else if (typeof originalFilterByCategory === 'function') {
        originalFilterByCategory(category);
    }
};

/**
 * Carousel navigation with smooth transitions
 */
let currentSlide = 0;
const totalSlides = 3; // Update based on your carousel

const originalNextSlide = window.nextSlide;
window.nextSlide = function() {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateCarousel();
};

const originalPrevSlide = window.prevSlide;
window.prevSlide = function() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    updateCarousel();
};

function updateCarousel() {
    const track = document.getElementById('carouselTrack');
    if (!track) return;
    
    track.style.transform = `translateX(-${currentSlide * 100}%)`;
    
    // Update indicators
    const indicators = document.querySelectorAll('.carousel-indicators button');
    indicators.forEach((indicator, index) => {
        if (index === currentSlide) {
            indicator.classList.add('active');
        } else {
            indicator.classList.remove('active');
        }
    });
}

/**
 * Auto-play carousel
 */
function initCarouselAutoplay() {
    setInterval(() => {
        if (typeof window.nextSlide === 'function') {
            window.nextSlide();
        }
    }, 5000); // Change slide every 5 seconds
}

// Initialize carousel autoplay
if (document.getElementById('carouselTrack')) {
    initCarouselAutoplay();
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

// Initialize parallax
initParallaxEffect();

/**
 * Animate counters when visible
 */
function animateCounters() {
    const counters = document.querySelectorAll('.stat-value');
    const speed = 200; // Animation speed
    
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
                
                // Store original value
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

// Initialize counter animations
animateCounters();

/**
 * Add stagger animation to grid items
 */
function staggerAnimation(selector, delay = 100) {
    const items = document.querySelectorAll(selector);
    items.forEach((item, index) => {
        item.style.animationDelay = `${index * delay}ms`;
    });
}

// Apply stagger animations
staggerAnimation('.category-card', 100);
staggerAnimation('.stat-item', 100);
staggerAnimation('.testimonial-card', 150);

/**
 * Handle form submissions with transition
 */
const forms = document.querySelectorAll('form');
forms.forEach(form => {
    form.addEventListener('submit', (e) => {
        const submitBtn = form.querySelector('button[type="submit"]');
        if (submitBtn) {
            submitBtn.style.transform = 'scale(0.95)';
            setTimeout(() => {
                submitBtn.style.transform = 'scale(1)';
            }, 200);
        }
    });
});

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

console.log('✨ Page transitions initialized successfully');
