<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; 
use App\orden;
use App\detallesorden;

class ordenController extends Controller
{
    public function muestraordenes(){
    	$orden = orden::all();
    	$detallesorden = detallesorden::all();
	    return view('Paginas/Chef')->with('orden', $orden)->with('detallesorden', $detallesorden);
    }
   public function updateorden(Request $request){ //Función UPDATE, actualiza un registro en la base de datos
    	$orden = orden::find($request->id_orden);
    	$orden->estatus = $request->estatus;
    	$orden->save();
    	$orden = orden::all();
    	$detallesorden = detallesorden::all();
	    return redirect()->back()->with('orden', $orden)->with('detallesorden', $detallesorden);
    }
}
