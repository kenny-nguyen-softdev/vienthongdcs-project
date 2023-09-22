<?php

namespace Database\Seeders;

use App\Models\ParentCategoryFeature;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ParentCategoryFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ParentCategoryFeature::insert([
            'parent_category_id' => 2,
            'feature_id' => 1,
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            // 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ParentCategoryFeature::insert([
            'parent_category_id' => 2,
            'feature_id' => 2,
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            // 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ParentCategoryFeature::insert([
            'parent_category_id' => 2,
            'feature_id' => 3,
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            // 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ParentCategoryFeature::insert([
            'parent_category_id' => 2,
            'feature_id' => 4,
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            // 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}