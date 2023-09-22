<?php

namespace Database\Seeders;

use App\Models\ParentCategoryConfiguration;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ParentCategoryConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ParentCategoryConfiguration::insert([
            'parent_category_id' => 2,
            'configuration_id' => 1,
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            // 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ParentCategoryConfiguration::insert([
            'parent_category_id' => 2,
            'configuration_id' => 2,
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            // 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ParentCategoryConfiguration::insert([
            'parent_category_id' => 2,
            'configuration_id' => 3,
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            // 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ParentCategoryConfiguration::insert([
            'parent_category_id' => 2,
            'configuration_id' => 4,
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            // 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ParentCategoryConfiguration::insert([
            'parent_category_id' => 2,
            'configuration_id' => 5,
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            // 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}