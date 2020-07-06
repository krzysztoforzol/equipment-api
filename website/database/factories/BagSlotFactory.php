<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BagSlot;
use App\Bag;
use App\Item;
use Faker\Generator as Faker;

$factory->define(BagSlot::class, static function (Faker $faker) {
    return [
        'bag_id' => factory(Bag::class)->create()->id,
        'item_id' => factory(Item::class)->create()->id
    ];
});
