<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeColumnInAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->string('banner_1', 355);
            $table->string('banner_2', 355);
            $table->string('banner_3', 355);
            $table->string('banner_4', 355);
            $table->string('banner_5', 355);
            $table->string('banner_6', 355);
            $table->string('banner_7', 355);

            $table->text('description_1');
            $table->text('description_2');
            $table->text('description_3');
            $table->text('description_4');
            $table->text('description_5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abouts', function (Blueprint $table) {
            //
        });
    }
}