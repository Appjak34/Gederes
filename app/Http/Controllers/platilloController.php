<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\platillo;

class platilloController extends Controller
{
    public function store(Request $request){ //Función STORE, inserta un registro en la base de datos
    	//dd($request);
    	$platillo = new platillo;
    	$platillo->nombrePlatillo = $request->nombrePlatillo;
    	$platillo->descripcion = $request->descripcion;
    	$platillo->tipo = $request->tipo;
    	$platillo->precio = $request->precio;
    	$platillo->imagen = $request->imagen;
    	$platillo->save();
        $platillo = platillo::all();
    	return view('Paginas/menu')->with('platillos',$platillo);
    }
    public function update(Request $request){ //Función UPDATE, actualiza un registro en la base de datos
    	//dd($request);
    	$platillo = platillo::find($request->nombrePlatillo);
    //	$platillo::find(1);
    	$platillo->descripcion = $request->descripcion;
    	$platillo->tipo = $request->tipo;
    	$platillo->precio = $request->precio;
    	$platillo->imagen = $request->imagen; 
    	$platillo->save();
        $platillo = platillo::all();
    	return view('Paginas/menu')->with('platillos',$platillo);
    }
    public function delete(Request $request){ //Función DELETE, elimina un campo de la base de datos
    	$platillo = platillo::find($request->nombrePlatillo);
    	$platillo->delete();
        $platillo = platillo::all();
    	return view('Paginas/menu')->with('platillos',$platillo);
    }
    public function menu(){
        $platillo = platillo::all();
        //$nombre = $platillo->nombrePlatillo;
        return view('Paginas/menu')->with('platillos',$platillo);
    }
    public function showdelete(){
        $platillo = platillo::all();
        return view('Paginas/eliminarPlatillo')->with('platillos',$platillo);
    }
}
