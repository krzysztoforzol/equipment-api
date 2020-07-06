<?php

use Illuminate\Database\Seeder;
use App\Item;
use App\ItemType;
use App\Attribute;
use App\ItemsAttributes;
use App\Constants\ItemTypeConst;
use App\Constants\AttributeConst;

class ItemsAttributesAwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $awards = Item::where(
            'item_type_id',
            ItemType::where('abbr', '=', ItemTypeConst::AWARD)->firstOrFail()->id
        )->get();

        foreach ($awards as $award) {
            ItemsAttributes::create([
                'value' => 'Nagroda ' . $award->id,
                'item_id' => $award->id,
                'attribute_id' => Attribute::where('abbr', '=', AttributeConst::NAME)->firstOrFail()->id,
            ]);

            ItemsAttributes::create([
                'value' => 'image.png',
                'item_id' => $award->id,
                'attribute_id' => Attribute::where('abbr', '=', AttributeConst::PICTURE)->firstOrFail()->id,
            ]);

            ItemsAttributes::create([
                'value' => 'CODE_' . $award->id,
                'item_id' => $award->id,
                'attribute_id' => Attribute::where('abbr', '=', AttributeConst::CODE)->firstOrFail()->id,
            ]);

            ItemsAttributes::create([
                'value' => '10.20',
                'item_id' => $award->id,
                'attribute_id' => Attribute::where('abbr', '=', AttributeConst::PRICE)->firstOrFail()->id,
            ]);

            ItemsAttributes::create([
                'value' => (string)random_int(0, 3),
                'item_id' => $award->id,
                'attribute_id' => Attribute::where('abbr', '=', AttributeConst::STATUS)->firstOrFail()->id,
            ]);
        }
    }
}
