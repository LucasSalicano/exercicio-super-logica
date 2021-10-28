<?php

namespace App\Models;

interface Crud
{
    public function store();

    public function delete(int $id);

    public function show();

    public function findAll();
}