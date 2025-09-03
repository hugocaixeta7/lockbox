<?php
// 1. Receber o formulário com email e senha
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $validacao = Validacao::validar([
        'email' => ['required', 'email'],
        'senha' => ['required']
    ], $_POST);

    if ($validacao->naoPassou()) {
        view('login');
        exit();
    }

    // 2. Fazer uma consulta no banco de dados com email e senha
    $usuario = $database->query(
        query: "select * from usuarios where email = :email",
        class: Usuario::class,
        params: compact('email')
    )->fetch();


    // validar a senha
    if ($usuario && password_verify($_POST['senha'], $usuario->senha)) {

        $_SESSION['auth'] = $usuario;
        flash()->push('mensagem', 'Seja bem vindo ' . $usuario->nome . '!');

        header('location: /lockbox/dashboard');
        exit();
    } else {
        flash()->push('validacoes', ['email' => ['Usuário ou senha estão incorretos!']]);
    }
}
view('login');
