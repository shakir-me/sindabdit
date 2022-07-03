<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChoosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chooses', function (Blueprint $table) {
            $table->id();
            $table->longText('title')->nullable();
            $table->longText('desc')->nullable();
            $table->string('sl_one')->nullable();
            $table->longText('sl_one_title')->nullable();
            $table->longText('sl_one_desc')->nullable();
            $table->string('sl_two')->nullable();
            $table->longText('sl_two_title')->nullable();
            $table->longText('sl_two_desc')->nullable();
            $table->longText('sl_three')->nullable();
            $table->longText('sl_three_title')->nullable();
            $table->longText('sl_four_desc')->nullable();
            $table->string('link')->nullable();
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
        Schema::dropIfExists('chooses');
    }
}
