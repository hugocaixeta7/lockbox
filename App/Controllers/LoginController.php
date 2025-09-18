<?php

namespace App\Controllers;

use Core\Database;
use Core\Validacao;
use App\Models\Usuario;


class LoginController
{
    public function index()
    {
        return view('login', template: 'guest');
    }

    public function login()
    {
        $email = $_POST['email'] ?? null;
        $senha = $_POST['senha'] ?? null;

        $validacao = Validacao::validar([
            'email' => ['required', 'email'],
            'senha' => ['required']
        ], $_POST);

        if ($validacao->naoPassou()) {
            // Se deu errado, volta para a página de login
            return view('login', template: 'guest');
        }
        // se deu certo, faz a consulta no banco de dados
        // Fazer uma consulta no banco de dados com email e senha
        $database = new Database(config('database'));
        $usuario = $database->query(
            query: "select * from usuarios where email = :email",
            class: Usuario::class,
            params: compact('email')
        )->fetch();

        // Se deu errado com usuario e senha, volta para a página de login
        if (!$usuario || !password_verify($senha, $usuario->senha)) {
            flash()->push('validacoes', ['email' => ['Usuário ou senha estão incorretos!']]);
            return view('login', template: 'guest');
        }
        // Se deu certo com usuario e senha, faz o login
        $_SESSION['auth'] = $usuario;
        flash()->push('mensagem', 'Seja bem vindo ' . $usuario->nome . '!');
        return redirect('/notas');
    }
}
