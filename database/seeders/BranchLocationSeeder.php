<?php

namespace Database\Seeders;

use App\Models\BranchLocation;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BranchLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BranchLocation::insert([
            'name' => 'TRỤ SỞ HÀ NỘI',
            'province_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        BranchLocation::insert([
            'name' => 'TRỤ SỞ Hồ Chí Minh',
            'province_id' => 50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        BranchLocation::insert([
            'name' => 'TRỤ SỞ Đà Nẵng',
            'province_id' => 32,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}