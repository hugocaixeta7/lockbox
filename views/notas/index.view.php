<?php $validacoes = flash()->get('validacoes'); ?>

<link rel="stylesheet" href="assets/css/index.css">

<div class="notes-container">
    <!-- Sidebar com lista de notas -->
    <div class="notes-sidebar">
        <?php foreach ($notas as $nota) { ?>
            <a href="/notas?id=<?= $nota->id ?><?= request()->get('pesquisar', '', '&pesquisar=') ?>"
                class="note-item <?php if ($nota->id == $notaSelecionada->id) { ?>active<?php } ?>">
                <div class="note-title"><?= $nota->titulo ?></div>
                <div class="note-meta">
                    <span class="note-id">ID: <?= $nota->id ?></span>
                    <span class="note-date"><?= $nota->dataCriacao()->locale('pt_BR')->diffForHumans() ?></span>
                </div>
            </a>
        <?php } ?>
    </div>

    <!-- Editor de nota -->
    <div class="note-editor">
        <form action="/nota" method="POST" id="form-atualizacao" class="note-form">
            <input type="hidden" name="__method" value="PUT" />
            <input type="hidden" name="id" value="<?= $notaSelecionada->id ?>" />

            <div class="form-group">
                <label class="form-label">Título</label>
                <input
                    value="<?= $notaSelecionada->titulo ?>"
                    name="titulo"
                    type="text"
                    class="form-input"
                    placeholder="Digite o título da nota" />
                <?php if (isset($validacoes['titulo'])) { ?>
                    <div class="form-error"><?= $validacoes['titulo'][0] ?></div>
                <?php } ?>
            </div>

            <div class="form-group">
                <label class="form-label">Sua nota</label>
                <textarea
                    name="nota"
                    <?php if (!session()->get('mostrar')) { ?>disabled<?php } ?>
                    class="form-textarea"
                    placeholder="Escreva sua nota aqui..."
                    rows="12"><?= $notaSelecionada->nota() ?></textarea>
                <?php if (isset($validacoes['nota'])) { ?>
                    <div class="form-error"><?= $validacoes['nota'][0] ?></div>
                <?php } ?>
            </div>
        </form>

        <div class="note-actions">
            <form action="/nota" method="POST" class="delete-form">
                <input type="hidden" name="__method" value="DELETE" />
                <input type="hidden" name="id" value="<?= $notaSelecionada->id ?>" />
                <button class="btn btn-danger" type="submit">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2M10 11v6M14 11v6" />
                    </svg>
                    Deletar
                </button>
            </form>
            <button class="btn btn-primary" type="submit" form="form-atualizacao">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h11l5 5v11a2 2 0 01-2 2z" />
                    <path d="M17 21v-8H7v8M7 3v5h8" />
                </svg>
                Atualizar
            </button>
        </div>
    </div>
</div>

<script src="assets/js/index.js"></script>