<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller {

    public function save($persona) {
        $persona = new \App\TbPersona($persona);
        $persona->save();
        return $persona;
    }

}
