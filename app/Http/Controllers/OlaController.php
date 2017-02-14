<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OlaController extends Controller
{
    //
    public function ola() {
    	   $nome = 'António Martins Miranda';
	   return view('ola',compact('nome'));
    }
}
