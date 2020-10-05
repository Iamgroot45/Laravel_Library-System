<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterBorrowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('borrowers', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_initial');
            $table->string('contact_number')->unique();
            $table->string('email_address')->unique();
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
