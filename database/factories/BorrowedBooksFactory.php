<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BorrowedBook;
use Faker\Generator as Faker;

$factory->define(BorrowedBook::class, function (Faker $faker) {
    return [
        'book_id' => $faker->numberBetween($min = 1, $max = 1000),
        'staff_id' => $faker->numberBetween($min = 1, $max = 5),
        'borrower_id' => $faker->numberBetween($min = 1, $max = 20),
        'status' => $faker->word,
        'date_borrowed' => $faker->date($format = 'Y-m-d', $max ='now'),
        'due_date' => $faker->date($format = 'Y-m-d', $max ='now'),
        'date_returned' => $faker->date($format = 'Y-m-d', $max ='now')
    ];
});
