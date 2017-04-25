<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\platillo;

class PlatilloCont extends Controller
{
    public function menu(){
    	$platillo = platillo::all();
    	//$nombre = $platillo->nombrePlatillo;
	    return view('Paginas/menu')->with('platillos',$platillo);
    }
}