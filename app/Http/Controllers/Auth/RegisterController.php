<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    protected $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function index()
    {
        $this->v['title'] = "Register";
        return view('Auth.register', $this->v);
    }
    public function add(RegisterRequest $request)
    {
        $validater = Validator::make($request->all());
        if ($validater->fails()) {
            return redirect('register')->withErrors($validater)->withInput();
        } else {
            $params = [];
            $params['cols'] = $request->post();
            unset($params['cols']['_token']);
            unset($params['cols']['re-password']);
            User::register($params['cols']);
            Session::flash('success', 'Dang ky thanh cong');
            return redirect('login');
        }
    }
}
