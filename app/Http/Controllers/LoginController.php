<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use App\Http\Requests;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    
    public function getLogin() {
        return view('login');
    }
    public function postLogin(Request $request) {
        $rules = [
            'Email' =>'required|Email',
            'password' => 'required|min:6'
        ];
        $messages = [
            'Email.required' => 'Email là trường bắt buộc',
            'Email.Email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
        ];
        $remember = $request->has('remember') ? true : false;

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }else{
            $Email['Email'] = $request->input('Email');
            $password['password'] = $request->input('password');
            if( Auth::attempt(['Email' => $Email['Email'], 'password' =>$password['password']],$remember)) {
                return redirect()->intended('/');
            } else {
                $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
               // return redirect()->back();
            }

        }
    }

    public function getLogoutAdmin()
    {
        Auth::logout();
        return redirect('login');
    }
}