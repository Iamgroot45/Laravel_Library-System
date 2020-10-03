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
            $table->date('date_borrowed')->nullable();
            $table->date('due_date')->nullable();
            $table->string('status');
            $table->date('date_returned')->nullable();
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
