<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TbVehiculo extends Model {

    protected $table = 'tb_vehiculo';
    protected $casts = [
        'marca_id' => 'int',
        'modelo_marca_id' => 'int',
        'persona_propietario_id' => 'int'
    ];
    protected $fillable = [
        'marca_id',
        'modelo_marca_id',
        'persona_propietario_id',
        'placa',
        'activo'
    ];

    public function tb_marca() {
        return $this->belongsTo(TbMarca::class, 'marca_id');
    }

    public function tb_modelo_marca() {
        return $this->belongsTo(TbModeloMarca::class, 'modelo_marca_id');
    }

    public function tb_persona() {
        return $this->belongsTo(TbPersona::class, 'persona_propietario_id');
    }

}
