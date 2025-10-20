<link rel="stylesheet" href="/assets/css/navbar.css">

<nav class="navbar">
    <div class="navbar-container">
        <div class="navbar-brand">
            <a href="/notas" class="brand-link">
                <svg class="brand-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2L3 7V17L12 22L21 17V7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12 22V12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12 12L3 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12 12L21 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span class="brand-text">LockBox</span>
            </a>
        </div>

        <div class="navbar-actions">
            <a href="<?php echo session()->get('mostrar') ? '/esconder' : '/confirmar'; ?>"
                class="navbar-btn"
                title="<?php echo session()->get('mostrar') ? 'Esconder notas' : 'Mostrar notas'; ?>">
                <?php if (session()->get('mostrar')) { ?>
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 3L21 21M10.5 10.677A2 2 0 0013.323 13.5M7.362 7.561C5.68 8.74 4.279 10.42 3 12c1.889 2.991 5.282 6 9 6 1.55 0 3.043-.523 4.395-1.35M12 6C15.718 6 19.111 9.01 21 12a15.66 15.66 0 01-2.119 2.798" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                <?php } else { ?>
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 5C8.24 5 4.83 7.58 3 12c1.83 4.42 5.24 7 9 7s7.17-2.58 9-7c-1.83-4.42-5.24-7-9-7z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                <?php } ?>
            </a>

            <div class="navbar-dropdown">
                <button class="navbar-user-btn" id="userMenuBtn">
                    <div class="user-avatar">
                        <?= strtoupper(substr(auth()->nome, 0, 1)) ?>
                    </div>
                    <span class="user-name"><?= auth()->nome ?></span>
                    <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <div class="navbar-dropdown-menu" id="userMenu">
                    <a href="/logout" class="dropdown-item">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script src="/assets/js/navbar.js"></script>