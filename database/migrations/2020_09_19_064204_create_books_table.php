<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('isbn');
            $table->string('title');
            $table->longText('description')->nullable();
            $table->longText('summary')->nullable();
            $table->string('publisher');
            $table->string('publication_year');
            $table->string('book_location');
            $table->integer('no_of_copies');
            $table->integer('available_copies');
            $table->integer('rating_1')->nullable();
            $table->integer('rating_2')->nullable();
            $table->integer('rating_3')->nullable();
            $table->integer('rating_4')->nullable();
            $table->integer('rating_5')->nullable();
            $table->double('average_rating')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
