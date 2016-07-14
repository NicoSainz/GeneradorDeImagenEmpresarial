<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\clientes;

class controllerEmpresarial extends Controller
{
    public function mostrarClientes(){
        $cliente=clientes::all();
        return view ('clientes', compact('cliente'));
    }
    public function editarDatos($id){
        $clientes=clientes::find($id);
        return view('/datos_generales', compact('clientes'));
    }
}
