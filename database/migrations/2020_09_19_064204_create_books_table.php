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
            $table->date('publication_date');
            $table->string('book_location');
            $table->int('no_of_copies');
            $table->int('copies_available');
            $table->int('rating_1')->nullable();
            $table->int('rating_2')->nullable();
            $table->int('rating_3')->nullable();
            $table->int('rating_4')->nullable();
            $table->int('rating_5')->nullable();
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
