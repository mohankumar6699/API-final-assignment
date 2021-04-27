<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class booking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->String('email');
            $table->String('phone');
            $table->String('address');
            $table->String('city');
            $table->String('cat');
            $table->Integer('no');
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
        Schema::dropIfExists('booking');
    }
}
