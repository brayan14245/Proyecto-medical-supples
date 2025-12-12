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
            <a href="{{ route('carrito.mostrar') }}" class="btn-icon cart-btn" title="Carrito de Compras" style="background: none; border: none; cursor: pointer; color: inherit; text-decoration: none;">
                <i class="fas fa-shopping-cart"></i>
                @php
                    $carrito = session('carrito', []);
                    $totalItems = array_sum(array_column($carrito, 'cantidad'));
                @endphp
                <span class="cart-badge" id="cartBadge">{{ $totalItems }}</span>
            </a>
            </button>
            <button class="btn-icon mobile-menu-btn" onclick="toggleMobileMenu()" style="background: none; border: none; cursor: pointer;">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
</header>

<script>
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

    // Mobile Menu Toggle
    function toggleMobileMenu() {
        const nav = document.querySelector('.nav');
        nav.style.display = nav.style.display === 'flex' ? 'none' : 'flex';
    }
</script>
