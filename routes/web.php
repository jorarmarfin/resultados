<?php

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

});
Route::get('mostrar_resultados', function () {
    return view('index');
});

Route::get('activando/{id}','EstadoResultadosController@activar')->name('resultados.activar');

Route::get('resultados-cepre/{id?}','ResultadosController@cepre')->name('resultados.cepre');
Route::post('resultados-cepre','ResultadosController@storecepre')->name('resultados.cepre.store');

Route::get('resultados-admision/{id?}','ResultadosController@admision')->name('resultados.admision');
Route::post('resultados-admision','ResultadosController@storeadmision')->name('resultados.admision.store');

Route::get('resultados-simulacro/{id?}','ResultadosController@simulacro')->name('resultados.simulacro');
Route::post('resultados-simulacro','ResultadosController@storesimulacro')->name('resultados.simulacro.store');
Route::get('resultados-simulacro-quinto','ResultadosController@simulacroquinto')->name('resultados.simulacro.quinto');
Route::get('resultados-simulacro-otros','ResultadosController@simulacrootros')->name('resultados.simulacro.otros');



Route::get('resultados-escolar/{id?}','ResultadosController@escolar')->name('resultados.escolar');
Route::post('resultados-escolar','ResultadosController@storeescolar')->name('resultados.escolar.store');

