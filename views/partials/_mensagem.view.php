<?php if ($mensagem = flash()->get('mensagem')): ?>
    <div role="alert" class="flex items-center gap-2 p-3 rounded-md border border-green-400 text-green-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4-4m6 2a9 9 0 11-18 0a9 9 0 0118 0z" />
        </svg>
        <span><?= $mensagem ?></span>
    </div>
<?php endif; ?>