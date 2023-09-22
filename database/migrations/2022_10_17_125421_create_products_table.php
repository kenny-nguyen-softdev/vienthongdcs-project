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
            $table->string('barcode', 255)->nullable();
            $table->string('model', 150)->nullable();
            $table->string('name', 355);
            $table->string('insurance', 255);
            $table->datetime('created_date');

            $table->longText('description', 255);

            $table->bigInteger('price')->nullable();
            $table->bigInteger('sale_price')->nullable();

            $table->string('hover_featured_image', 355);
            $table->string('featured_image', 355);

            $table->integer('inventory_qty');

            $table->longText('description_detail', 255)->nullable();
            $table->longText('technical_statistics', 255)->nullable();

            $table->float('star')->nullable();
            $table->tinyInteger('featured')->comment("1. nổi bật");

            $table->tinyInteger('is_active')->comment("1. active, 2. inactive");

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                ->references('id')
                ->on('second_sub_categories');

            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')
                ->references('id')
                ->on('brands');

            $table->string('slug', 355);

            $table->integer('origin_id')->unsigned()->nullable();
            $table->foreign('origin_id')
                ->references('id')
                ->on('origins')
                ->onDelete('cascade');

            $table->integer('configuration_id')->unsigned()->nullable();
            $table->foreign('configuration_id')
                ->references('id')
                ->on('configurations')
                ->onDelete('cascade');

            $table->integer('feature_id')->unsigned()->nullable();
            $table->foreign('feature_id')
                ->references('id')
                ->on('features')
                ->onDelete('cascade');

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