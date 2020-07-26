<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TbModeloMarca extends Model {

    protected $table = 'tb_modelo_marca';
    protected $casts = [
        'marca_id' => 'int'
    ];
    protected $fillable = [
        'marca_id',
        'nombre',
        'slug',
        'activo'
    ];

    public function tb_marca() {
        return $this->belongsTo(TbMarca::class, 'marca_id');
    }

    public function tb_vehiculos() {
        return $this->hasMany(TbVehiculo::class, 'modelo_marca_id');
    }

}
