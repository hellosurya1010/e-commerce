<?php

namespace Database\Seeders;

use App\Models\Admin\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories =  collect(["Oil", "Sugar", "Honey", "Wheat", "Flour", "Millet", "Lentils &amp; Seeds", "Rice", "Pulses", "Seasoning", "Homemade Masala Powders", "Ready to Cook", "Sevai", "Immune Boosters/Health Drinks", "Malts", "Personal Care", "Soaps", "Mouth Care", "Hair Care", "Sweet and Snacks", "Sweets", "Beverage", "Nuts &amp; Dry Fruits", "Snacks", "Jam"]);

        $categories->each(function($name){
            $category = new Category();
            $category->category_slug = $name;
            $category->save();
        });
    }
}
