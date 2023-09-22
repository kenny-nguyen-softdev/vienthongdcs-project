<?php

namespace Database\Seeders;

use App\Models\Branch;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Branch::insert([
            'name' => "Trụ sở chính",

            'hotline' => '0978807524',
            'tel' => '0978807524',
            'delivery_phone_number' => '0375912391',

            'map_url' => 'https://goo.gl/maps/ZrGVumhoLYL4gFS46',
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3157256056343!2d106.69422541462272!3d10.787112892314328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f34fbaf0eef%3A0x37338f2331fe3aca!2zMSwgMjA3QSDEkC4gTmd1eeG7hW4gVsSDbiBUaOG7pywgxJBhIEthbywgUXXhuq1uIDEsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1666097866077!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',

            'branch_location_id' => 2,

            'delivery_housenumber_street' => '479/32/2a Quốc Lộ 13',
            'delivery_ward_id' => 8684,
            'housenumber_street' => "Tầng 1, 207A Nguyễn Văn Thủ",
            "ward_id" => 8784,

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Branch::insert([
            'name' => "Trụ sở chính",

            'hotline' => '0978807524',
            'tel' => '0978807524',
            'delivery_phone_number' => '0375912391',

            'map_url' => 'https://goo.gl/maps/ZrGVumhoLYL4gFS46',
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3157256056343!2d106.69422541462272!3d10.787112892314328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f34fbaf0eef%3A0x37338f2331fe3aca!2zMSwgMjA3QSDEkC4gTmd1eeG7hW4gVsSDbiBUaOG7pywgxJBhIEthbywgUXXhuq1uIDEsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1666097866077!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',

            'branch_location_id' => 1,

            'delivery_housenumber_street' => '479/32/2a Quốc Lộ 13',
            'delivery_ward_id' => 8684,
            'housenumber_street' => "Tầng 1, 207A Nguyễn Văn Thủ",
            "ward_id" => 8784,

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Branch::insert([
            'name' => "Trụ sở chính",

            'hotline' => '0978807524',
            'tel' => '0978807524',
            'delivery_phone_number' => '0375912391',

            'map_url' => 'https://goo.gl/maps/ZrGVumhoLYL4gFS46',
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3157256056343!2d106.69422541462272!3d10.787112892314328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f34fbaf0eef%3A0x37338f2331fe3aca!2zMSwgMjA3QSDEkC4gTmd1eeG7hW4gVsSDbiBUaOG7pywgxJBhIEthbywgUXXhuq1uIDEsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1666097866077!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',

            'branch_location_id' => 3,

            'delivery_housenumber_street' => '479/32/2a Quốc Lộ 13',
            'delivery_ward_id' => 8684,
            'housenumber_street' => "Tầng 1, 207A Nguyễn Văn Thủ",
            "ward_id" => 8784,

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}