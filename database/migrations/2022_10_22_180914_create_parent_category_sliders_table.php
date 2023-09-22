<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentCategorySlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_category_sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('url', 255);
            $table->string('thumb', 355);
            $table->tinyInteger('sort_by');
            $table->string('active', 255);
            $table->string('title', 255);
            $table->string('description', 355);
            $table->string('button_name', 255);

            $table->integer('parent_category_id')->unsigned();
            $table->foreign('parent_category_id')
                ->references('id')
                ->on('parent_categories')
                ->onDelete('cascade');

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
        Schema::dropIfExists('parent_category_sliders');
    }
}