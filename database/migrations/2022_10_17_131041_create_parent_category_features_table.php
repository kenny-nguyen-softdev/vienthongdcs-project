<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentCategoryFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_category_features', function (Blueprint $table) {
            $table->integer('parent_category_id')->unsigned();
            $table->foreign('parent_category_id')
                ->references('id')
                ->on('parent_categories')
                ->onDelete('cascade');

            $table->integer('feature_id')->unsigned();
            $table->foreign('feature_id')
                ->references('id')
                ->on('features')
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
        Schema::dropIfExists('parent_category_features');
    }
}