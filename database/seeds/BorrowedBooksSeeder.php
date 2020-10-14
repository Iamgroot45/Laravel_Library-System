<?php

use App\BorrowedBook;
use Illuminate\Database\Seeder;

class BorrowedBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $borrowed_book = factory(BorrowedBook::class, 30)->create();
    }
}
