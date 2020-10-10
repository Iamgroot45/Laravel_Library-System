<?php

use Illuminate\Database\Seeder;
use App\BookAuthor;

class BookAuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                //
        $book_authors = BookAuthor::create([
        	'author_id' => '1',
        	'book_id' => '1',
        ]);

    }
}
