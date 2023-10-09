<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuteddeatilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quteddeatils', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('formealop');
            $table->foreign('formealop')->references('id')->on('options')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('forqute');
            $table->foreign('forqute')->references('id')->on('qutes')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('days');
            $table->integer('price');
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
        Schema::dropIfExists('quteddeatils');
    }
}
