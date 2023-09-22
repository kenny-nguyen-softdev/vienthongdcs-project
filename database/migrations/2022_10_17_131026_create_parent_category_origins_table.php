<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentCategoryOriginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_category_origins', function (Blueprint $table) {
            $table->integer('parent_category_id')->unsigned();
            $table->foreign('parent_category_id')
                ->references('id')
                ->on('parent_categories')
                ->onDelete('cascade');

            $table->integer('origin_id')->unsigned();
            $table->foreign('origin_id')
                ->references('id')
                ->on('origins')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parent_category_origins');
    }
}