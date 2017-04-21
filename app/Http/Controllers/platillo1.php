<?php

namespace App\Http\Controllers;

use App\platillo;
use Illuminate\Http\Request;

class platillo1 extends Controller
{
    public function store(Request $request){
    	//dd($request);
    	$platillo = new platillo;
    	$platillo->nombrePlatillo = $request->nombrePlatillo;
    	$platillo->descripcion = $request->descripcion;
    	$platillo->tipo = $request->tipo;
    	$platillo->precio = $request->precio;
    	$platillo->imagen = $request->imagen;
    	$platillo->save();
    	return view('Welcome');
    }
    public function update(Request $request){
    	//dd($request);
    	$platillo = platillo::find($request->id_platillo);
    //	$platillo::find(1);
    	$platillo->nombrePlatillo = $request->nombrePlatillo;
    	$platillo->descripcion = $request->descripcion;
    	$platillo->tipo = $request->tipo;
    	$platillo->precio = $request->precio;
    	$platillo->imagen = $request->imagen; 
    	$platillo->save();
    	return view('Welcome');
    }
}
