<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Staff;
use Faker\Generator as Faker;

$factory->define(Staff::class, function (Faker $faker) {
    $email = $faker->unique()->email;

    return [
        'user_id' => factory(App\User::class)->create([
            'username' => $email
        ]),
        'last_name' => $faker->lastName,
        'first_name' => $faker->firstName(),
        'middle_initial' => strtoupper($faker->randomLetter),
        'email'=> $email,
        'position' => $faker->word,
        'area_assigned' => $faker->word
    ];
});
