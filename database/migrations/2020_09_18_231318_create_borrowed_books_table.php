<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowedBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowed_books', function (Blueprint $table) {
            $table->id();
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('borrowers_id')->references('id')->on('borrowers');
            $table->foreign('staff_id')->references('id')->on('staff');
            $table->date('borrowed_date');
            $table->string('status',50);
            $table->date('due_date');
            $table->dateTime('returned',0)
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
        Schema::dropIfExists('borrowed_books');
    }
}
