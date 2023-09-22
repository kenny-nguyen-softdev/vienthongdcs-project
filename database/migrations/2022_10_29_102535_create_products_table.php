<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name', 255);
            $table->string('function', 255);
            $table->longText('description', 255);
            $table->datetime('created_date');

            $table->bigInteger('price')->nullable();
            $table->bigInteger('sale_price')->nullable();

            $table->string('featured_image', 355);
            $table->string('video', 355);

            $table->longText('detail_information', 255)->nullable();
            $table->longText('using_tutorials', 255)->nullable();

            $table->tinyInteger('featured')->comment("1. nổi bật");

            $table->tinyInteger('sort_by');

            $table->tinyInteger('is_active')->comment("1. active, 2. inactive");
            $table->tinyInteger('is_active_menu')->comment("1. active, 2. inactive");

            $table->string('slug', 255);

            $table->longText('title_seo', 255)->nullable();
            $table->longText('meta_des', 255)->nullable();
            $table->longText('meta_key', 255)->nullable();

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
        Schema::dropIfExists('products');
    }
}
