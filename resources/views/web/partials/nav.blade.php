<style>
.header {
    background-color: var(--white);
    border-bottom: 1px solid var(--gray-200);
    position: sticky;
    top: 0;
    z-index: 100;
    box-shadow: var(--shadow-sm);
}

.header-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem;
}

.logo {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.logo-icon {
    background-color: var(--primary);
    padding: 0.5rem;
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.logo-icon i {
    color: var(--white);
    font-size: 1.5rem;
}

.logo-text {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--gray-900);
}

.nav {
    display: none;
    align-items: center;
    gap: 2rem;
}

.nav a {
    color: var(--gray-700);
    text-decoration: none;
    transition: var(--transition);
}

.nav a:hover {
    color: var(--primary);
}

.header-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.cart-btn {
    position: relative;
}

.cart-badge {
    position: absolute;
    top: -0.25rem;
    right: -0.25rem;
    background-color: var(--primary);
    color: var(--white);
    font-size: 0.75rem;
    width: 1.25rem;
    height: 1.25rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
}

.desktop-only {
    display: none;
}

@media (min-width: 992px) {
    .nav {
        display: flex;
    }
    
    .desktop-only {
        display: block;
    }
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: var(--bs-primary); text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">Medical Supplies</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#inicio">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#productos">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="#categorias">Categorías</a></li>
                <li class="nav-item"><a class="nav-link" href="#sobre-nosotros">Sobre Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                
                <li class="nav-item dropdown">
                    @auth
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">{{auth()->user()->name}}</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('perfil.pedidos')}}">Mis pedidos</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="{{route('perfil.edit')}}">Mi perfil</a></li>
                    </ul>
                    @else
                        <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                    @endauth
                </li>

            </ul>
            <a href="{{route('carrito.mostrar')}}" class="btn btn-outline-light">
                <i class="bi-cart-fill me-1"></i>
                Carrito
                <span class="badge bg-light text-dark ms-1 rounded-pill">
                {{ session('carrito') ? array_sum(array_column(session('carrito'), 'cantidad')) : 0 }}
                </span>
            </a>
        </div>
    </div>
</nav>