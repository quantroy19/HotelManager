<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [

                'name' => 'AdminQuan',
                'email' => 'adminQ@gmail.com',
                'password' => Hash::make('123123123'),
                'address' => "Hoa Lac Ha noi",
                'phone' => '0123456789',
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'role_id' => config('custom.user_roles.admin'),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
            [

                'name' => 'UserQ',
                'email' => 'user@gmail.com',
                'password' => Hash::make('123123123'),
                'phone' => '011111111',
                'address' => "Hoa Lac Ha noi",
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'role_id' => config('custom.user_roles.user'),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
        ];

        User::insert($data);
    }
}
