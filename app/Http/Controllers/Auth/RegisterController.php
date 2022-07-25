<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
        return view('register', $this->v);
    }
    public function add(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:10|max:11',
            'address' => 'required|min:6',
            'password' => 'required|min:8',
            're-password' => 'required|same:password'
        ];
        $messages = [
            'name.required' => 'Mời bạn nhập ten',
            'email.required' => 'Mời bạn nhập email',
            'email.email' => 'Mời bạn nhập đúng định dạng email',
            'phone.required' => 'Mời bạn nhập so dien thoai',
            'phone.max' => 'So dien thoai khong hop le',
            'phone.min' => 'o dien thoai khong hop le',
            'address.required' => 'Mời bạn nhập dia chi',
            'password.required' => 'Mời bạn nhập password',
            'password.min' => 'Password khong du kys tu',
            're-password.required' => 'Mời bạn nhập xác nhận mật khau',
            're-password.same' => 'Mat khau khong khop'

        ];
        $validater = Validator::make($request->all(), $rules, $messages);
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
