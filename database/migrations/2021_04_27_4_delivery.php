<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Delivery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery', function (Blueprint $table) {
            $table->bigIncrements('delivery_id');
            $table->foreignId('driver_id')->constrained('driver')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('product')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('vehicle_id')->constrained('vehicle')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('delivery_type');
            $table->string('pickup_location');
            $table->string('destination_location');
            $table->dateTime('date_pickup');
            $table->float('fuel_consumption');
            $table->integer('cost');
            // $table->integer('cost');
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
