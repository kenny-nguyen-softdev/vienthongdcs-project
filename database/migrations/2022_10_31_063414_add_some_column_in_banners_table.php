<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeColumnInBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->string('long_image_mobile', 355);
            $table->string('short_image_1_mobile', 355);
            $table->string('short_image_2_mobile', 355);
            $table->string('long_image_url_mobile', 355);
            $table->string('short_image_1_url_mobile', 355);
            $table->string('short_image_2_url_mobile', 355);
            $table->tinyInteger('active_long_banner_mobile')->comment("1. active, 0. inactive");
            $table->tinyInteger('active_short_banner_mobile')->comment("1. active, 0. inactive");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banners', function (Blueprint $table) {
            //
        });
    }
}