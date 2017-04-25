<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('password');

            $table->timestamps();
        });

        Schema::create('sessions', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('payload');
            $table->integer('user_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('sessions');
        Schema::drop('users');
    }
}
