<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detallesorden;

class detallesordenController extends Controller
{
    public function muestraordenes(){
    	$detallesorden = detalles_orden::all();
	    return view('Paginas/Chef')->with('detallesorden', $detallesorden);
    }
}
