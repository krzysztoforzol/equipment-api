<?php

use Illuminate\Database\Seeder;
use App\Bag;

class BagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        factory(Bag::class, 2)->create();
    }
}
