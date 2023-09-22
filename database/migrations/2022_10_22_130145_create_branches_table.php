<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name', 355);
            $table->string('tel', 15);
            $table->string('hotline', 15);
            $table->string('delivery_phone_number', 15);

            $table->integer('branch_location_id')->unsigned();
            $table->foreign('branch_location_id')
                ->references('id')
                ->on('branch_locations')
                ->onDelete('cascade');

            $table->string('delivery_housenumber_street', 355);
            $table->bigInteger('delivery_ward_id')->unsigned();
            $table->foreign('delivery_ward_id')
                ->references('id')
                ->on('wards')
                ->onDelete('cascade');

            $table->string('housenumber_street', 355);
            $table->bigInteger('ward_id')->unsigned();
            $table->foreign('ward_id')
                ->references('id')
                ->on('wards')
                ->onDelete('cascade');

            $table->longText('map', 255);
            $table->string('map_url', 255);

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
        Schema::dropIfExists('branches');
    }
}