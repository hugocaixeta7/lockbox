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
        <form method="POST" action="/registrar" class="auth-form">
            <div class="card">
                <h2 class="card-title">Crie a sua conta</h2>

                <div class="form-group">
                    <label class="form-label" for="nome">Nome</label>
                    <input
                        type="text"
                        name="nome"
                        id="nome"
                        class="form-input"
                        placeholder="Seu nome completo"
                        value="<?= old('nome') ?>"
                        autocomplete="name" />
                    <?php if (isset($validacoes['nome'])) { ?>
                        <span class="form-error"><?= $validacoes['nome'][0] ?></span>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label class="form-label" for="email">E-mail</label>
                    <input
                        type="email"
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
                    <label class="form-label" for="email_confirmacao">Confirme seu Email</label>
                    <input
                        type="email"
                        name="email_confirmacao"
                        id="email_confirmacao"
                        class="form-input"
                        placeholder="seu@email.com"
                        autocomplete="email" />
                </div>

                <div class="form-group">
                    <label class="form-label" for="senha">Senha</label>
                    <input
                        type="password"
                        name="senha"
                        id="senha"
                        class="form-input"
                        placeholder="••••••••"
                        autocomplete="new-password" />
                    <?php if (isset($validacoes['senha'])) { ?>
                        <span class="form-error"><?= $validacoes['senha'][0] ?></span>
                    <?php } ?>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                <a href="/login" class="btn btn-link btn-block">Já tenho uma conta</a>
            </div>
        </form>
    </div>
</div>