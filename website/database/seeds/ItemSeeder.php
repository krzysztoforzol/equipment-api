<?php

use Illuminate\Database\Seeder;
use App\ItemType;
use App\Constants\ItemTypeConst;
use App\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $seedsArray[] = [
            [
                'name' => 'Skrzynia_1',
                'item_type_id' => ItemType::where('abbr', '=', ItemTypeConst::CHEST)->firstOrFail()->id
            ],
            [
                'name' => 'Skrzynia_2',
                'item_type_id' => ItemType::where('abbr', '=', ItemTypeConst::CHEST)->firstOrFail()->id
            ],
            [
                'name' => 'Skrzynia_3',
                'item_type_id' => ItemType::where('abbr', '=', ItemTypeConst::CHEST)->firstOrFail()->id
            ],
            [
                'name' => 'Skrzynia_4',
                'item_type_id' => ItemType::where('abbr', '=', ItemTypeConst::CHEST)->firstOrFail()->id
            ],
            [
                'name' => 'Skrzynia_5',
                'item_type_id' => ItemType::where('abbr', '=', ItemTypeConst::CHEST)->firstOrFail()->id
            ]
        ];

        $seedsArray[] = [
            [
                'name' => 'Runa_1',
                'item_type_id' => ItemType::where('abbr', '=', ItemTypeConst::RUNE)->firstOrFail()->id
            ],
            [
                'name' => 'Runa_2',
                'item_type_id' => ItemType::where('abbr', '=', ItemTypeConst::RUNE)->firstOrFail()->id
            ],
            [
                'name' => 'Runa_3',
                'item_type_id' => ItemType::where('abbr', '=', ItemTypeConst::RUNE)->firstOrFail()->id
            ],
            [
                'name' => 'Runa_4',
                'item_type_id' => ItemType::where('abbr', '=', ItemTypeConst::RUNE)->firstOrFail()->id
            ],
            [
                'name' => 'Runa_5',
                'item_type_id' => ItemType::where('abbr', '=', ItemTypeConst::RUNE)->firstOrFail()->id
            ]
        ];

        $seedsArray[] = [
            [
                'name' => 'Nagroda_1',
                'item_type_id' => ItemType::where('abbr', '=', ItemTypeConst::AWARD)->firstOrFail()->id
            ],
            [
                'name' => 'Nagroda_2',
                'item_type_id' => ItemType::where('abbr', '=', ItemTypeConst::AWARD)->firstOrFail()->id
            ],
            [
                'name' => 'Nagroda_3',
                'item_type_id' => ItemType::where('abbr', '=', ItemTypeConst::AWARD)->firstOrFail()->id
            ],
            [
                'name' => 'Nagroda_4',
                'item_type_id' => ItemType::where('abbr', '=', ItemTypeConst::AWARD)->firstOrFail()->id
            ],
            [
                'name' => 'Nagroda_5',
                'item_type_id' => ItemType::where('abbr', '=', ItemTypeConst::AWARD)->firstOrFail()->id
            ]
        ];

        $seedsArray = array_merge(...$seedsArray);

        foreach ($seedsArray as $seed) {
            Item::create($seed);
        }
    }
}
