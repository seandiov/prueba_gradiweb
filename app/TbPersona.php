<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TbPersona extends Model {

    protected $table = 'tb_persona';
    protected $casts = [
        'tipo_identificacion_id' => 'int'
    ];
    protected $fillable = [
        'tipo_identificacion_id',
        'nombres',
        'apellidos',
        'numero_documento',
        'correo_electronico',
        'numero_telefono',
        'activo'
    ];

    public function tb_tipo_identificacion() {
        return $this->belongsTo(TbTipoIdentificacion::class, 'tipo_identificacion_id');
    }

    public function tb_vehiculos() {
        return $this->hasMany(TbVehiculo::class, 'persona_propietario_id');
    }

}
