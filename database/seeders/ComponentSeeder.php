<?php

namespace Database\Seeders;

use App\Models\Component;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Component::insert([
            'name' => 'Garamite 7308 XR',
            'main_ingredient_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Component::insert([
            'name' => 'Purolan IDD',
            'main_ingredient_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        Component::insert([
            'name' => 'Ae sil 12',
            'main_ingredient_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Component::insert([
            'name' => 'Sáp Ong',
            'main_ingredient_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Component::insert([
            'name' => 'Sáp Đậu Nành',
            'main_ingredient_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        // Component::insert([
        //     'name' => 'Sáp Candelilla',
        //     'main_ingredient_id' => 4,
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);

        // Component::insert([
        //     'name' => 'Dầu Hạt Táo',
        //     'main_ingredient_id' => 4,
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);
    }
}