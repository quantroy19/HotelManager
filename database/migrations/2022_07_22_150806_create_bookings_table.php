<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('room_id');
            $table->integer('user_id');
            $table->integer('coupon_id');
            $table->timestamp('departure_date')->nullable();
            $table->timestamp('arrival_date')->nullable();
            $table->string('infomation');
            $table->integer('sub_price');
            $table->integer('total_price');
            $table->enum('status', [0, 1, 2])->default(0)->comment('0: cancel, 1: unpaid, 2: paid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
