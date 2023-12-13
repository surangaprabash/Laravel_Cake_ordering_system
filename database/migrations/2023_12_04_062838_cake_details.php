<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CakeDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cake_data', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('description');
            $table->string('price');
            $table->string('image',300);
            $table->string('available')->default('yes');
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
        Schema::dropIfExists('cake_data');
    }
}
// $table->id();
//             $table->foreignId('user_id')->references('id')->on('users');
//             $table->foreignId('cake_id')->references('id')->on('cake_data');
//             $table->string('description');
//             $table->string('tp_number',10)->nullable();
//             $table->string('address')->nullable();
//             $table->rememberToken();
//             $table->timestamps();