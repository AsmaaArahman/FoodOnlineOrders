<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('foroptionml')->nullable();
            $table->foreign('foroptionml')->references('id')->on('options')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('forcustom');
            $table->foreign('forcustom')->references('id')->on('customers')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('forquted')->nullable();
            $table->foreign('forquted')->references('id')->on('quteddeatils')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('stat')->default(0);
            $table->integer('price');
            $table->integer('countd');
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
        Schema::dropIfExists('orders');
    }
}
