<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tracking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracking', function (Blueprint $table) {
            $table->bigIncrements('tracking_id');
            $table->unsignedBigInteger('delivery_id');
            $table->foreign('delivery_id')->references('delivery_id')->on('delivery')->cascadeOnUpdate()->cascadeOnDelete();
            $table->float('temperature');
            $table->float('distance_from_destination');
            $table->dateTime('estimate_arrival_date');
            $table->float('fuel_capacity');
            $table->float('fuel_consumption');
            $table->string('speed_avg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
