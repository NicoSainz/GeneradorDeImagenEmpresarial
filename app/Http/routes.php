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
    return view('principal');
});

Route::get('/iniciarSesion', function () {
	return view('/iniciarSesion');
});

Route::post('/login','controllerEmpresarial@login');

Route::get('/datosGenerales/{id}','controllerEmpresarial@datosGenerales');

Route::post('/guardarDatosGenerales/{id}','controllerEmpresarial@guardarDatosGenerales');

Route::get('/mision_vision/{id}', 'controllerEmpresarial@misionVision');

Route::post('/guardarMisionVision/{id}','controllerEmpresarial@guardarMisionVision');

Route::get('/productos/{id}', 'controllerEmpresarial@productos');

Route::post('/guardarProductos/{id}','controllerEmpresarial@guardarProductos');

Route::get('/descripcion/{id}', 'controllerEmpresarial@descripcion');




Route::get('/descripcion', function () {
    return view('descripcion');
});

Route::get('/productos', function () {
    return view('productos');
});