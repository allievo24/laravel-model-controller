<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
  public function index(){
    return view('Homepage');
  }
  public function listafilm(){
    return view('Listafilm');
  }
    
}
