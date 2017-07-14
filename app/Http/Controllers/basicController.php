<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class basicController extends Controller
{
    public function index(){
    
    	return view('contact');

    }

    public function reg_index(){
    
    	return view('registration');

    }

    public function index1(){
    
    	return view('home');

    }
    public function index11(){
    
    	return view('login');

    }

        public function index111(){
    
        return view('welcome');

    }

    public function postSignUp(Request $request){
        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user = email = $email;
        $user = first_name = $first_name;
        $user = password = $password;

        $user->save();

        return redirect()->back();
    }

    public function postSignIn(Request $request){
       
    }
}
