<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('master');
});

Route::get('/datosGenerales', 'controllerEmpresarial@modificarDatosGenerales');

Route::post('/guardarDatosGenerales/{id}','controllerEmpresarial@guardarDatosGenerales');

Route::get('/mision_vision', 'controllerEmpresarial@modificarMisionVision');

Route::post('/guardarMisionVision/{id}','controllerEmpresarial@guardarMisionVision');

Route::get('/descripcion', 'controllerEmpresarial@modificarDescripcion');

Route::post('/guardarDescripcion/{id}','controllerEmpresarial@guardarDescripcion');


Route::get('/productos', function () {
    return view('productos');
});