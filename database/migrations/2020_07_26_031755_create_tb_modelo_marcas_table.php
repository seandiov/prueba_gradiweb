<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbModeloMarcasTable extends Migration {

    public function up() {
        Schema::create('tb_modelo_marca', function (Blueprint $table) {

            $table->smallInteger('id', true)->unsigned()->comment("Identificador primario del modelo de la marca");
            $table->smallInteger('marca_id', false)->unsigned()->comment("Id de marca relacionada al modelo");
            $table->string('nombre', 30)->comment("Nombre del modelo de la marca");
            $table->string('slug', 40)->comment("Campo Slug para presentar en web");
            $table->enum('activo', ['Activo', 'Inactivo'])->default('Activo')->comment("Indicador de activo del modelo de marca");
            $table->datetime('created_at')->comment("Fecha de creación del registro");
            $table->datetime('updated_at')->nullable()->comment("Fecha de modificación del registro");
            
            /* Especificacion de foraneas */
            $table->foreign("marca_id")
                    ->references('id')
                    ->on('tb_marca')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
        });
    }

    public function down() {
        Schema::dropIfExists('tb_modelo_marca');
    }

}
