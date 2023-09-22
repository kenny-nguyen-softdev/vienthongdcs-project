<?php

namespace Database\Seeders;

use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::insert([
            'name' => 'sua-rua-mat-tao-bot-co-mem.jpg',
            'url' => 'http://leuna.com/',
            'thumb' => 'banners/sua-rua-mat-tao-bot-co-mem.jpg',
            'sort_by' => 1,
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Slider::insert([
            'name' => '241022_TOHIEU_BANNER_WEB-01.jpg',
            'url' => 'http://leuna.com/',
            'thumb' => 'banners/241022_TOHIEU_BANNER_WEB-01.jpg',
            'sort_by' => 1,
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Slider::insert([
            'name' => 'giai-thuong-co-mem-thuong-hieu-truyen-cam-hung-chau-a.jpg',
            'url' => 'http://leuna.com/',
            'thumb' => 'banners/giai-thuong-co-mem-thuong-hieu-truyen-cam-hung-chau-a.jpg',
            'sort_by' => 1,
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Slider::insert([
            'name' => 'set-qua-20-10.jpg',
            'url' => 'http://leuna.com/',
            'thumb' => 'banners/set-qua-20-10.jpg',
            'sort_by' => 1,
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
