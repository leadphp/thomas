<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_id');
            $table->string('email');
            $table->string('customer_id');
            $table->string('product_ske');
            $table->string('product_name');
            $table->string('product_price');
            $table->string('product_quantity');
            $table->string('product_type');
            $table->string('list_id');
            $table->string('inch');
            $table->string('colour');
            $table->string('width_p_inch');        
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
        Schema::dropIfExists('cart_product');
    }
}
