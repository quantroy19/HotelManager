<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Category extends Model
{
    use HasFactory;
    // protected $table = 'categories';
    protected $fillable = ['name', 'status'];
    // public function loadList($params = [])
    // {
    //     $query = DB::table($this->table)
    //         ->select($this->fillable);
    //     $lists = $query->paginate(10);
    //     return $lists;
    // }
    // public function saveNew($params)
    // {
    //     $res = DB::table($this->table)->insertGetId($params);
    //     return $res;
    // }
    public function getStatusAttribute($value)
    {
        $cateStatus = null;
        switch ($value) {
            case config('custom.category_status.active'):
                $cateStatus = __('active');
                break;
            case config('custom.category_status.inactive'):
                $cateStatus = __('inactive');
                break;
            default:
                $cateStatus = __('active');
                break;
        }

        return $cateStatus;
    }
}
