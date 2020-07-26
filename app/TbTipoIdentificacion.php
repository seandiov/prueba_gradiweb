<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TbTipoIdentificacion extends Model {

    protected $table = 'tb_tipo_identificacion';
    protected $fillable = [
        'nombre',
        'abreviatura',
        'activo'
    ];

    public function tb_personas() {
        return $this->hasMany(TbPersona::class, 'tipo_identificacion_id');
    }

}
