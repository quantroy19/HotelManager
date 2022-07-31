<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'image',
        'link',
        'status'
    ];
    public function getStatusAttribute($value)
    {
        $bannerStatus = null;
        switch ($value) {
            case config('custom.banner_status.active'):
                $bannerStatus = __('active');
                break;
            case config('custom.banner_status.inactive'):
                $bannerStatus = __('block');
                break;
            default:
                $bannerStatus = __('active');
                break;
        }

        return $bannerStatus;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
