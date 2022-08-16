<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function getDashboard()
    {
        $this->v['title'] = "Dashboard";
        $this->v['countUser'] = User::where('role_id', config('custom.user_roles.user'))->get()->count();
        $this->v['countRoom'] = Room::where('status', config('custom.room_status.active'))->get()->count();
        $this->v['countBooking'] = Booking::get()->count();
        return view('admin.dashboard', $this->v);
    }
}
