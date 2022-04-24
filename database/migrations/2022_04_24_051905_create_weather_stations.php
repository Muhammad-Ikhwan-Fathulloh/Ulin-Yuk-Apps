<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherStations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather_stations', function (Blueprint $table) {
            $table->id('weather_station_id');
            $table->bigInteger('destination_place_id')->unsigned()->nullable();
            $table->string('temperature', 50)->nullable();
            $table->string('humidity', 50)->nullable();
            $table->string('light', 50)->nullable();
            $table->timestamps();

            $table->foreign('destination_place_id')
                ->references('destination_place_id')
                ->on('destination_places')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weather_stations');
    }
}
