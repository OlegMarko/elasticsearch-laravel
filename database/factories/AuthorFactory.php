<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(\App\Author::class, function (Faker $faker) {
    return [
        'name' => "{$faker->firstName} {$faker->lastName}"
    ];
});
