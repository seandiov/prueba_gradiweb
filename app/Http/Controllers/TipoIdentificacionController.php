<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipoIdentificacionController extends Controller
{
    public function listar(){
        return \App\TbTipoIdentificacion::all();
    }
}
