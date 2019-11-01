<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lname');
            $table->string('email');
            $table->string('phone');
            $table->string('company_name');
            $table->string('product')->nullable();
            $table->string('put');
            $table->string('material');
            $table->string('area');
            $table->string('shipped');
            $table->string('additional');
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
        Schema::dropIfExists('quotes');
    }
}
