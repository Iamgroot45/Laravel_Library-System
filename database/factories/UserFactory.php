<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker->unique()->safeEmail,
        'password' => Hash::make($faker->password), // password
        'distinction' => Str::random(10),
    ];
});
