<?php

namespace App\Controllers;

class LogoutController
{

    public function __invoke()
    {
        // $_SESSION['auth'];
        session_destroy();
        return redirect('/login');
    }
}
