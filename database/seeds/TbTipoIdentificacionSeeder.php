<?php

use Illuminate\Database\Seeder;

class TbTipoIdentificacionSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('tb_tipo_identificacion')->insert([
            'id' => 1,
            'nombre' => 'Cédula de ciudadanía',
            'abreviatura' => 'CC',
            'activo' => 'Activo',
            'created_at' => '2020-07-25 19:11:03',
            'updated_at' => NULL
        ]);



        DB::table('tb_tipo_identificacion')->insert([
            'id' => 2,
            'nombre' => 'Tarjeta de identidad',
            'abreviatura' => 'TI',
            'activo' => 'Activo',
            'created_at' => '2020-07-25 19:11:53',
            'updated_at' => NULL
        ]);



        DB::table('tb_tipo_identificacion')->insert([
            'id' => 3,
            'nombre' => 'Tarjeta de extranjería',
            'abreviatura' => 'TE',
            'activo' => 'Activo',
            'created_at' => '2020-07-25 19:11:56',
            'updated_at' => NULL
        ]);
    }

}
