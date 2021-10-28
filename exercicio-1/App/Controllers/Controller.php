<?php

namespace App\Controllers;

abstract class Controller
{

    public function render($view)
    {
        require_once __DIR__ . '/../Views/layouts/cabecalho.php';
        require_once __DIR__ . '/../Views/' . $view . '.php';
        require_once __DIR__ . '/../Views/layouts/rodape.php';
    }

}