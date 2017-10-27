<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(\App\Book::class, function (Faker $faker) {
    return [
        'title' => ucfirst($faker->realText(15)),
        'description' => $faker->realText(200),
        'year' => $faker->year,
        'author_id' => function () {
            // We take the first random author from the table
            return App\Author::inRandomOrder()->first()->id;
        }
    ];
});
