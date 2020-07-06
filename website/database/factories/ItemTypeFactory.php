<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ItemType;
use Faker\Generator as Faker;

$factory->define(ItemType::class, static function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'abbr' => strtoupper($faker->sentence(1))
    ];
});
