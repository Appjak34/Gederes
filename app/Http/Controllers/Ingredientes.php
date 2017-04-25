<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\ingrediente;

class Ingredientes extends Controller
{
   public function almacen(){
    	$ingredientes = ingrediente::all();
	    return view('Paginas/almacen')->with('ingredientes',$ingredientes);
    }
}