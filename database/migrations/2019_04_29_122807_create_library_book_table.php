<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibraryBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library_book', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('library_id')->unsigned();
            $table->integer('book_id')->unsigned();
            //$table->foreign('library_id')->references('id')->on('libraries');
            //$table->foreign('book_id')->references('id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('library_book');
    }
}
