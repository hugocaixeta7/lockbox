<?php $validacoes = flash()->get('validacoes'); ?>

<link rel="stylesheet" href="assets/css/confirmar.css">

<div class="confirm-container">
    <div class="confirm-card">
        <div class="confirm-icon">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                <path d="M7 11V7a5 5 0 0110 0v4" />
            </svg>
        </div>

        <h2 class="confirm-title">Desbloquear Notas</h2>
        <p class="confirm-description">
            Digite sua senha novamente para começar a ver todas as suas notas descriptografadas
        </p>

        <form action="/mostrar" method="POST" class="confirm-form">
            <div class="form-group">
                <label class="form-label">Senha</label>
                <input
                    type="password"
                    name="senha"
                    class="form-input"
                    placeholder="Digite sua senha"
                    autofocus />
                <?php if (isset($validacoes['senha'])) { ?>
                    <div class="form-error"><?= $validacoes['senha'][0] ?></div>
                <?php } ?>
            </div>

            <button class="btn btn-primary btn-full" type="submit">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                    <path d="M7 11V7a5 5 0 0110 0v4" />
                </svg>
                Abrir Minhas Notas
            </button>
        </form>
    </div>
</div>

<script src="assets/js/confirmar.js"></script>