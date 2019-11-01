<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCscColoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csc_colours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('list_id');
            $table->string('type');
            $table->string('name');
            $table->string('number');
            $table->string('background_colour');
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
        Schema::dropIfExists('csc_colours');
    }
}
