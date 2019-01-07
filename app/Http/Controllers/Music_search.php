<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class Music_search extends Controller
{
   

	public  function index($nombre,$apellido){


	 			return view('index',['toto'=>$nombre]);
	}


}