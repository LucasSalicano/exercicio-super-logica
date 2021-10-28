<?php

use App\Controllers\ErroController;
use App\Controllers\UsuarioController;

return [
    "/usuarios/index" => UsuarioController::class,
    "/usuarios/novo" => UsuarioController::class,
    "/usuarios/salvar" => UsuarioController::class,
    "/erro/404" => ErroController::class,
];