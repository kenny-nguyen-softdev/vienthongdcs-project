<?php

namespace Database\Seeders;

use App\Models\ParentCategorySlider;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ParentCategorySliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ParentCategorySlider::insert([
            'name' => 'slider1-bigone3-590x458.jpg',
            'url' => 'http://telecom.com/',
            'thumb' => 'banners/slider1-bigone3-590x458.jpg',
            'sort_by' => 1,
            'active' => 1,
            'title' => 'Hot sale!!',
            'description' => 'Class Q8C CurvedQLED 4K TV',
            'button_name' => 'shop now',
            'parent_category_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ParentCategorySlider::insert([
            'name' => 'slider2-bigone3-590x458.jpg',
            'url' => 'http://telecom.com/',
            'thumb' => 'banners/slider2-bigone3-590x458.jpg',
            'sort_by' => 2,
            'active' => 1,
            'title' => 'Big sale!!',
            'description' => 'PS4 Pro vs Xbox One S',
            'button_name' => 'shop now',
            'parent_category_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}