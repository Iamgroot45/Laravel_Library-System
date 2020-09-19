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
            $table->int('number_of_copies');
            $table->int('copies_available');
            $table->int('rating_1');
            $table->int('rating_2');
            $table->int('rating_3');
            $table->int('rating_4');
            $table->int('rating_5');
            $table->double('average_rating');
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
