<link rel="stylesheet" href="assets/css/pesquisar.css">

<div class="search-bar-container">
    <form action="/notas" class="search-form">
        <div class="search-input-wrapper">
            <svg class="search-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M21 21L16.7 16.7" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <input
                type="text"
                name="pesquisar"
                class="search-input"
                placeholder="Pesquisar notas no LockBox..."
                value="<?= request()->get('pesquisar') ?>"
                autocomplete="off" />
            <?php if (request()->get('pesquisar')) { ?>
                <button type="button" class="search-clear" onclick="clearSearch()">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
            <?php } ?>
        </div>
    </form>

    <a href="/notas/criar" class="btn-create-note">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" />
        </svg>
        <span class="btn-text">Nova Nota</span>
        <span class="btn-text-mobile">+</span>
    </a>
</div>



<script src="assets/css/pesquisar.js"></script>