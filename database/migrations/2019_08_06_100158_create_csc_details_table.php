<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCscDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csc_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('banner_image');
            $table->string('alt_banner_image');
            $table->string('sub_category_id');
            $table->string('title');
            $table->string('slug');
            $table->string('price');
            $table->string('description');
            $table->string('product_features');
            $table->string('size_price');
            $table->string('application');
            $table->string('image');
            $table->string('image_alt');
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
        Schema::dropIfExists('csc_details');
    }
}
