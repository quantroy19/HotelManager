<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function formLogin()
    {
        return view('Auth.login');
    }
    public function postLogin(LoginRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('/');
        } else {
            Session::flash('error', 'email hoặc mật khẩu không đúng');
            return redirect('login')->withInput();
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
