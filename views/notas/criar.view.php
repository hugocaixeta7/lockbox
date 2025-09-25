<?php $validacoes = (flash()->get('validacoes')); ?>
<div class="menu bg-base-300 rounded-l-box w-56">
    <div class="bg-base-200 p-4">
        + Nova Nota
    </div>
</div>

<!-- Form -->
<div class="bg-base-200 rounded-r-box w-full p-8">

    <form action="/notas/criar" method="post" class="flex flex-col space-y-8">
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text mb-2">Título</span>
            </div>
            <input type="text" name="titulo" placeholder="Título da nota" class="input input-bordered w-full" />
            <?php if (isset($validacoes['titulo'])): ?>
                <div class="label text-xs text-error"><?= $validacoes['titulo'][0] ?></div>
            <?php endif; ?>
        </label>
        <label class="form-control">
            <div class="label">
                <span class="label-text mb-2">Sua Nota</span>
            </div>
            <textarea placeholder="Descrição da nota" name="nota" class="textarea h-26 textarea-bordered w-full"></textarea>
            <?php if (isset($validacoes['nota'])): ?>
                <div class="label text-xs text-error"><?= $validacoes['nota'][0] ?></div>
            <?php endif; ?>
        </label>
        <div class="flex justify-end items-center mt-8">
            <button class="btn btn-primary">Salvar</button>
        </div>
    </form>

</div>