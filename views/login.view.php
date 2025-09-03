<?php $validacoes = (flash()->get('validacoes')); ?>
<div class="grid grid-cols-2">
    <div class="hero min-h-screen flex ml-40">
        <div class="hero-content -mt-20">
            <div>
                <p class="py-2 text-xl">Bem vindo ao</p>
                <h1 class="text-6xl font-bold">Lock Box</h1>
                <p class="py-2 pb-4 text-xl">onde você guarda <span class="italic">tudo</span> com segurança.</p>
            </div>
        </div>
    </div>
    <div class="bg-white hero mr-40 min-h-screen text-black">
        <div class="hero-content -mt-20">
            <form method="post" action="/lockbox/login">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Faça o seu login</div>

                        <?php if ($mensagem = flash()->get('mensagem')): ?>
                            <div role="alert" class="flex items-center gap-2 p-3 rounded-md bg-green-100 border border-green-400 text-green-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4-4m6 2a9 9 0 11-18 0a9 9 0 0118 0z" />
                                </svg>
                                <span>Registrado com sucesso!</span>
                            </div>
                        <?php endif; ?>

                        <!-- Email -->
                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-black">Email</span>
                            </div>
                            <input
                                type="email"
                                name="email"
                                class="input input-bordered w-full max-w-xs bg-white"
                                value="<?= old('email') ?>" />
                            <?php if (isset($validacoes['email'])): ?>
                                <div class="label text-xs text-error"><?= $validacoes['email'][0] ?></div>
                            <?php endif; ?>

                        </label>

                        <!-- Senha -->
                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-black">Senha</span>
                            </div>
                            <input
                                type="password"
                                name="senha"
                                class="input input-bordered w-full max-w-xs bg-white" />
                            <?php if (isset($validacoes['senha'])): ?>
                                <div class="label text-xs text-error"><?= $validacoes['senha'][0] ?></div>
                            <?php endif; ?>
                        </label>

                        <!-- Botão de Login / Quero me registrar -->
                        <div class="card-actions">
                            <button class="btn btn-primary btn-block text-black">Login</button>
                            <a href="/lockbox/registrar" class="btn btn-link">Quero me registrar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>