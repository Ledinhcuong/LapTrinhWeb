<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\users;
use Illuminate\Support\MessageBag;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
	//
	public function getLogin(){
		return view('login');
	}

	public function postLogin(Request $request){

		$users = new users;
		$rules = [
    		'email' =>'required|email',
    		'password' => 'required|min:6'
    	];
    	$messages = [
    		'email.required' => 'Email là trường bắt buộc',
    		'email.email' => 'Email không đúng định dạng',
    		'password.required' => 'Mật khẩu là trường bắt buộc',
    		'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
    	];
    	$validator = Validator::make($request->all(), $rules, $messages);

    	if ($validator->fails()) {
    		return redirect('login')->withErrors($validator)->withInput();
    	} else {
    		$Email = $request->input('email');
    		$password = $request->input('password');

    		if( Auth::attempt(['email' => $Email, 'password' => $password])) {
    			return redirect()->intended('/');
    		} else {
    			$errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
    			return redirect()->back()->withInput()->withErrors($errors);
    		}
    	}
	}
}
