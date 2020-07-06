<?php

use Illuminate\Database\Seeder;
use App\Bag;
use App\BagSlot;
use App\Item;

class BagSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bags = Bag::all();
        foreach ($bags as $bag) {
            //chest item
            BagSlot::create([
                'bag_id' => $bag->id,
                'item_id' => Item::where('id', '=', 1)->firstOrFail()->id
            ]);
            //rune item
            BagSlot::create([
                'bag_id' => $bag->id,
                'item_id' => Item::where('id', '=', 6)->firstOrFail()->id
            ]);
            //award item
            BagSlot::create([
                'bag_id' => $bag->id,
                'item_id' => Item::where('id', '=', 11)->firstOrFail()->id
            ]);
        }
    }
}
