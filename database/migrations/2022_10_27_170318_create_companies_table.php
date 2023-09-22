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
            $table->string('tax_id', 255)->nullable();
            $table->string('name', 255);
            $table->string('logo', 255);
            $table->string('favicon', 255);
            $table->string('email', 255)->unique();
            $table->char('hotline', 15);
            $table->string('website', 150);
            $table->string('facebook_url', 255);
            $table->string('instagram_url', 255);
            $table->string('youtube_url', 255);
            $table->string('bo_cong_thuong', 255);

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