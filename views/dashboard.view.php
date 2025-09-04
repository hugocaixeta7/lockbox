<div class="mx-auto max-w-screen-lg h-screen flex flex-col">
    <nav class="navbar bg-base-100 shadow-sm">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl">LockBox</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a>Icone de olho</a></li>
                <li>
                    <details>
                        <summary><?= $user->nome ?></summary>
                        <ul class="bg-base-100 rounded-t-none p-2">
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Pesquisar notas -->
    <section class="flex space-x-4 w-full mt-8">
        <form action="" class="w-full">
            <label class="input input-bordered flex items-center gap-2 w-full">
                <input type="text" name="pesquisar" class="grow" placeholder="Pesquisar Notas..." />
                <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none" stroke="currentColor">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </g>
                </svg>
            </label>
        </form>
        <a href="#" class="btn btn-primary">
            + item
        </a>
    </section>

    <!-- Lista de notas -->
    <div class="flex  flex-grow mt-8">
        <div class="menu bg-base-300 rounded-l-box w-56">
            Itens do Menu
        </div>

        <!-- Form -->
        <div class="bg-base-200 rounded-r-box w-full p-8 flex flex-col space-y-8">

            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text mb-2">Título</span>
                </div>
                <input type="text" placeholder="Título da nota" class="input input-bordered w-full" />
            </label>

            <label class="form-control">
                <div class="label">
                    <span class="label-text mb-2">Sua Nota</span>
                </div>
                <textarea placeholder="Descrição da nota" class="textarea h-26 textarea-bordered w-full"></textarea>
            </label>

            <div class="flex justify-between items-center mt-8">
                <button class="btn btn-secondary">Deletar</button>
                <button class="btn btn-primary">Atualizar</button>
            </div>

        </div>
    </div>

</div>