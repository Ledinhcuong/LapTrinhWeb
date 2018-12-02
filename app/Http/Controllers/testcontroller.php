<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class testcontroller extends Controller
{

    public function check(Request $request)
    {
    	$data=[
    		'email'=>$request->email,
    		'password'=>$request->password,
        ];
     
        
    	if(Auth::attempt($data)){
            Session::put('user', Auth::user());
    		return "yes";
    	}else{
    		return "no";
    	}
    }

}
