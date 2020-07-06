<?php

use Illuminate\Database\Seeder;
use App\ItemType;
use App\Constants\ItemTypeConst;

class ItemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $itemTypes = [
            ItemTypeConst::CHEST => 'Skrzynie',
            ItemTypeConst::RUNE => 'Runy',
            ItemTypeConst::AWARD => 'Nagrody'
        ];

        foreach ($itemTypes as $abbr => $name) {
            ItemType::create([
                'abbr' => $abbr,
                'name' => $name
            ]);
        }
    }
}
