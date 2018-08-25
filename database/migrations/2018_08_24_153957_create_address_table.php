<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('khan', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->integer('city_id')->unsigned();
          $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
          $table->timestamps();
        });

        Schema::create('sangkat', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->integer('khan_id')->unsigned();
          $table->foreign('khan_id')->references('id')->on('khan')->onDelete('cascade');
          $table->timestamps();
        });

        Schema::create('village', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->integer('sangkat_id')->unsigned();
          $table->foreign('sangkat_id')->references('id')->on('village')->onDelete('cascade');
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
        Schema::dropIfExists('cities');
    }
}
