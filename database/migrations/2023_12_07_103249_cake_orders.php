<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CakeOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cake_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('cake_id')->references('id')->on('cake_data');
            $table->string('description');
            $table->string('quantity');
            $table->string('address');
            $table->string('phone');
            $table->string('payment');
            $table->string('total');
            $table->string('status')->default('1');
            $table->date('r_date');
            $table->rememberToken();
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
        Schema::dropIfExists('cake_orders');
    }
}
