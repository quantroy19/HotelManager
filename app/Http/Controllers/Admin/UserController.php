<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function index()
    {
        $this->v['title'] = "List user";
        $this->v['lists'] = User::where('role_id', config('custom.user_roles.user'))->paginate(10);

        return view('admin.user.index', $this->v);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->v['title'] = "Add user";
        return view('admin.user.add', $this->v);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $model = new User();
        $data = [];
        $data = $request->post();
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('image/user/'), $filename);
            $data['avatar'] = $filename;
        } else {
            $data['avatar'] = "default.png";
        }
        $data['status'] = $request->status ? config('custom.user_status.active') : config('custom.user_status.block');
        $res = $model->create($data);
        if ($res) {
            Session::flash('success', 'Thêm mới thành công');
        } else {
            Session::flash('error', 'Thêm mới thất bại');
        }
        return redirect()->route('admin.user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->v['title'] = "Edit user";
        $this->v['res'] = User::find($id);
        return view('admin.user.edit', $this->v);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $model = User::find($id);
        $data = [];
        $data = $request->post();
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('image/user/'), $filename);
            $data['avatar'] = $filename;
        } else {
            if ($data['image_old'] == null) {
                $data['avatar'] = "default.png";
            } else {
                $data['avatar'] = $data['image_old'];
            }
        }
        $data['status'] = $request->status ? config('custom.user_status.active') : config('custom.user_status.block');
        $res = $model->update($data);
        if ($res) {
            Session::flash('success', 'Sua thành công');
        } else {
            Session::flash('error', 'Sua thất bại');
        }
        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = User::destroy($id);
        if ($res) {
            Session::flash('success', 'Xoa thành công');
        } else {
            Session::flash('error', 'Xoa thất bại');
        }
        return redirect()->route('admin.user.index');
    }
}
