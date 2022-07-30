<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "users";
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'password',
        'avatar',
        'role_id',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function register($params)
    {
        $data = array_merge($params, [
            'password' => Hash::make($params['password'])
        ]);
        $res = DB::table("users")->insertGetId($data);
        return $res;
    }
    public function getStatusAttribute($value)
    {
        $userStatus = null;
        switch ($value) {
            case config('custom.user_status.active'):
                $userStatus = __('active');
                break;
            case config('custom.user_status.block'):
                $userStatus = __('block');
                break;
            default:
                $userStatus = __('active');
                break;
        }

        return $userStatus;
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
