<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Borrower;
use Faker\Generator as Faker;

$factory->define(Borrower::class, function (Faker $faker) {
    $email = $faker->unique()->email;

    return [
        'user_id' => factory(App\User::class)->create([
            'username' => $email
        ]),
        'last_name' => $faker->lastName,
        'first_name' => $faker->firstName(),
        'middle_initial' => strtoupper($faker->randomLetter),
        'contact_number' => $faker->phoneNumber,
        'email_address'=> $email,
        'purpose' => $faker->sentence
    ];
});