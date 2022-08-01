<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'user_id', 'code', 'value', 'start_time', 'end_time', 'status'];
    public function getStatusAttribute($value)
    {
        $couponStatus = null;
        switch ($value) {
            case config('custom.coupon_status.active'):
                $couponStatus = __('active');
                break;
            case config('custom.coupon_status.inactive'):
                $couponStatus = __('inactive');
                break;
            default:
                $couponStatus = __('active');
                break;
        }

        return $couponStatus;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
