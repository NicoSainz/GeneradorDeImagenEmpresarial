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


Route::get('/iniciarSesion', function () {return view('iniciarSesion');});
Route::get('/clientes', 'controllerEmpresarial@mostrarClientes');

Route::get('/datosGenerales/{id}', 'controllerEmpresarial@editarDatos');
Route::post('/actualizarDatos/{id}', 'e1controller@actualizarDatos');




Route::get('/', function () {
    return view('principal');
});

Route::get('/mision_vision', function () {return view('mision_vision');});


Route::get('/descripcion', function () {
    return view('descripcion');
});
Route::get('/productos', function () {
    return view('productos');
});