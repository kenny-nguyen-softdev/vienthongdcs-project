<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('long_image', 355);
            $table->string('short_image_1', 355);
            $table->string('short_image_2', 355);
            $table->string('long_image_url', 355);
            $table->string('short_image_1_url', 355);
            $table->string('short_image_2_url', 355);
            $table->tinyInteger('active_long_banner')->comment("1. active, 0. inactive");
            $table->tinyInteger('active_short_banner')->comment("1. active, 0. inactive");
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
        Schema::dropIfExists('banners');
    }
}