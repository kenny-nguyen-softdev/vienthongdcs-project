<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecondSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('second_sub_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('slug', 355);
            $table->tinyInteger('is_active')->comment("1. active, 2. inactive");

            $table->integer('first_sub_category_id')->unsigned();
            $table->foreign('first_sub_category_id')
                ->references('id')
                ->on('first_sub_categories');

            $table->longText('title_seo', 255)->nullable();
            $table->longText('meta_des', 255)->nullable();
            $table->longText('meta_key', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('second_sub_categories');
    }
}