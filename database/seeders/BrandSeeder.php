<?php

namespace Database\Seeders;

use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::insert([
            'name' => 'Vietnamnet',
            'represented_image' => 'brands/Vietnamnet-Logo_84_m.jpg',
            'is_active' => 1,
            'title_seo' => '',
            'meta_des' => '',
            'meta_key' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Brand::insert([
            'name' => 'Family',
            'represented_image' => 'brands/afamily-(1)_m.jpg',
            'is_active' => 1,
            'title_seo' => '',
            'meta_des' => '',
            'meta_key' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Brand::insert([
            'name' => 'CAFEF',
            'represented_image' => 'brands/logo-cafef_m.jpg',
            'is_active' => 1,
            'title_seo' => '',
            'meta_des' => '',
            'meta_key' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Brand::insert([
            'name' => 'Kenh14',
            'represented_image' => 'brands/Untitled-1_m.jpg',
            'is_active' => 1,
            'title_seo' => '',
            'meta_des' => '',
            'meta_key' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Brand::insert([
            'name' => 'Evavn',
            'represented_image' => 'brands/eva_m.png',
            'is_active' => 1,
            'title_seo' => '',
            'meta_des' => '',
            'meta_key' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}