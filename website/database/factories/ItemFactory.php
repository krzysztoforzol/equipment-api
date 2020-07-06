<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use App\ItemType;
use Faker\Generator as Faker;

$factory->define(Item::class, static function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'item_type_id' => factory(ItemType::class)->create()->id,
    ];
});
