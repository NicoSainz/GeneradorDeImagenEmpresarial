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
Route::get('/envia', function () {
    return view('/auth/emails/notificacion');
});

Route::get('/plantilla', function () {
    return view('plantilla');
});

Route::get('/', function () {
    return view('principal');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/conocenos', function () {
    return view('conocenos');
});

Route::get('/pdfEmpresa/{id}', 'controllerEmpresarial@pdfEmpresa');

Route::get('/datosEmpresa','controllerEmpresarial@datosEmpresa');

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

Route::get('generarPagina/{id}','controllerEmpresarial@generarPagina');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('enviar', ['as' => 'enviar', function () {

    $data = ['link' => 'http://styde.net'];

    \Mail::send('auth/passwords/email', $data, function ($message) {

        $message->from('soporte_neas@hotmail.com', 'Soporte NEAS');

        $message->to('nicolas.sainz.pineda@gmail.com')->subject('Notificación NEAS');

    });

    return "Se envío el email";
}]);

Route::post('/guardarColor/{id}', 'controllerEmpresarial@guardarColor');

Route::get('/diseño/{id}', 'controllerEmpresarial@diseño');
