<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        if (App::Environment() === 'local') {
            $this->call([
                ItemTypeSeeder::class,
                AttributeSeeder::class,
                ItemSeeder::class,
                ItemsAttributesChestsSeeder::class,
                ItemsAttributesRunesSeeder::class,
                ItemsAttributesAwardSeeder::class,
                BagSeeder::class,
                BagSlotSeeder::class
            ]);
        }
    }
}
