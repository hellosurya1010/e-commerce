<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\Category;
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

        // Category::where('id', '>', '0')->delete();
        // Category::insertOrIgnore([
        //     'gallary_id' => '32',
        //     'category_icon' => '33',
        //     'category_slug' => 'cat1'
        // ]
        // );

        // Category::insertOrIgnore([
        //     'gallary_id' => '32',
        //     'category_icon' => '33',
        //     'category_slug' => 'cat2'
        // ]
        // );

        // Category::insertOrIgnore([
        //     'gallary_id' => '32',
        //     'category_icon' => '33',
        //     'category_slug' => 'cat3'
        // ]
        // );
        
        // Category::insertOrIgnore([
        //     'gallary_id' => '32',
        //     'category_icon' => '33',
        //     'parent_id' => '1',
        //     'category_slug' => 'sub_cat1'
        // ]
        // );

        // Category::insertOrIgnore([
        //     'gallary_id' => '32',
        //     'category_icon' => '33',
        //     'parent_id' => '1',
        //     'category_slug' => 'sub_cat2'
        // ]
        // );

        // Category::insertOrIgnore([
        //     'gallary_id' => '32',
        //     'category_icon' => '33',
        //     'parent_id' => '1',
        //     'category_slug' => 'sub_cat3'
        // ]
        // );

        // Category::insertOrIgnore([
        //     'gallary_id' => '32',
        //     'category_icon' => '33',
        //     'parent_id' => '2',
        //     'category_slug' => 'sub_cat4'
        // ]
        // );

        // Category::insertOrIgnore([
        //     'gallary_id' => '32',
        //     'category_icon' => '33',
        //     'parent_id' => '3',
        //     'category_slug' => 'sub_cat5'
        // ]
        // );

    }
}