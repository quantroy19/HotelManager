<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookingRequest;
use App\Models\Banner;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RoomController extends Controller
{
    protected $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function home()
    {
        $this->v['title'] = "Home";
        $this->v['categories'] = Category::where('status', config('custom.category_status.active'))->get();
        $this->v['banners'] = Banner::where('status', config('custom.banner_status.active'))->get();
        $this->v['rooms'] = Room::where('status', config('custom.room_status.active'))->orderByDesc('created_at')->limit(config('custom.number_limit.home'))->get();
        return view('client.home', $this->v);
    }
    public function getListRoom($params = null)
    {
        $this->v['title'] = "Room";
        $this->v['categories'] = Category::where('status', config('custom.category_status.active'))->get();
        $this->v['rooms'] = Room::where('status', config('custom.room_status.active'))->paginate(config('custom.number_paginate.room'));
        $this->v['priceMax'] = Room::all()->max('price');
        $this->v['priceMin'] = Room::all()->min('price');
        $this->v['cate_id'] = 0;
        return view('client.room', $this->v);
    }
    public function getListRoomByCate($cate_id)
    {
        $this->v['title'] = "Room";
        $this->v['categories'] = Category::where('status', config('custom.category_status.active'))->get();
        $this->v['rooms'] = Room::where('category_id', $cate_id)->where('status', config('custom.room_status.active'))->paginate(config('custom.number_paginate.room'));
        $this->v['priceMax'] = Room::all()->max('price');
        $this->v['priceMin'] = Room::all()->min('price');
        $this->v['cate_id'] = $cate_id;
        return view('client.room', $this->v);
    }
    public function getRoomDetail($id)
    {
        $this->v['title'] = "Room Detail";
        $this->v['id'] = $id;
        $this->v['room'] = Room::find($id);
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
        $this->v['arrDate'] = $arrDate;
        return view('client.room-detail', $this->v);
    }

    public function bookingRoom(StoreBookingRequest $request, $id)
    {
        $model = new Booking();
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['departure_date'] = (new Carbon($request->departure_date))->toDateString();
        $data['arrival_date'] = (new Carbon($request->arrival_date))->toDateString();
        $data['status'] = config('custom.status_booking.unpaid');
        $data['infomation'] = '';

        $bookedDate = $this->getBookedDate($id);

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
