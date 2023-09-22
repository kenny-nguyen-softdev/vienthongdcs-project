<?php

namespace Database\Seeders;

use App\Models\MainIngredient;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MainIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MainIngredient::insert([
            'name' => 'LÁ BẠC HÀ',
            'featured_image' => 'ingredients/12395_58_m.png',
            'description' => 'Lá Bạc hà được sử dụng trong các sản phẩm mỹ phẩm như: cao dược liệu để gội đầu, lá tắm cho trẻ em, nước súc miệng',
            'color' => 'rgb(102, 136, 63)',
            'sort_by' => 1,
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        MainIngredient::insert([
            'name' => 'TINH DẦU CAM NGỌT',
            'featured_image' => 'ingredients/12395_58_m.png',
            'description' => 'Tinh dầu Cam ngọt được sử dụng trong mỹ phẩm như một thành phần làm thơm, giải tỏa căng thẳng: sáp thơm, tinh dầu treo, kem dưỡng',
            'color' => 'rgb(197, 114, 0)',
            'sort_by' => 1,
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        MainIngredient::insert([
            'name' => 'DẦU QUẢ BƠ ',
            'featured_image' => 'ingredients/12395_58_m.png',
            'description' => 'Được chiết từ thịt quả bơ chín ngay sau khi thu hoạch bằng phương pháp ép lạnh, phương pháp này giữ được nguyên dinh dưỡng tốt trong dầu.',
            'color' => 'rgb(102, 136, 63)',
            'sort_by' => 1,
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        MainIngredient::insert([
            'name' => 'DẦU DỪA',
            'featured_image' => 'ingredients/12395_58_m.png',
            'description' => 'Dầu dừa được chiết xuất từ phần cùi trắng của quả dừa, có thể được tìm thấy trong nhiều loại mỹ phẩm và sản phẩm chăm sóc cá nhân.',
            'color' => 'rgb(182, 154, 113)',
            'sort_by' => 1,
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}