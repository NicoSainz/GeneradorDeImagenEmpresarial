<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\datos_empresa;

class controllerGenerico extends Controller
{

    public function principal(){
        $file = fopen("id.txt", "r");
        while(!feof($file)) {
            $datos_empresa = datos_empresa::find(fgets($file));
        }

        fclose($file);
        
        return view('/principal',compact('datos_empresa'));
    }

}
