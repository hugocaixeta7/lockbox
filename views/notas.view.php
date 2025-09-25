<div class="bg-base-300 rounded-l-box w-56 flex flex-col divide-y divide-base-100">
    <?php foreach ($notas as $key => $nota): ?>
        <a href="/notas?id=<?= $nota->id ?>"
            class="
            w-full p-2 cursor-pointer hover:bg-base-200 
            <?php if($key == 0): ?> rounded-tl-box <?php endif; ?>
            <?php if($nota->id == $notaSelecionada->id): ?> bg-base-200 <?php endif; ?>
            ">
            <?= $nota->titulo ?> <br />
        </a>
    <?php endforeach; ?>
</div>

<div class="bg-base-200 rounded-r-box w-full p-8 flex flex-col space-y-8">
    <label class="form-control w-full">
        <div class="label">
            <span class="label-text mb-2">Título</span>
        </div>
        <input name="titulo" type="text" placeholder="Título da nota" class="input input-bordered w-full" value="<?= $notaSelecionada->titulo ?>"/>
    </label>

    <label class="form-control">
        <div class="label">
            <span class="label-text mb-2">Sua Nota</span>
        </div>
        <textarea name="nota" placeholder="Descrição da nota" class="textarea h-26 textarea-bordered w-full"><?= $notaSelecionada->nota ?></textarea>
    </label>

    <div class="flex justify-between items-center mt-8">
        <button class="btn btn-secondary">Deletar</button>
        <button class="btn btn-primary">Atualizar</button>
    </div>