<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class mainController extends Controller
{
    public function home(){
    
    	return view('index');

    }
   
   //shopping cart operation start from here
   public function mainMethod(){
   	return view('shop.main');
   }
   

}
