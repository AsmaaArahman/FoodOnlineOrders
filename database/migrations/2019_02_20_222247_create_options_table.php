<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->collation('utf8_general_ci');
            $table->integer('price');
            $table->string('images')->collation('utf8_general_ci');
            $table->integer('countnum');
            $table->unsignedInteger('formeal');
            $table->foreign('formeal')->references('id')->on('options')->onUpdate('cascade')->onDelete('cascade');
            $table->text('descr')->collation('utf8_general_ci');
            $table->timestamp('finalone');
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
        Schema::dropIfExists('options');
    }
}
