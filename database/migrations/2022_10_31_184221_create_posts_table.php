<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 355);
            // $table->text('description');
            $table->datetime('created_date');
            $table->longText('content');

            // $table->string('banner_1', 355);
            // $table->string('banner_2', 355);
            // $table->string('banner_3', 355);
            // $table->string('banner_4', 355);
            // $table->string('banner_5', 355);
            // $table->string('banner_6', 355);
            // $table->string('banner_7', 355);

            // $table->text('description_1');
            // $table->text('description_2');
            // $table->text('description_3');
            // $table->text('description_4');
            // $table->text('description_5');

            $table->string('featured_image', 355);
            $table->tinyInteger('featured')->comment("1. featured, 0. is not featured");
            $table->string('slug', 355);

            $table->longText('title_seo', 255)->nullable();
            $table->longText('meta_des', 255)->nullable();
            $table->longText('meta_key', 255)->nullable();

            $table->integer('blog_id')->unsigned()->nullable();
            $table->foreign('blog_id')
                ->references('id')
                ->on('blogs');

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
        Schema::dropIfExists('posts');
    }
}