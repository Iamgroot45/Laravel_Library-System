<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BorrowedBook;
use Faker\Generator as Faker;

$factory->define(BorrowedBook::class, function (Faker $faker) {
    return [
        'book_id' => factory(App\Book::class)->create(),
        'staff_id' => factory(App\Staff::class)->create(),
        'borrower_id' => factory(App\Borrower::class)->create(),
        'status' => $faker->word,
        'date_borrowed' => $faker->date($format = 'Y-m-d', $max ='now'),
        'due_date' => $faker->date($format = 'Y-m-d', $max ='now'),
        'date_returned' => $faker->date($format = 'Y-m-d', $max ='now')
    ];
});
