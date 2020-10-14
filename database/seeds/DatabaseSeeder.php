<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\Staff;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StaffSeeder::class);
        $this->call(BooksSeeder::class);
        // $this->call(UserSeeder::class);
        $this->call(BorrowerSeeder::class);

        $this->call([
        	ReservationSeeder::class
        ]);
        $this->call(BorrowedBooksSeeder::class);
    }
}
