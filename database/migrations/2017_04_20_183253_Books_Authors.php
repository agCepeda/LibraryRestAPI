<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BooksAuthors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('book_publishers', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('authors', function(Blueprint $table) 
        {
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('books', function(Blueprint $table) 
        {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
        });

        Schema::create('book_authors', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('book_id')->unsigned();
            $table->integer('author_id')->unsigned();
        });

        Schema::create('book_edition', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('isbn');
            $table->string('description');
            $table->integer('book_id')->unsigned();
            $table->integer('book_publisher_id')->unsigned();
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
    }
}
