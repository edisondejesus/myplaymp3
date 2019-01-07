<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class Music_search extends Controller
{
   

	public  function index(){

			$nombre = "EDISON";
	 			return view('index',['toto'=>$nombre]);
	}


}