<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navbarController extends Controller
{
    public function welcome(){
    	return view('welcome');
    }

    public function login(){
    	return view('Paginas/log-in');
    }

	public function menu(){
    	return view('Paginas/menu');
    }
}
