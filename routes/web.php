<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});

Route::group(['prefix'=>'tipoIdentificacion'], function(){
   Route::get('listar','TipoIdentificacionController@listar')->name('tipoIdentificacion.listar');
});

Route::group(['prefix'=>'marca'], function(){
   Route::get('listar','MarcaController@listar')->name('marca.listar');
});

Route::group(['prefix'=>'modelo'], function(){
   Route::get('filtrarPorMarca/{id}','ModeloMarcaController@filtrarPorMarca')->name('modeloMarca.filtrarPorMarca');
});

Route::group(['prefix'=>'vehiculo'], function(){
   Route::get('inicio','VehiculoController@inicio')->name('vehiculo.inicio');
   Route::get('contarVehiculos','VehiculoController@contarVehiculos')->name('vehiculo.contarVehiculos');
   Route::get('nuevo','VehiculoController@nuevo')->name('vehiculo.nuevo');
   Route::post('crear','VehiculoController@crear')->name('vehiculo.crear');
});