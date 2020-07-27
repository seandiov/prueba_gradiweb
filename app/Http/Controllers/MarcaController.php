<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function listar(){
        return \App\TbMarca::all();
    }
}
