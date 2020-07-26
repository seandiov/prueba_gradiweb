<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TbMarca extends Model {

    protected $table = 'tb_marca';
    protected $fillable = [
        'nombre',
        'slug',
        'activo'
    ];

    public function tb_modelo_marcas() {
        return $this->hasMany(TbModeloMarca::class, 'marca_id');
    }

    public function tb_vehiculos() {
        return $this->hasMany(TbVehiculo::class, 'marca_id');
    }

}
