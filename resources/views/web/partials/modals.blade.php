<!-- Modals -->
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

<!-- Product Detail Modal -->
<div id="productModal" class="modal">
    <div class="modal-content product-modal-content">
        <button class="modal-close" onclick="closeProductModal()">&times;</button>
        <div class="product-detail" id="productDetail">
            <!-- Product details will be rendered here -->
        </div>
    </div>
</div>
