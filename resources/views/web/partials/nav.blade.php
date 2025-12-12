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
