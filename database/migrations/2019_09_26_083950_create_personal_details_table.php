<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('phone_number');
            $table->string('company');
            $table->string('address');
            $table->string('address1');
            $table->string('city');
            $table->string('province');
            $table->string('zipcode');
            $table->string('additional_info');
            $table->string('s_company');
            $table->string('s_address');
            $table->string('s_address1');
            $table->string('s_city');
            $table->string('s_province');
            $table->string('s_zipcode');
            $table->string('s_add_info');
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
        Schema::dropIfExists('personal_details');
    }
}
