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
            $table->string('publisher');
            $table->longText('description');
            $table->longText('summary');
            $table->date('publication_date');
            $table->decimal('book_location');
            $table->integer('number_of_copies');
            $table->integer('copies_available')->nullable();
            $table->integer('rating_1')->nullable();
            $table->integer('rating_2')->nullable();
            $table->integer('rating_3')->nullable();
            $table->integer('rating_4')->nullable();
            $table->integer('rating_5')->nullable();
            $table->double('average_rating')->nullable();
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
        Schema::dropIfExists('books');
    }
}
