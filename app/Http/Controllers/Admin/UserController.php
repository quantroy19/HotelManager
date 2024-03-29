<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
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
        $this->v['lists'] = User::where('role_id', config('custom.user_roles.user'))->orderByDesc('created_at')->paginate(10);

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
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['avatar'] = $this->uploadImage($request->file('image'));
        }
        $data['status'] = $request->status ? config('custom.user_status.active') : config('custom.user_status.block');
        $data['password'] = Hash::make($request->password);
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
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['avatar'] = $this->uploadImage($request->file('image'));
        }
        $data['status'] = $request->status ? config('custom.user_status.active') : config('custom.user_status.block');
        $data['password'] = Hash::make($request->password);
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
    public function uploadImage($file)
    {
        $fileName = time() . $file->getClientOriginalName();
        return $file->storeAs('userImage', $fileName, 'public');
    }
}
