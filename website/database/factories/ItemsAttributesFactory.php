<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ItemsAttributes;
use Faker\Generator as Faker;
use App\Item;
use App\Attribute;

$factory->define(ItemsAttributes::class, static function (Faker $faker) {
    return [
        'value' => $faker->word,
        'item_id' => factory(Item::class)->create()->id,
        'attribute_id' => factory(Attribute::class)->create()->id
    ];
});
