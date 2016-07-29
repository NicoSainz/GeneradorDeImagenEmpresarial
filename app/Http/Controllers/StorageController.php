<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\clientes;

use App\users;

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
  	$clientes=users::find($id);
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
  	$clientes=users::find($id);
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
    if ($request->file('articulo3') != null) {
      $fileArt3 = $request->file('articulo3');
      $nombreArt3 = $datos_empresa->articulo3.'.jpg';
      \Storage::disk('local')->put($nombreArt3,  \File::get($fileArt3));
    }
    if ($request->file('servicio1') != null) {
      $fileSer1 = $request->file('servicio1');
      $nombreSer1 = $datos_empresa->servicio1.'.jpg';
      \Storage::disk('local')->put($nombreSer1,  \File::get($fileSer1));
    }
    if ($request->file('servicio2') != null) {
      $fileSer2 = $request->file('servicio2');
      $nombreSer2 = $datos_empresa->servicio2.'.jpg';
      \Storage::disk('local')->put($nombreSer2,  \File::get($fileSer2));
    }
    if ($request->file('servicio3') != null) {
      $fileSer3 = $request->file('servicio3');
      $nombreSer3 = $datos_empresa->servicio3.'.jpg';
      \Storage::disk('local')->put($nombreSer3,  \File::get($fileSer3));
    }

    
    //return "archivo guardado";
    return view('/datos_generales',compact('clientes','datos_empresa'));
  }
}
