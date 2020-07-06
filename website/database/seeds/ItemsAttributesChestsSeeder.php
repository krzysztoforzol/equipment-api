<?php

use Illuminate\Database\Seeder;
use App\Item;
use App\ItemType;
use App\Attribute;
use App\ItemsAttributes;
use App\Constants\ItemTypeConst;
use App\Constants\AttributeConst;

class ItemsAttributesChestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $chestItems = Item::where(
            'item_type_id',
            ItemType::where('abbr', '=', ItemTypeConst::CHEST)->firstOrFail()->id
        )->get();

        foreach ($chestItems as $chestItem) {
            ItemsAttributes::create([
                'value' => 'Skrzynia ' . $chestItem->id,
                'item_id' => $chestItem->id,
                'attribute_id' => Attribute::where('abbr', '=', AttributeConst::NAME)->firstOrFail()->id,
            ]);

            ItemsAttributes::create([
                'value' => 'image.png',
                'item_id' => $chestItem->id,
                'attribute_id' => Attribute::where('abbr', '=', AttributeConst::PICTURE)->firstOrFail()->id,
            ]);

            ItemsAttributes::create([
                'value' => '10.20',
                'item_id' => $chestItem->id,
                'attribute_id' => Attribute::where('abbr', '=', AttributeConst::PRICE)->firstOrFail()->id,
            ]);
        }
    }
}
