<?php

namespace App\Controllers;

use App\Models\Usuario as UsuarioModel;

class UsuarioController extends Controller
{
    public function index()
    {
        $this->render('usuario/index');
    }

    public function novo()
    {
        $this->render('usuario/novo');
    }

    public function salvar()
    {
        (new UsuarioModel())->store();
        $this->render('usuario/novo');
    }
}