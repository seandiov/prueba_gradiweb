<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbVehiculosTable extends Migration {

    public function up() {
        Schema::create('tb_vehiculo', function (Blueprint $table) {

            $table->integer('id', true)->unsigned()->comment("Identificador primario de vehiculo");
            $table->smallInteger('marca_id', false)->unsigned()->comment("Id de marca relacionada al vehiculo");
            $table->smallInteger('modelo_marca_id', false)->unsigned()->comment("Id de marca relacionada al vehiculo");
            $table->integer('persona_propietario_id', false)->unsigned()->comment("Id persona propietaria del vehiculo");
            $table->string('placa', 30)->unique()->comment("Placa del vehiculo");
            $table->enum('activo', ['Activo', 'Inactivo'])->default('Activo')->comment("Indicador de activo del vehiculo");
            $table->datetime('created_at')->comment("Fecha de creación del registro");
            $table->datetime('updated_at')->nullable()->comment("Fecha de modificación del registro");
            
            /* Especificacion de foraneas */
            $table->foreign("marca_id")
                    ->references('id')
                    ->on('tb_marca')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
            $table->foreign("modelo_marca_id")
                    ->references('id')
                    ->on('tb_modelo_marca')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
            $table->foreign("persona_propietario_id")
                    ->references('id')
                    ->on('tb_persona')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
        });
    }

    public function down() {
        Schema::dropIfExists('tb_vehiculo');
    }

}
