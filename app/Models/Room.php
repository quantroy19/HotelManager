<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
