<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsRouteSectionsTable extends Migration
{
    public function up()
    {
        Schema::create('cars_route_sections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('route_id');
            $table->string('moving_time_ru');
            $table->string('moving_time_en');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars_route_sections');
    }
}
