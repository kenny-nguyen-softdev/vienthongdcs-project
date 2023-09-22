<?php

namespace Database\Seeders;

use App\Models\ParentCategoryOrigin;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ParentCategoryOriginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ParentCategoryOrigin::insert([
            'parent_category_id' => 2,
            'origin_id' => 1,
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            // 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ParentCategoryOrigin::insert([
            'parent_category_id' => 2,
            'origin_id' => 2,
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            // 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ParentCategoryOrigin::insert([
            'parent_category_id' => 2,
            'origin_id' => 3,
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            // 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ParentCategoryOrigin::insert([
            'parent_category_id' => 2,
            'origin_id' => 4,
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            // 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ParentCategoryOrigin::insert([
            'parent_category_id' => 2,
            'origin_id' => 5,
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            // 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}