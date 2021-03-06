<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterBorrowedBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('borrowed_books', function (Blueprint $table) {
            $table->foreignId('book_id')->constrained('books');
            $table->foreignId('borrower_id')->constrained('borrowers');
            $table->foreignId('staff_id')->constrained('staff');
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
        //
    }
}
