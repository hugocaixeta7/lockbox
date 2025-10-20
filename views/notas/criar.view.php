<?php $validacoes = flash()->get('validacoes'); ?>

<link rel="stylesheet" href="/assets/css/pesquisar.css">
<link rel="stylesheet" href="/assets/css/main.css">
<link rel="stylesheet" href="/assets/css/criar.css">

<div class="create-page-wrapper">
    <div class="create-sidebar-panel">
        <div class="create-sidebar-header">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path d="M12 5v14M5 12h14" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Nova Nota
        </div>
    </div>

    <div class="create-main-panel">
        <form action="/notas/criar" method="POST" class="create-form-wrapper" id="createNoteForm">
            <div class="create-form-group">
                <label class="create-form-label">Título</label>
                <input
                    type="text"
                    name="titulo"
                    class="create-input-field"
                    placeholder="Digite o título da sua nota"
                    autofocus
                    id="tituloInput" />
                <?php if (isset($validacoes['titulo'])) { ?>
                    <div class="create-error-message"><?= $validacoes['titulo'][0] ?></div>
                <?php } ?>
            </div>

            <div class="create-form-group">
                <label class="create-form-label">Conteúdo</label>
                <textarea
                    class="create-textarea-field"
                    name="nota"
                    placeholder="Escreva o conteúdo da sua nota aqui..."
                    id="notaTextarea"></textarea>
                <?php if (isset($validacoes['nota'])) { ?>
                    <div class="create-error-message"><?= $validacoes['nota'][0] ?></div>
                <?php } ?>
            </div>

            <div class="create-actions-bar">
                <a href="/notas" class="create-btn create-btn-cancel">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M19 12H5M12 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Cancelar
                </a>
                <button type="submit" class="create-btn create-btn-save" id="saveBtn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h11l5 5v11a2 2 0 01-2 2z" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17 21v-8H7v8M7 3v5h8" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Salvar Nota
                </button>
            </div>
        </form>
    </div>
</div>

<script src="/assets/js/pesquisar.js"></script>
<script src="/assets/js/main.js"></script>
<script src="/assets/js/criar.js"></script>