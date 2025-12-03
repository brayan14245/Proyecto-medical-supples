<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: var(--bs-primary); text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">Medical Supples</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Acerca</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Tienda</a></li>
                
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
                Pedido
                <span class="badge bg-light text-dark ms-1 rounded-pill">
                {{ session('carrito') ? array_sum(array_column(session('carrito'), 'cantidad')) : 0 }}
                </span>
            </a>
        </div>
    </div>
</nav>