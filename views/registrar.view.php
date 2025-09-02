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
    <div class="bg-zinc-400 hero mr-40 min-h-screen text-black">

        <div class="hero-content -mt-20">
            <form method="post" action="/lockbox/registrar">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Crie a sua conta</div>

                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-black">Nome</span>
                            </div>
                            <input type="text" class="input input-bordered w-full max-w-xs bg-white">
                        </label>

                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-black">E-mail</span>
                            </div>
                            <input type="email" class="input input-bordered w-full max-w-xs bg-white">
                        </label>

                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-black">Confirme o seu email</span>
                            </div>
                            <input type="email" class="input input-bordered w-full max-w-xs bg-white">
                        </label>

                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-black">Senha</span>
                            </div>
                            <input type="password" name="senha" class="input input-bordered w-full max-w-xs bg-white">
                        </label>

                        <div class="card-actions">
                            <button class="btn btn-primary btn-block text-black">Registrar</button>
                            <a href="/lockbox/login" class="btn btn-link">Já tenho uma conta</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>