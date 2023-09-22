<?php

namespace Database\Seeders;

use App\Models\SubMenu;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SubMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubMenu::insert([
            'name' => "Về Le'una",
            'url' => "#",
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        SubMenu::insert([
            'name' => "Nhà Máy",
            'url' => "#",
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        SubMenu::insert([
            'name' => "Minh Bạch Nguyên Liệu",
            'url' => "#",
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        SubMenu::insert([
            'name' => "Tin Tức",
            'url' => "#",
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}