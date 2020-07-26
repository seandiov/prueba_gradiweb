<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPersonasTable extends Migration {

    public function up() {
        Schema::create('tb_persona', function (Blueprint $table) {

            $table->integer('id', true)->unsigned()->comment("Identificador primario de persona");
            $table->tinyInteger('tipo_identificacion_id', false)->unsigned()->comment("Id del tipo de identificacion de la persona");
            $table->string('nombres', 30)->comment("Primer y segundo nombre de la persona");
            $table->string('apellidos', 30)->comment("Primer y segundo apellido de la persona");
            $table->string('numero_documento', 14)->unique()->comment("Numero de identificacion de la persona");
            $table->string('correo_electronico', 80)->unique()->comment("Correo electronico de la persona");
            $table->string('numero_telefono', 12)->unique()->comment("Numero telefonico de la persona");
            $table->enum('activo', ['Activo', 'Inactivo'])->default('Activo')->comment("Indicador de activo de la persona");
            $table->datetime('created_at')->comment("Fecha de creación del registro");
            $table->datetime('updated_at')->nullable()->comment("Fecha de modificación del registro");
            
            
            /* Especificacion de foraneas */
            $table->foreign("tipo_identificacion_id")
                    ->references('id')
                    ->on('tb_tipo_identificacion')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
        });
    }

    public function down() {
        Schema::dropIfExists('tb_persona');
    }

}
