<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [

        'isbn' => $faker-> isbn13,
        'title' => $faker-> sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker-> paragraph($nbSentences = 3, $variableNbSentences = true),
        'summary' => $faker-> paragraph($nbSentences = 3, $variableNbSentences = true),
        'publisher' => $faker-> name($gender = null),
        'publication_year' => $faker-> year($max = 'now'),
        'book_location' => $faker-> randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'no_of_copies' => $faker-> randomDigit,
        'available_copies' => $faker-> randomDigit,
        'rating_1' => $faker-> randomNumber($nbDigits = NULL, $strict = false),
        'rating_2' => $faker-> randomNumber($nbDigits = NULL, $strict = false),
        'rating_3' => $faker-> randomNumber($nbDigits = NULL, $strict = false),
        'rating_4' => $faker-> randomNumber($nbDigits = NULL, $strict = false),
        'rating_5' => $faker-> randomNumber($nbDigits = NULL, $strict = false),
        'average_rating' => $faker-> randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL)

    ];
});
