<?php

namespace App\Core;

use App\Controllers\UsuarioController;
use App\Controllers\ErroController;

class App
{
    public function __construct()
    {
        define('PATH', "http://".$_SERVER['HTTP_HOST']);
    }

    public function run()
    {
        session_start();
        //Pegando a rota
        $caminho = $_SERVER['PATH_INFO'] ?? null;

        if (is_null($caminho)) {
            return (new UsuarioController())->index();
        }

        $rotas = require_once __DIR__."/../Routes/routes.php";;

        if (!array_key_exists($caminho, $rotas,)) {
            return (new ErroController())->index();
        }

        $controller = new $rotas[$caminho];
        $metodo = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        if (method_exists($controller, $metodo)) {
            return $controller->{$metodo}();
        }
    }
}