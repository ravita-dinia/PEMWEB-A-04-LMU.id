<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class HomeController extends Controller
// {
//     public function index()
//     { 
//     	return view('template');
//     }
// }

class HomeController extends Controller 
{ 
	// public function __construct () 
	// {
	//  	$this -> middleware ( 'auth' );
	// } 

	public function index ()
	{ 
	 	return view ('login'); 
	} 
	public function tes(){
		return view('login');
	}
} 