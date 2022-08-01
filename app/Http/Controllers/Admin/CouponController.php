<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CouponRequest;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CouponController extends Controller
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
        $this->v['title'] = "List coupon";
        $this->v['lists'] = Coupon::orderByDesc('created_at')->paginate(10);
        return view('admin.coupon.index', $this->v);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->v['title'] = "Add coupon";
        return view('admin.coupon.add', $this->v);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CouponRequest $request)
    {
        $model = new Coupon();
        $data = [];
        $data = $request->post();
        $data['user_id'] = Auth::user()->id;
        $data['status'] = $request->status ? config('custom.coupon_status.active') : config('custom.coupon_status.inactive');
        $res = $model->create($data);
        if ($res) {
            Session::flash('success', "Them moi thanh cong");
        } else {
            Session::flash('error', 'Them moi that bai');
        }
        return redirect()->route('admin.coupon.index');
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
        $this->v['title'] = "Edit coupon";
        $this->v['item'] = Coupon::find($id);
        return view('admin.coupon.edit', $this->v);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CouponRequest $request, $id)
    {
        $model = Coupon::find($id);
        $data = [];
        $data = $request->post();
        $data['status'] = $request->status ? config('custom.coupon_status.active') : config('custom.coupon_status.inactive');
        $res = $model->update($data);
        if ($res) {
            Session::flash('success', "Them moi thanh cong");
        } else {
            Session::flash('error', 'Them moi that bai');
        }
        return redirect()->route('admin.coupon.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Coupon::find($id);
        if ($res) {
            Coupon::destroy($id);
            Session::flash('success', "Xoa thanh cong");
        } else {
            Session::flash('error', 'Yeu cau khong ton tai');
        }
        return redirect()->route('admin.coupon.index');
    }
}
