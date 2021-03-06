<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('servicios/{id}','Admin\ServicioControler@servicioPorArea');
Route::get('fracciones/{idLey}/{idCategoria}','Admin\FraccionController@fraccionPorCategoria');


    
Route::post('medidasdeproteccion/{id}/evidencia', 'MedidasDeProteccion\EvidenciaMedidaProteccionController@store')->name('medidasdeproteccion.evidencias.store');

