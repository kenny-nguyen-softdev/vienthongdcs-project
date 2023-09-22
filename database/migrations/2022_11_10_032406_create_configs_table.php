<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('top_content', 355);
            $table->string('top_url', 355);

            $table->string('right_menu_content_1', 355);
            $table->string('right_menu_url_1', 355);
            $table->string('right_menu_content_2', 355);
            $table->string('right_menu_url_2', 355);

            $table->string('description_in_main_ingredients', 355);
            $table->string('long_description_in_main_ingredients', 355);
            $table->string('see_more_url_in_main_ingredients', 355);

            $table->string('warning_in_footer', 355);
            $table->string('title_in_home_page_1', 355);
            $table->string('icon_in_home_page_1', 355);
            $table->string('title_1_in_footer', 355);
            $table->string('title_2_in_footer', 355);
            $table->string('title_3_in_footer', 355);
            $table->string('title_4_in_footer', 355);
            $table->string('free_exchange', 355);

            $table->string('title_in_block_1', 355);
            $table->string('sub_title_1_in_block_1', 355);
            $table->string('sub_title_2_in_block_1', 355);

            $table->string('title_in_block_2', 355);
            $table->string('sub_title_1_in_block_2', 355);
            $table->string('sub_title_2_in_block_2', 355);

            $table->string('title_in_block_3', 355);
            $table->string('sub_title_1_in_block_3', 355);
            $table->string('sub_title_2_in_block_3', 355);

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
        Schema::dropIfExists('configs');
    }
}