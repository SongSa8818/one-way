<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('title');
            $table->decimal('price', 8, 2);
            $table->string ('width_size');
            $table->string ('length_size');
            $table->text('description');
            $table->string('video_url')->nullable();
            $table->string('type', '100');
            $table->string('property_number');
            $table->integer('city_id');
            $table->integer('khan_id');
            $table->integer('sangkat_id');
            $table->integer('village_id');
            $table->string('street_name')->nullable();
            $table->string('street_number')->nullable();
            $table->string('pro_lat');
            $table->string('pro_lon');
            $table->string('blocked_by')->nullable();

            $table->string('status');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('property_images', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('property_id');
            $table->string('img');
            $table->foreign('property_id')
                ->references('id')->on('properties')
                ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('property_images');
        Schema::dropIfExists('properties');
    }
}
