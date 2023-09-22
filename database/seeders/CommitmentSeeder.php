<?php

namespace Database\Seeders;

use App\Models\Commitment;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CommitmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Commitment::insert([
            'name' => 'Ship COD toàn quốc',
            'icon_image' => 'commitments/commitment-1.png',
            'description' => 'Thanh toán khi nhận hàng. Phí 20-25k',
            'content' => 'NỘI DUNG SHIP COD TOÀN QUỐC',
            'sort_by' => 2,
            'slug' => 'ship-cod-toan-quoc',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Commitment::insert([
            'name' => 'Miễn phí đổi trả',
            'icon_image' => 'commitments/commitment-2.png',
            'description' => 'Đối với sản phẩm lỗi sản xuất hoặc vận chuyển',
            'content' => 'NỘI DUNG MIỄN PHÍ ĐỔI TRẢ',
            'sort_by' => 1,
            'slug' => 'mien-phi-doi-tra',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Commitment::insert([
            'name' => 'Ưu đãi thành viên',
            'icon_image' => 'commitments/commitment-3.png',
            'description' => 'Đăng ký thành viên nhận nhiều ưu đãi lớn',
            'content' => 'NỘI DUNG ƯU ĐÃI THÀNH VIÊN',
            'sort_by' => 2,
            'slug' => 'uu-dai-thanh-vien',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Commitment::insert([
            'name' => 'Ưu đãi combo',
            'icon_image' => 'commitments/commitment-4.png',
            'description' => 'Mua theo combo, càng mua càng rẻ',
            'content' => 'NỘI DUNG ƯU ĐÃI COMBO',
            'sort_by' => 2,
            'slug' => 'uu-dai-combo',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}