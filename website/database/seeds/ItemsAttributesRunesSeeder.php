<?php

use Illuminate\Database\Seeder;
use App\Item;
use App\ItemType;
use App\Attribute;
use App\ItemsAttributes;
use App\Constants\ItemTypeConst;
use App\Constants\AttributeConst;

class ItemsAttributesRunesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runesItems = Item::where(
            'item_type_id',
            ItemType::where('abbr', '=', ItemTypeConst::RUNE)->firstOrFail()->id
        )->get();

        foreach ($runesItems as $runesItem) {
            ItemsAttributes::create([
                'value' => 'Runa ' . $runesItem->id,
                'item_id' => $runesItem->id,
                'attribute_id' => Attribute::where('abbr', '=', AttributeConst::NAME)->firstOrFail()->id,
            ]);

            ItemsAttributes::create([
                'value' => 'image.png',
                'item_id' => $runesItem->id,
                'attribute_id' => Attribute::where('abbr', '=', AttributeConst::PICTURE)->firstOrFail()->id,
            ]);

            ItemsAttributes::create([
                'value' => 'bonus',
                'item_id' => $runesItem->id,
                'attribute_id' => Attribute::where('abbr', '=', AttributeConst::BONUS)->firstOrFail()->id,
            ]);
        }
    }
}
