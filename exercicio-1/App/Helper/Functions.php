<?php

namespace App\Helper;

class Functions
{
    public static function criptografarSenha(string $senha): string
    {
        return password_hash($senha, PASSWORD_BCRYPT);
    }
}