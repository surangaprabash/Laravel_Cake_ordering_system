<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('email',100)->unique();
            $table->string('tp_number',10)->nullable();
            $table->string('address')->nullable();
            $table->string('password');
            $table->string('usertype')->default('user');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    // $table->foreignId('user_id')->references('id')->on('users');

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
