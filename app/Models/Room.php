<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'price', 'description', 'status', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getStatusAttribute($value)
    {
        $userStatus = null;
        switch ($value) {
            case config('custom.room_status.active'):
                $userStatus = __('active');
                break;
            case config('custom.room_status.inactive'):
                $userStatus = __('inactive');
                break;
            default:
                $userStatus = __('active');
                break;
        }

        return $userStatus;
    }
    public function getListRoomBySearch($params)
    {
        $data = Room::where('id', '!=', function ($query) use ($params) {
            $query->select('id')->from('bookings')
                ->where('arrival_date', '>', $params['checkin'])
                ->where('departure_date', '<', $params['checkout'])->get();
        })->where('category_id', $params['category_id'])->paginate(4);
        return $data;
    }
}
