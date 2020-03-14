<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVechileGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vechile_galleries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('photos');
            $table->unsignedBigInteger('vehicles_id');
            $table->foreign('vehicles_id')->references('id')->on('vehicles')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('vechile_galleries');
    }
}
