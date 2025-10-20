<?php if ($mensagem = flash()->get('mensagem')) { ?>
    
    <link rel="stylesheet" href="assets/css/mensagem.css">

    <div class="alert-message" id="alertMessage">
        <div class="alert-content">
            <svg class="alert-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                <path d="M12 16V12M12 8H12.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg>
            <span class="alert-text"><?= $mensagem ?></span>
            <button class="alert-close" onclick="closeAlert()">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </button>
        </div>
    </div>

    <script src="assets/js/mensagem.js"></script>
<?php } ?>