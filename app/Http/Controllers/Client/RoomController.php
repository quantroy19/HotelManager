<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Room;
use Illuminate\Http\Request;
use DateInterval;
use DatePeriod;
use DateTime;

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
        $this->v['room'] = Room::find($id);
        $bookings = Booking::where('room_id', $id)->where('status', config('custom.status_booking.unpaid'))->get();
        $arrDate = [];
        foreach ($bookings as $booking) {
            $begin = new DateTime($booking->arrival_date);
            $end = new DateTime($booking->departure_date);
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
}
