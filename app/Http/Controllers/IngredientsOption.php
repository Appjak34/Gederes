<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\ingrediente;

class IngredientsOption extends Controller
{
   public function addoption(){
    	$ingredientes = ingrediente::all();
	    return view('Paginas/agregarPlatillos')->with('ingredientes',$ingredientes);
    }
}