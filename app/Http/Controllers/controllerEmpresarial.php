<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\clientes;

use App\productos;

use App\datos_empresa;

use App\datosEmpresa_clientes;

use App\productos_clientes;


class controllerEmpresarial extends Controller
{

	public function guardarDatosGenerales(Request $request, $id){
    	$datos_empresa=datos_empresa::find($id);
 		$datos_empresa->nombre=$request->input('nombre');
 		$datos_empresa->eslogan=$request->input('eslogan');
 		$datos_empresa->domicilio=$request->input('domicilio');
 		$datos_empresa->correo=$request->input('correo');
 		$datos_empresa->telefono=$request->input('telefono');
 		$datos_empresa->save();

 		return Redirect('/datos_generales');
 	}

 	public function modificarDatosGenerales(){
 //		$datos_empresa=datos_empresa::find($id);
 //		return view('/datos_generales',compact('datos_empresa'));
 		return view('/datos_generales');
 	}

    public function guardarMisionVision(Request $request, $id){
    	$datos_empresa=datos_empresa::find($id);
 		$datos_empresa->mision=$request->input('mision');
 		$datos_empresa->vision=$request->input('vision');
 		$datos_empresa->save();

 		return Redirect('/mision_vision');
 	}

 	public function modificarMisionVision(){
 		return view('/mision_vision');
 	}

 	public function guardarDescripcion(Request $request, $id){
    	$datos_empresa=datos_empresa::find($id);
 		$datos_empresa->nom_encargado1=$request->input('nom_encargado1');
 		$datos_empresa->dias_trabajados=$request->input('dias_trabajados');
 		$datos_empresa->dias_descanso=$request->input('dias_descanso');
 		$datos_empresa->horario=$request->input('horario');
 		$datos_empresa->save();

 		return Redirect('/descripcion');
 	}

 	public function modificarDescripcion(){
		return view('/descripcion');
 	}
}
