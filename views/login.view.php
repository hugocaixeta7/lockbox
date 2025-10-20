<?php $validacoes = flash()->get('validacoes'); ?>

<div class="auth-layout">
    <div class="auth-hero">
        <div class="hero-content">
            <p class="hero-subtitle">Bem Vindo ao</p>
            <h1 class="hero-title">LockBox</h1>
            <p class="hero-description">Onde você guarda <span class="italic">tudo</span> com segurança</p>
        </div>
    </div>

    <div class="auth-form-container">
        <form method="POST" action="/login" class="auth-form">
            <div class="card">
                <h2 class="card-title">Faça o seu login</h2>

                <?php require base_path('views/partials/_mensagem.view.php'); ?>

                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input
                        type="text"
                        name="email"
                        id="email"
                        class="form-input"
                        placeholder="seu@email.com"
                        value="<?= old('email') ?>"
                        autocomplete="email" />
                    <?php if (isset($validacoes['email'])) { ?>
                        <span class="form-error"><?= $validacoes['email'][0] ?></span>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label class="form-label" for="senha">Senha</label>
                    <input
                        type="password"
                        name="senha"
                        id="senha"
                        class="form-input"
                        placeholder="••••••••"
                        autocomplete="current-password" />
                    <?php if (isset($validacoes['senha'])) { ?>
                        <span class="form-error"><?= $validacoes['senha'][0] ?></span>
                    <?php } ?>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                <a href="/registrar" class="btn btn-link btn-block">Quero me registrar</a>
            </div>
        </form>
    </div>
</div>