<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\clientes;

use App\users;

use App\productos;

use App\datos_empresa;

use DB;

use Illuminate\Support\Facades\Session;

class controllerEmpresarial extends Controller
{

    public function guardarDatosGenerales(Request $request,$id){
        $datos_empresa=datos_empresa::find($id);
        $clientes = users::find($id);
        $datos_empresa->nombre=$request->input('nombre_empresa');
        $datos_empresa->eslogan=$request->input('eslogan');
        $datos_empresa->domicilio=$request->input('direccion');
        $datos_empresa->correo=$request->input('correo');
        $datos_empresa->telefono=$request->input('telefono');
        $datos_empresa->save();

        return view('/mision_vision',compact('clientes','datos_empresa'));
    }

    public function datosEmpresa(){
        return view('/datosEmpresa');
    }

    public function datosGenerales($id){
        $clientes = users::find($id);
        $datos_empresa = datos_empresa::find($id);
        return view('/datos_generales',compact('clientes','datos_empresa'));
    }

    public function misionVision($id){
        $clientes=users::find($id);
        $datos_empresa = datos_empresa::find($id);
        return view('/mision_vision',compact('clientes','datos_empresa'));
    }

    public function guardarMisionVision(Request $request,$id){
        $datos_empresa=datos_empresa::find($id);
        $clientes = users::find($id);
        $datos_empresa->mision=$request->input('mision');
        $datos_empresa->vision=$request->input('vision');
        $datos_empresa->save();

        return view('/productos',compact('clientes','datos_empresa'));
    }

    public function productos($id){
        $clientes=users::find($id);
        $datos_empresa = datos_empresa::find($id);
        return view('/productos',compact('clientes','datos_empresa'));
    }

    public function guardarProductos(Request $request,$id){
        $datos_empresa=datos_empresa::find($id);
        $clientes = users::find($id);
        $datos_empresa->articulo1=$request->input('articulo1');
        $datos_empresa->des_articulo1=$request->input('des_articulo1');
        $datos_empresa->articulo2=$request->input('articulo2');
        $datos_empresa->des_articulo2=$request->input('des_articulo2');
        $datos_empresa->articulo3=$request->input('articulo3');
        $datos_empresa->des_articulo3=$request->input('des_articulo3');
        $datos_empresa->servicio1=$request->input('servicio1');
        $datos_empresa->des_servicio1=$request->input('des_servicio1');
        $datos_empresa->servicio2=$request->input('servicio2');
        $datos_empresa->des_servicio2=$request->input('des_servicio2');
        $datos_empresa->servicio3=$request->input('servicio3');
        $datos_empresa->des_servicio3=$request->input('des_servicio3');
        $datos_empresa->save();

        return view('/descripcion',compact('clientes','datos_empresa'));
    }

    public function descripcion($id){
        $clientes=users::find($id);
        $datos_empresa = datos_empresa::find($id);
        return view('/descripcion',compact('clientes','datos_empresa'));
    }

    public function guardarDescripcion(Request $request,$id){
        $datos_empresa=datos_empresa::find($id);
        $clientes = users::find($id);
        $datos_empresa->nom_encargado1=$request->input('encargado');
        $datos_empresa->dias_trabajados=$request->input('diasTrab');
        $datos_empresa->dias_descanso=$request->input('diasDesc');
        $datos_empresa->horario=$request->input('horario');
        $datos_empresa->save();

        return view('/imagenes',compact('clientes','datos_empresa'));
    }
    
    public function generarPagina($id){
        $clientes=users::find($id);
        $datos_empresa = datos_empresa::find($id);
        shell_exec("rm id.txt");
        $file = fopen("id.txt", "w");
        fwrite($file, $id);
        fclose($file);
        
        $a=shell_exec(sprintf('./generaCarpeta.sh  %s %s %s %s %s %s %s %s', $datos_empresa->nombre, $datos_empresa->id, $datos_empresa->articulo1, $datos_empresa->articulo2, $datos_empresa->articulo3, $datos_empresa->servicio1, $datos_empresa->servicio2, $datos_empresa->servicio3));
        return view('/avisoGene', compact('datos_empresa','clientes'));

    }

    public function pdfEmpresa($id){
        
        $datos_empresa=datos_empresa::find($id);
        $clientes = users::find($id);

        $vista=view('pdfEmpresa', compact('datos_empresa', 'clientes'));
        $dompdf= \App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream();
    }
}
