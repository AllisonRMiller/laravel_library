<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Books;
use Faker\Generator as Faker;

$factory->define(Books::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'blurb' => $faker->paragraph,
        'status_id'=> 1

    ];
});
