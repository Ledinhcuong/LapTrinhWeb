<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\MessageBag;

use Validator;
use Illuminate\Support\Facades\Auth;
use Session;
use App\users;

class RegisterController extends Controller
{
	//
	public function getRegister() 
    {
        return view('register');
    }

	public function postRegister(Request $request) {
        $this->validate($request,
        [
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email',
            //'password' => 'required|string|min:6|confirmed',
            'password' => 'required|min:6|max:32',
            're_password' => 'required|same:password'

        ],
        [
            'name.required' => 'Họ và tên là trường bắt buộc',
            'name.max' => 'Họ và tên ít nhất có 3 ký tự',
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'email.max' => 'Email không quá 255 ký tự',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
            're_password.same' => 'Xác nhận mật khẩu không đúng',
            're_password.required' => 'bạn chưa nhập lại mất khẩu',
        ]);
        $users = new users;
        $users->NameUser = $request->name;
        $users->Email = $request->email;
        $users->password = bcrypt($request->password);
        $users->TypeUser = 0;
        $users -> save();

        return redirect('/')->with('','dk thanh cong');
    }
		
}
