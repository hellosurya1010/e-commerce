<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $oil = collect(["Cold Pressed Groundnut Oil - மரச்செக்கு கடலை எண்ணெய்", "Cold Pressed Gingelly Oil - மரச்செக்கு நல்லெண்ணெய்", "Cold Pressed Coconut Oil - மரச்செக்கு தேங்காய் எண்ணெய்", "Sunflower Oil - சூரியகாந்தி எண்ணெய்", "Castor Oil - ஆமணக்கு எண்ணெய்", "Neem Oil - வேப்ப எண்ணெய்", ]);
    }
}
