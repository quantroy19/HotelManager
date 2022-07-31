<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BannerController extends Controller
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
        $this->v['title'] = "List banner";
        $this->v['lists'] = Banner::orderByDesc('created_at')->paginate(10);
        return view('admin.banner.index', $this->v);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->v['title'] = "Add banner";
        return view('admin.banner.add', $this->v);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {
        $model = new Banner();
        $user_id = Auth::user()->id;
        $data = [];
        $data = $request->post();
        $data['user_id'] = $user_id;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('image/banner/'), $filename);
            $data['image'] = $filename;
        }
        $data['status'] = $request->status ? config('custom.banner_status.active') : config('custom.banner_status.inactive');
        // dd($data);
        $res = $model->create($data);
        if ($res) {
            Session::flash('success', 'Thêm mới thành công');
        } else {
            Session::flash('error', 'Thêm mới thất bại');
        }
        return redirect()->route('admin.banner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->v['title'] = "Edit banner";
        $this->v['item'] = Banner::find($id);
        return view('admin.banner.edit', $this->v);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerRequest $request, $id)
    {
        $model = Banner::find($id);
        $user_id = Auth::user()->id;
        $data = [];
        $data = $request->post();
        $data['user_id'] = $user_id;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('image/banner/'), $filename);
            $data['image'] = $filename;
        } else {
            $data['image'] = $data['image_old'];
        }
        $data['status'] = $request->status ? config('custom.banner_status.active') : config('custom.banner_status.inactive');
        $res = $model->update($data);
        if ($res) {
            Session::flash('success', 'Sua thành công');
        } else {
            Session::flash('error', 'Sua thất bại');
        }
        return redirect()->route('admin.banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Banner::find($id)) {
            $res = Banner::destroy($id);
            if ($res) {
                Session::flash('success', 'Xoa thành công');
            } else {
                Session::flash('error', 'Xoa thất bại');
            }
            return redirect()->route('admin.banner.index');
        } else {
            Session::flash('error', 'Khong ton tai trong database');
            return redirect()->route('admin.banner.index');
        }
    }
}
