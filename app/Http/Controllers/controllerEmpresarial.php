<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\clientes;

use App\productos;

use App\datos_empresa;


class controllerEmpresarial extends Controller
{

    public function login(Request $request){
        $id = $request->input('nombre_empresa');
        $clientes=clientes::find($id);
        $datos_empresa = datos_empresa::find($id);

     //   dd($clientes);
     //   dd($id);
        return view('/datos_generales',compact('clientes','datos_empresa'));
    }

    public function guardarDatosGenerales(Request $request,$id){
        $datos_empresa=datos_empresa::find($id);
        $clientes = clientes::find($id);
        $datos_empresa->nombre=$request->input('nombre_empresa');
        $datos_empresa->eslogan=$request->input('eslogan');
        $datos_empresa->domicilio=$request->input('direccion');
        $datos_empresa->correo=$request->input('correo');
        $datos_empresa->telefono=$request->input('telefono');
        $datos_empresa->save();

        return view('/mision_vision',compact('clientes'));
    }

    public function datosGenerales($id){
        $clientes = clientes::find($id);
        $datos_empresa = datos_empresa::find($id);
        return view('/datos_generales',compact('clientes','datos_empresa'));
    }

    public function misionVision($id){
        $clientes=clientes::find($id);
        $datos_empresa = datos_empresa::find($id);
        return view('/mision_vision',compact('clientes','datos_empresa'));
    }

    public function guardarMisionVision(Request $request,$id){
        dd($request);
        $datos_empresa=datos_empresa::find($id);
        $clientes = clientes::find($id);
        $datos_empresa->mision=$request->input('mision');
        $datos_empresa->vision=$request->input('vision');
        $datos_empresa->save();

        return view('/productos',compact('clientes'));
    }

    public function productos($id){
        $clientes=clientes::find($id);
        $datos_empresa = datos_empresa::find($id);
        return view('/productos',compact('clientes','datos_empresa'));
    }

    public function guardarProductos(Request $request,$id){
        $datos_empresa=datos_empresa::find($id);
        $clientes = clientes::find($id);
        $datos_empresa->articulo1=$request->input('articulo1');
        $datos_empresa->articulo2=$request->input('articulo2');
        $datos_empresa->servicio1=$request->input('servicio1');
        $datos_empresa->servicio2=$request->input('servicio2');
        $datos_empresa->save();

        return view('/descripcion',compact('clientes'));
    }

    public function descripcion($id){
        $clientes=clientes::find($id);
        $datos_empresa = datos_empresa::find($id);
        return view('/descripcion',compact('clientes','datos_empresa'));
    }

    public function guardarDescripcion(Request $request,$id){
        $datos_empresa=datos_empresa::find($id);
        $clientes = clientes::find($id);
        $datos_empresa->nom_encargado1=$request->input('encargado');
        $datos_empresa->dias_trabajados=$request->input('dias_trabajados');
        $datos_empresa->dias_descanso=$request->input('dias_descanso');
        $datos_empresa->horario=$request->input('horario');
        $datos_empresa->save();

        return view('/datos_generales',compact('clientes'));
    }
    
}
