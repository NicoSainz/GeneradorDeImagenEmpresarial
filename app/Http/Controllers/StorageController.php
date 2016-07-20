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
    return view('/imagenes',compact('clientes','datos_empresa'));
  }

  /**
  * guarda un archivo en nuestro directorio local.
  *
  * @return Response
  */
  public function save(Request $request,$id)
  {
  	$clientes=clientes::find($id);
    $datos_empresa = datos_empresa::find($id);

    //obtenemos el campo file definido en el formulario
    if ($request->file('Logotipo') != null) {
      $file = $request->file('Logotipo');
      $nombre = $id.'.jpg';
      \Storage::disk('local')->put($nombre,  \File::get($file));
    }
    if ($request->file('articulo1') != null) {
      $fileArt1 = $request->file('articulo1');
      $nombreArt1 = $datos_empresa->articulo1.'.jpg';
      \Storage::disk('local')->put($nombreArt1,  \File::get($fileArt1));
    }
    if ($request->file('articulo2') != null) {
      $fileArt2 = $request->file('articulo2');
      $nombreArt2 = $datos_empresa->articulo2.'.jpg';
      \Storage::disk('local')->put($nombreArt2,  \File::get($fileArt2));
    }
    //obtenemos el nombre del archivo
    
    
   
   
    //indicamos que queremos guardar un nuevo archivo en el disco local
    
    
    
   
    //return "archivo guardado";
    return view('/datos_generales',compact('clientes','datos_empresa'));
  }
}
