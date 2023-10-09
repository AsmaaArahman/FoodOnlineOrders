<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mealplates', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('foropt');
            $table->foreign('foropt')->references('id')->on('options')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('forplates');
            $table->foreign('forplates')->references('id')->on('plates')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            $table->collection = 'utf8_general_ci';

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mealplates');
    }
}
