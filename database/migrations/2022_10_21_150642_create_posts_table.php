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
            $table->string('author', 355);
            $table->text('description');
            $table->longText('content');
            $table->string('featured_image', 355);
            $table->dateTime('created_date');
            $table->string('slug', 355);

            $table->integer('blog_id')->unsigned();
            $table->foreign('blog_id')
                ->references('id')
                ->on('blogs');

            $table->integer('parent_category_id')->unsigned();
            $table->foreign('parent_category_id')
                ->references('id')
                ->on('parent_categories');

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