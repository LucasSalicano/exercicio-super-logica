<?php

namespace App\Controllers;

class ErroController extends Controller
{
    public function index()
    {
        $this->render('/erro/404');
    }
}