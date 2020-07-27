<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeloMarcaController extends Controller
{
    public function filtrarPorMarca($id){
        return \App\TbModeloMarca::query()->where("marca_id", $id)->get();
    }
}
