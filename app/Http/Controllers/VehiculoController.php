<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiculoController extends Controller {

    public function inicio() {
        return view('vehiculo.inicio');
    }

    public function nuevo() {
        return view('vehiculo.form');
    }

    public function crear(Request $request) {
        $response = array();
        DB::beginTransaction();
        try {
            $personaController = new \App\Http\Controllers\PersonaController();
            $persona = $personaController->save($request->get('propietario'));
            $vehiculo = new \App\TbVehiculo($request->get('vehiculo'));
            $vehiculo->persona_propietario_id = $persona->id;
            $vehiculo->save();
            $response = array(
                'status' => 200,
                'message' => 'Vehiculo guardado exitosamente'
            );
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            $response = array(
                'status' => 500,
                'message' => $e->getMessage()
            );
        }
        return response(json_encode($response), $response['status']);
    }

    public function save($vehiculo) {
        $vehiculo = new \App\TbVehiculo($vehiculo);
        $vehiculo->save();
        return $vehiculo;
    }

    public function contarVehiculos() {
        
        return DB::table('tb_vehiculo')
            ->join('tb_marca', 'tb_vehiculo.marca_id', '=', 'tb_marca.id')
            ->join('tb_persona', 'tb_vehiculo.persona_propietario_id', '=', 'tb_persona.id')
            ->select(['tb_marca.id','tb_marca.nombre',DB::raw('COUNT(1) as cantidad')])
            ->groupBy('tb_marca.id')
            ->get();
    }

}
