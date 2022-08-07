<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnTypeNullableToBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->integer('coupon_id')->nullable()->change();
            $table->integer('sub_price')->nullable()->change();
            $table->integer('total_price')->nullable()->change();
            $table->date('departure_date')->nullable()->change();
            $table->date('arrival_date')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('bookings', function (Blueprint $table) {
            //
        });
    }
}
