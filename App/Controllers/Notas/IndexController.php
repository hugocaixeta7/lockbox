<?php

namespace App\Controllers\Notas;

use App\Models\Nota;

class IndexController
{

    public function __invoke()
    {
        $notas = Nota::all();

        $id = isset($_GET['id']) ? $_GET['id'] : $notas[0]->id;

        $filtro = array_filter($notas, fn($n) => $n->id == $id);
        $notaselecionada = array_pop($filtro);

        return view('notas', [
            'notas' => $notas,
            'notaSelecionada' => $notaselecionada
        ]);
    }
}
