<?php

use Illuminate\Database\Seeder;
use App\Attribute;
use App\Constants\AttributeConst;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $itemTypes = [
            AttributeConst::NAME => 'Nazwa',
            AttributeConst::PICTURE => 'Obrazek',
            AttributeConst::PRICE => 'Cena',
            AttributeConst::BONUS => 'Bonus',
            AttributeConst::CODE => 'Kod',
            AttributeConst::STATUS => 'Status'
        ];

        foreach ($itemTypes as $abbr => $name) {
            Attribute::create([
                'abbr' => $abbr,
                'name' => $name
            ]);
        }
    }
}
