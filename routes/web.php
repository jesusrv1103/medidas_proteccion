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




Route::get('/', 'MedidasDeProteccion\MedidaDeProteccionController@create')->name('medidas.proteccion.create');


Route::post('/', 'MedidasDeProteccion\MedidaDeProteccionController@store')->name('medidas.proteccion.store');

Route::get('medidasproteccion', 'MedidasDeProteccion\MedidaDeProteccionController@index')->name('medidas.proteccion.index')->middleware('auth');

Route::get('medidasproteccion/{id}/detalles', 'MedidasDeProteccion\MedidaDeProteccionController@show')->name('medidas.proteccion.detalles')->middleware('auth');

Route::get('medidasproteccion/{id}/seguimiento', 'MedidasDeProteccion\MedidaDeProteccionController@seguimiento')->name('medidas.proteccion.seguimiento')->middleware('auth');


Route::post('medidasdeproteccion/{id}/evidencia', 'MedidasDeProteccion\EvidenciaMedidaProteccionController@store')->name('medidasdeproteccion.evidencias.store')->middleware('auth');



Route::post('seguimiento/medidas/proteccion', 'MedidasDeProteccion\SeguimientoMedidaProteccionController@store')->name('seguimiento.proteccion.store')->middleware('auth');



Route::get('seguimiento/medidas/proteccion', 'MedidasDeProteccion\SeguimientoMedidaProteccionController@index')->name('seguimiento.proteccion.index')->middleware('auth');

Route::get('seguimiento/medidas/{id}/detalles', 'MedidasDeProteccion\SeguimientoMedidaProteccionController@show')->name('seguimiento.medidas.detalles')->middleware('auth');
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');




Route::post('logout', 'Auth\LoginController@logout ')->name('logout')->middleware('auth');;


Route::post('register', 'Auth\RegisterController@register')->middleware('auth');;

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register')->middleware('auth');
       
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
