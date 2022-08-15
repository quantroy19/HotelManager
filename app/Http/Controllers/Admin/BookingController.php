<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Booking;
use App\Models\Room;
use Carbon\Carbon;
use DateInterval;
use DatePeriod;
use DateTime;
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
    public function createBookingById($id)
    {
        $this->v['room'] = Room::findorFail($id);
        $this->v['title'] = __('Booking');
        $bookings = Booking::where('room_id', $id)->where('status', config('custom.status_booking.unpaid'))->get();
        $arrDate = [];
        foreach ($bookings as $booking) {
            $end = new DateTime($booking->arrival_date);
            $begin = new DateTime($booking->departure_date);
            $end = $end->modify('+1 day');
            $interval = new DateInterval('P1D');
            $daterange = new DatePeriod($begin, $interval, $end);
            $arrDay = [];
            foreach ($daterange as $date) {
                array_push($arrDay, $date->format("d-m-Y"));
            }
            array_push($arrDate, $arrDay);
        }

        $arrDate = array_merge([], ...$arrDate);
        // dd($arrDate);
        $this->v['arrDate'] = $arrDate;
        return view('admin.booking.add', $this->v);
    }

    public function showListRoom()
    {
        $this->v['title'] = __('List room');
        $this->v['rooms'] = Room::where('status', config('custom.room_status.active'))->get();

        return view('admin.booking.list-room', $this->v);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookingRequest $request)
    {
        $model = new Booking();
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['departure_date'] = (new Carbon($request->departure_date))->toDateString();
        $data['arrival_date'] = (new Carbon($request->arrival_date))->toDateString();
        $data['status'] = config('custom.status_booking.unpaid');
        $data['infomation'] = '';

        $bookedDate = $this->getBookedDate($request->room_id);

        $begin = new DateTime($request->departure_date);
        $end = new DateTime($request->arrival_date);
        $end = $end->modify('+1 day');
        $interval = new DateInterval('P1D');
        $daterange = new DatePeriod($begin, $interval, $end);
        $arrDay = [];
        foreach ($daterange as $date) {
            array_push($arrDay, $date->format("d-m-Y"));
        }

        $checkBookable = array_intersect($arrDay, $bookedDate);

        if ($checkBookable) {
            Session::flash('error', 'Phòng đã được đặt vào thời gian này');

            return redirect()->back();
        } else {
            $res =  $model->create($data);

            if ($res) {
                Session::flash('success', 'Booking thành công');
            } else {
                Session::flash('error', 'Booking thất bại');
            }
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->v['title'] = 'Edit Booking';
        $booking = Booking::find($id);
        $this->v['item'] = $booking;
        $this->v['id'] = $id;
        $this->v['rooms'] = Room::where('status', config('custom.room_status.active'))->get();
        return view('admin.booking.edit', $this->v);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookingRequest $request, $id)
    {
        $model = Booking::find($id);
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['departure_date'] = (new Carbon($request->departure_date))->toDateString();
        $data['arrival_date'] = (new Carbon($request->arrival_date))->toDateString();
        $data['status'] = config('custom.status_booking.unpaid');
        $data['infomation'] = '';

        $departure_date =  Carbon::parse($request->departure_date)->format('d-m-Y');
        $arrival_date =  Carbon::parse($request->arrival_date)->format('d-m-Y');
        $bookedDate =  $this->getBookedDate($request->room_id);

        // dd($departure_date, $arrival_date, $bookedDate);
        if (in_array($departure_date, $bookedDate) || in_array($arrival_date, $bookedDate)) {
            Session::flash('error', 'Phòng đã được đặt vào thời gian này');

            return redirect()->back();
        } else {
            $res = $model->update($data);

            if ($res) {
                Session::flash('success', 'Sửa mới thành công');
            } else {
                Session::flash('error', 'Sửa mới thất bại');
            }
            return redirect()->route('admin.booking.index');
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
        if (Booking::find($id)) {
            $res = Booking::destroy($id);
            if ($res) {
                Session::flash('success', 'Xoa thành công');
            } else {
                Session::flash('error', 'Xoa thất bại');
            }
        } else {
            Session::flash('error', 'Khong ton tai trong database');
        }

        return redirect()->route('admin.booking.index');
    }

    public function getBookedDate($id)
    {
        $bookings = Booking::where('room_id', $id)->where('status', config('custom.status_booking.unpaid'))->get();
        $arrDate = [];
        foreach ($bookings as $booking) {
            $begin = new DateTime($booking->departure_date);
            $end = new DateTime($booking->arrival_date);
            $end = $end->modify('+1 day');
            $interval = new DateInterval('P1D');
            $daterange = new DatePeriod($begin, $interval, $end);
            $arrDay = [];
            foreach ($daterange as $date) {
                array_push($arrDay, $date->format("d-m-Y"));
            }
            array_push($arrDate, $arrDay);
        }
        $arrDate = array_merge([], ...$arrDate);

        return $arrDate;
    }
}
