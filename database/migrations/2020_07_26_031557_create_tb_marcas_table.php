<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMarcasTable extends Migration {
    protected $table = 'tb_marca';

    public function up() {
        Schema::create('tb_marca', function (Blueprint $table) {

            $table->smallInteger('id', true)->unsigned()->comment("Identificador primario de marca");
            $table->string('nombre', 30)->comment("Marca de vehiculo")->unique();
            $table->string('slug', 40)->comment("Campo Slug para presentar en web")->unique();
            $table->enum('activo', ['Activo', 'Inactivo'])->default('Activo')->comment("Indicador de activo de la marca");
            $table->datetime('created_at')->comment("Fecha de creación del registro");
            $table->datetime('updated_at')->nullable()->comment("Fecha de modificación del registro");
        });
    }

    public function down() {
        Schema::dropIfExists('tb_marca');
    }

}
