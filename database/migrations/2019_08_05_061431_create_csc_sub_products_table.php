<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCscSubProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csc_sub_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('banner_image');
            $table->string('alt_banner_image');
            $table->string('title');
            $table->string('slug');
            $table->string('price');
            $table->string('description');
            $table->string('product_features');
            $table->string('size_price');
            $table->string('image');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('meta_keyword');
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
        Schema::dropIfExists('csc_sub_products');
    }
}
