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
    return view('welcome');
});

Route::get('resultados-cepre','ResultadosController@cepre')->name('resultados.cepre');
Route::post('resultados-cepre','ResultadosController@storecepre')->name('resultados.cepre.store');