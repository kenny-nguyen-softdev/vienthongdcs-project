<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_ingredients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 355);
            $table->string('featured_image', 355);
            $table->text('description');
            $table->string('color', 355);
            $table->integer('sort_by');
            $table->tinyInteger('active')->comment("1. active, 2. inactive");

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
        Schema::dropIfExists('main_ingredients');
    }
}