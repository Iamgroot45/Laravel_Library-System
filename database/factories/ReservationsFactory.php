<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BookReservation;
use Faker\Generator as Faker;

$factory->define(BookReservation::class, function (Faker $faker) {
    return [
        'book_id'=>$faker->book_id,
        'reservation_date'=>$faker->reservations_date,
        'pickup_date'=>$faker->pickup_date
    ];
});
