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
Route::get('/plantilla', function () {
    return view('plantilla');
});

Route::get('/', function () {
    return view('principal');
});

Route::get('/iniciarSesion', function () {
	return view('/iniciarSesion');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/conocenos', function () {
    return view('conocenos');
});

Route::get('/registroClientes', function () {
    return view('registroClientes');
});

Route::get('/pdfEmpresa/{id}', 'controllerEmpresarial@pdfEmpresa');

Route::get('/aviso/{id}','controllerEmpresarial@avisoGene');

Route::post('/login','controllerEmpresarial@login');

Route::get('/datosGenerales/{id}','controllerEmpresarial@datosGenerales');

Route::post('/guardarDatosGenerales/{id}','controllerEmpresarial@guardarDatosGenerales');

Route::get('/mision_vision/{id}', 'controllerEmpresarial@misionVision');

Route::post('/guardarMisionVision/{id}','controllerEmpresarial@guardarMisionVision');

Route::get('/productos/{id}', 'controllerEmpresarial@productos');

Route::post('/guardarProductos/{id}','controllerEmpresarial@guardarProductos');

Route::get('/descripcion/{id}', 'controllerEmpresarial@descripcion');

Route::post('/guardarDescripcion/{id}','controllerEmpresarial@guardarDescripcion');

Route::get('imagenes/{id}', 'StorageController@index');
Route::post('storage/create/{id}', 'StorageController@save');
Route::get('storage/{archivo}', function ($archivo) {
     $public_path = public_path();
     $url = $public_path.'/storage/'.$archivo;
     //verificamos si el archivo existe y lo retornamos
     if (Storage::exists($archivo))
     {
       return response()->download($url);
     }
     //si no se encuentra lanzamos un error 404.
     abort(404);
 
});
