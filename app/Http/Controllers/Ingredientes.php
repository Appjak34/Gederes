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
    public function store(Request $request){ //Función STORE, inserta un registro en la base de datos
    //	dd($request);
    	$ingrediente = new ingrediente;
    	$ingrediente->nombreIngrediente = $request->nombreIngrediente;
    	$ingrediente->cantidad = $request->cantidad;
    	$ingrediente->save();
        $ingredientes = ingrediente::all();
    	return view('Paginas/almacen')->with('ingredientes',$ingredientes);
    }
    public function update(Request $request){ //Función UPDATE, actualiza un registro en la base de datos
    	//dd($request);
    	$ingrediente = ingrediente::find($request->nombreIngrediente);
    //	$platillo::find(1);
    	$ingrediente->cantidad = $request->cantidad; 
    	$ingrediente->save();
        $ingredientes = ingrediente::all();
    	return view('Paginas/almacen')->with('ingredientes',$ingredientes);
    }
}