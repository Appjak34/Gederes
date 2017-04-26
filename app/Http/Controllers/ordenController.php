<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; 
use App\orden;

class ordenController extends Controller
{
    public function muestraordenes(){
    	$orden = orden::all();
	    return view('Paginas/Chef')->with('orden', $orden);
    }
}
