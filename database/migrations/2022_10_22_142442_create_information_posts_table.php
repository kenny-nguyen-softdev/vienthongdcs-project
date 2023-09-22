<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 355);
            $table->datetime('created_date');
            $table->longText('content');

            $table->integer('information_blog_id')->unsigned();
            $table->foreign('information_blog_id')
                ->references('id')
                ->on('information_blogs');

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
        Schema::dropIfExists('information_posts');
    }
}