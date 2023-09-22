<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeaderPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 355);
            $table->datetime('created_date');
            $table->longText('content');
            $table->tinyInteger('sort_by');
            $table->string('icon_code', 355);

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
        Schema::dropIfExists('header_posts');
    }
}