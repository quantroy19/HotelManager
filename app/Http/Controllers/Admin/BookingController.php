<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
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
        $this->v['title'] = "List booking";
        $this->v['lists'] = Booking::orderByDesc('created_at')->paginate(10);
        return view('admin.booking.index', $this->v);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->v['title'] = __('Booking');
        $this->v['rooms'] = Room::where('status', config('custom.room_status.active'))->get();

        return view('admin.booking.add', $this->v);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Booking();
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['departure_date'] = (new Carbon($request->dparture_date))->toDateString();
        $data['arrival_date'] = (new Carbon($request->arrival_date))->toDateString();
        $res =  $model->create($data);

        if ($res) {
            Session::flash('success', 'Thêm mới thành công');
        } else {
            Session::flash('error', 'Thêm mới thất bại');
        }
        return redirect()->route('admin.booking.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
