<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    protected $v;
    public function __construct()
    {
        $this->v = [];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objCate = Category::orderByDesc('created_at')->paginate(10);
        $this->v['lists'] = $objCate;
        $this->v['title'] = 'List category';

        return view('admin.category.index', $this->v);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->v['title'] = 'Add category';
        return view('admin.category.add', $this->v);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $model = new Category();
        $data = [];
        $data['status'] = $request->status ? config('custom.category_status.active') : config('custom.category_status.inactive');
        $data['name'] = $request->name;
        $res = $model->create($data);
        if ($res) {
            Session::flash('success', 'Thêm mới thành công');
        } else {
            Session::flash('error', 'Thêm mới thất bại');
        }
        return redirect()->route('admin.category.index');
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
        $this->v['title'] = 'Edit Category';
        $cate = Category::find($id);
        $this->v['item'] = $cate;
        return view('admin.category.edit', $this->v);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {

        $model = Category::find($id);
        $data = [];
        $data['status'] = $request->status ? config('custom.category_status.active') : config('custom.category_status.inactive');
        $data['name'] = $request->name;
        $res = $model->update($data);
        if ($res) {
            Session::flash('success', 'Sua thành công');
        } else {
            Session::flash('error', 'Sua thất bại');
        }
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Category::destroy($id);
        if ($res) {
            Session::flash('success', 'Xoa thành công');
        } else {
            Session::flash('error', 'Xoa thất bại');
        }
        return redirect()->route('admin.category.index');
    }
}
