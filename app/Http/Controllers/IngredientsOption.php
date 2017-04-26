<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\ingrediente;
use App\platillo;

class IngredientsOption extends Controller
{
   public function addoption(){
    	$ingredientes = ingrediente::all();
	    return view('Paginas/agregarPlatillos')->with('ingredientes',$ingredientes);
    }
    public function addoptionupdate(){
    	$ingredientes = ingrediente::all();
    	$platillo = platillo::all();
	    return view('Paginas/actualizarPlatillo')->with('ingredientes',$ingredientes)
	    										 ->with('platillos',$platillo);
    }

}