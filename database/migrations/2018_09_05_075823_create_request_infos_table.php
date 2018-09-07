<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_id');
            $table->string('service_type');
            $table->string('property_type');
            $table->string('business_purpose');
            $table->string('location');
            $table->string('zone');
            $table->string('minsize_area');
            $table->string('maxsize_area');
            $table->string('min_budget');
            $table->string('max_budget');
            $table->string('bank_loan_service');
            $table->string('bank_statement');
            $table->text('description');
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
        Schema::dropIfExists('requests');
    }
}
