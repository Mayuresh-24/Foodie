<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishFlagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dish_flags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dishes_id')->nullable();
            $table->unsignedBigInteger('flag_id')->nullable();
            $table->timestamps();
            $table->foreign('dishes_id')->references('id')->on('dishes');
            $table->foreign('flag_id')->references('id')->on('flags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dish_flags');
    }
}
