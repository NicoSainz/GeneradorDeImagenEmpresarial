<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\clientes;

use App\productos;

use App\datos_empresa;

class StorageController extends Controller
{
    	
/**
* muestra el formulario para guardar archivos
*
* @return Response
*/
public function index($id){
	$clientes=clientes::find($id);
    $datos_empresa = datos_empresa::find($id);
      return view('new',compact('clientes','datos_empresa'));
   }

/**
* guarda un archivo en nuestro directorio local.
*
* @return Response
*/
public function save(Request $request)
{
	

       //obtenemos el campo file definido en el formulario
       $file = $request->file('file');
 
       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();
 
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));
 
       //return "archivo guardado";
       return Redirect('/');
}
}
