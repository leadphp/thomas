<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTilesSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiles_specifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('list_id');
            $table->string('tile_size');
            $table->string('sqft');
            $table->string('cost_per_title');
            $table->string('titles_per_box');
            $table->string('cost_per_box');
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
        Schema::dropIfExists('tiles_specifications');
    }
}
