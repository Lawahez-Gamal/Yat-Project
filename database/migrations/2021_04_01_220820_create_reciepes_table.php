<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReciepesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reciepes', function (Blueprint $table) {
            $table->id();
            $table->string('reciepe_name');
            $table->text('ingredient');
            $table->text('instructions');
           
            $table->unsignedBigInteger('meal_id');

            $table->foreign('meal_id')->references('id')->on('Mymeals');
            
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
        Schema::dropIfExists('reciepes');
    }
}
