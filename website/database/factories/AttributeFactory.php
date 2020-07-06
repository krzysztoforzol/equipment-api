<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Attribute;

$factory->define(Attribute::class, static function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'abbr' => strtoupper($faker->sentence(5))
    ];
});
