<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movie;

class Homecontroller extends Controller
{
  public function index(){
    return view('Homepage');
  }
 
  public function listafilm(){
    $Movies= Movie::all();
   
    return view('Listafilm',['Movies' => $Movies]);
  }
    
}
