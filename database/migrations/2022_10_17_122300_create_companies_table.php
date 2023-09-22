<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('tax_code', 255);
            $table->string('logo', 255);
            $table->string('favicon', 255);
            $table->string('email', 255)->unique();

            $table->char('hotline', 15);
            $table->char('phone_number', 15);
            $table->char('delivery_phone_number', 15);
            $table->char('zalo_phone_number', 15);

            $table->longText('map', 255);
            $table->string('map_url', 255);

            $table->string('facebook_url', 255);
            $table->string('zalo_url', 255);
            $table->string('twitter_url', 255);
            $table->string('youtube_url', 255);

            $table->string('account_no', 255);
            $table->text('bank_name', 255);

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

            $table->longText('script_header', 255)->nullable();
            $table->longText('script_body', 255)->nullable();
            $table->longText('script_footer', 255)->nullable();

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
        Schema::dropIfExists('companies');
    }
}