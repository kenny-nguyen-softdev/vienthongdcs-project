<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 355);
            $table->tinyInteger('is_active_home')->comment("1. active, 2. inactive");
            $table->tinyInteger('is_active')->comment("1. active, 2. inactive");
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
        Schema::dropIfExists('information_blogs');
    }
}