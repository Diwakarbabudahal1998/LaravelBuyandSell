<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('model_name');
            $table->string('number');
            $table->date('purchased_date');
            $table->string('condition');
            $table->string('vehicle_price');
            $table->enum('price_status',['fixed','negotiable']);
            $table->string('ground_clearance');
            $table->string('seat_capacity');
            $table->string('fuel_tank_capacity');
            $table->float('kilometer_run');
            $table->float('current_milage');
            $table->string('vehicle_color');
            $table->string('number_of_doors');
            $table->enum('fuel_type',['petrol','diesel']);
            $table->string('engine');
            $table->string('dimension_weight');
            $table->string('lot_number');
            $table->enum('tax_status',['Cleared','Remaining']);
            $table->enum('power_window',['yes','no'])->default('no');
            $table->enum('power_steering',['yes','no'])->default('no');
            $table->enum('central_lock',['yes','no'])->default('no');
            $table->enum('keyless_remote_entry',['yes','no'])->default('no');
            $table->enum('tubeless_tyres',['yes','no'])->default('no');
            $table->enum('air_bags',['yes','no'])->default('no');
            $table->enum('anti_lock_braking',['yes','no'])->default('no');
            $table->enum('steering_mounted_controls',['yes','no'])->default('no');
            $table->enum('electric_side_mirror',['yes','no'])->default('no');
            $table->enum('child_safety_lock',['yes','no'])->default('no');
            $table->enum('passenger_seat_adjustment',['yes','no'])->default('no');
            $table->enum('driver_seat_adjustment',['automatic','manual','no'])->default('no');
            $table->enum('ac',['automatic','manual','no'])->default('no');
            $table->string('documents');
            $table->enum('featured',['yes','no'])->default('no');
            $table->enum('status',['active','inactive'])->default('active');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('vehicles');
    }
}
