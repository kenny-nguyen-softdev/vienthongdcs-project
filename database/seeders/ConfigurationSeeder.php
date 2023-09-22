<?php

namespace Database\Seeders;

use App\Models\Configuration;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuration::insert([
            'name' => 'Từ 128',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Configuration::insert([
            'name' => 'Từ 24 đến 48 máy lẻ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Configuration::insert([
            'name' => 'Từ 48 đến 72 máy lẻ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Configuration::insert([
            'name' => 'Từ 72 đến 128 máy lẻ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Configuration::insert([
            'name' => 'Từ 72 đến 128 máy lẻ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Configuration::insert([
            'name' => 'Từ 8 đến 24 máy lẻ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}