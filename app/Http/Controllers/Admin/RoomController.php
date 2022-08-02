<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RoomController extends Controller
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
        $this->v['title'] = __('List Room');
        $this->v['rooms'] = Room::with('category')->orderByDesc('created_at')->paginate(10);

        return view('admin.room.index', $this->v);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->v['title'] = __('Add Room');
        $this->v['categorys'] = Category::where('status', config('custom.category_status.active'))->get();
        return view('admin.room.add', $this->v);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Room();
        $data = [];
        $data = $request->all();
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('image/room/'), $filename);
            $data['image'] = $filename;
        } else {
            $data['image'] = "default.png";
        }
        $data['status'] = $request->status ? config('custom.room_status.active') : config('custom.room_status.inactive');

        $res = $model->create($data);
        if ($res) {
            Session::flash('success', 'Thêm mới thành công');
        } else {
            Session::flash('error', 'Thêm mới thất bại');
        }
        return redirect()->route('admin.room.index');
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
        $this->v['title'] = 'Edit Room';
        $room = Room::find($id);
        $this->v['categorys'] = Category::where('status', config('custom.category_status.active'))->get();
        $this->v['room'] = $room;

        return view('admin.room.edit', $this->v);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Room::find($id);
        $data = $request->all();
        $data['status'] = $request->status ? config('custom.room_status.active') : config('custom.room_status.inactive');
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('image/room/'), $filename);
            $data['image'] = $filename;
            $res = $model->update($data);
            if ($res) {
                Session::flash('success', 'Sửa thành công');
            } else {
                Session::flash('error', 'Sửa thất bại');
            }

            return  redirect()->route('admin.room.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Room::destroy($id);
        if ($res) {
            Session::flash('success', 'Xoa thành công');
        } else {
            Session::flash('error', 'Xoa thất bại');
        }
        return redirect()->route('admin.room.index');
    }
}
