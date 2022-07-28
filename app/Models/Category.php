<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['id', 'name', 'status'];
    public function loadList($params = [])
    {
        $query = DB::table($this->table)
            ->select($this->fillable);
        $lists = $query->paginate(10);
        return $lists;
    }
    public function saveNew($params)
    {
        $res = DB::table($this->table)->insertGetId($params);
        return $res;
    }
}
