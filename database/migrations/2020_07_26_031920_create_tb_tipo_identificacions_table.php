<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTipoIdentificacionsTable extends Migration {

    public function up() {
        Schema::create('tb_tipo_identificacion', function (Blueprint $table) {

            $table->tinyInteger('id', true)->unsigned()->comment("Identificador primario de tipo de identificacion");
            $table->string('nombre', 30)->comment("Nombre del tipo de identificacion")->unique();
            $table->string('abreviatura', 40)->comment("Abreviatura del tipo de identificacion")->unique();
            $table->enum('activo', ['Activo', 'Inactivo'])->default('Activo')->comment("Indicador de activo del tipo de identificacion");
            $table->datetime('created_at')->comment("Fecha de creación del registro");
            $table->datetime('updated_at')->nullable()->comment("Fecha de modificación del registro");
        });
    }

    public function down() {
        Schema::dropIfExists('tb_tipo_identificacion');
    }

}
