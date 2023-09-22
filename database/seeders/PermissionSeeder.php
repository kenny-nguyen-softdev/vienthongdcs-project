<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #dashboard
        Permission::insert([
            'name' => "Tổng quan",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #company
        Permission::insert([
            'name' => "Hiển thị thông tin cửa hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #order
        Permission::insert([
            'name' => "Hiển thị danh sách đơn hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm đơn hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa đơn hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa đơn hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xem chi tiết đơn hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #product
        Permission::insert([
            'name' => "Hiển thị danh sách sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Sao chép thông tin sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xem đánh giá sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm đánh giá sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa đánh giá sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa đánh giá sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #comment
        Permission::insert([
            'name' => "Hiển thị danh sách đánh giá",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa đánh giá",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa đánh giá",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #parentCategory
        Permission::insert([
            'name' => "Hiển thị danh sách danh mục chính",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm danh mục chính",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa danh mục chính",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa danh mục chính",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #firstSubCategory
        Permission::insert([
            'name' => "Hiển thị danh sách danh mục phụ 1",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm danh mục phụ 1",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa danh mục phụ 1",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa danh mục phụ 1",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #secondSubCategory
        Permission::insert([
            'name' => "Hiển thị danh sách danh mục phụ 2",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm danh mục phụ 2",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa danh mục phụ 2",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa danh mục phụ 2",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #brand
        Permission::insert([
            'name' => "Hiển thị danh sách thương hiệu",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm thương hiệu",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa thương hiệu",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa thương hiệu",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #origin
        Permission::insert([
            'name' => "Hiển thị danh sách xuất xứ",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm xuất xứ",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa xuất xứ",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa xuất xứ",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #configuration
        Permission::insert([
            'name' => "Hiển thị danh sách cấu hình",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm cấu hình",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa cấu hình",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa cấu hình",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #feature
        Permission::insert([
            'name' => "Hiển thị danh sách tính năng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm tính năng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa tính năng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa tính năng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #blog
        Permission::insert([
            'name' => "Hiển thị danh sách danh mục bài viết",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm danh mục bài viết",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa danh mục bài viết",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa danh mục bài viết",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #introduction
        Permission::insert([
            'name' => "Hiển thị danh sách bài giối thiệu",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm bài giối thiệu",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa bài giối thiệu",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa bài giối thiệu",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #post
        Permission::insert([
            'name' => "Hiển thị danh sách bài viết",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm bài viết",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa bài viết",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa bài viết",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #headerPost
        Permission::insert([
            'name' => "Hiển thị danh sách bài viết trên header",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm bài viết trên header",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa bài viết trên header",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa bài viết trên header",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #slider
        Permission::insert([
            'name' => "Hiển thị danh sách slider",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm slider",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa slider",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa slider",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #parentCategorySlider
        Permission::insert([
            'name' => "Hiển thị danh sách slider của danh mục chính",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm slider của danh mục chính",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa slider của danh mục chính",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa slider của danh mục chính",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #page
        Permission::insert([
            'name' => "Thêm các trang thông tin",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa các trang thông tin",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa trang thông tin",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #branch
        Permission::insert([
            'name' => "Hiển thị danh sách chi nhánh",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm chi nhánh",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa chi nhánh",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa chi nhánh",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #consultant
        Permission::insert([
            'name' => "Hiển thị danh sách hỗ trợ tư vấn",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa hỗ trợ tư vấn",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        // Permission::insert([
        //     'name' => "Gửi mail phản hồi tư vấn",
        //     'guard_name' => 'web',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);

        #customer
        Permission::insert([
            'name' => "Hiển thị danh sách khách hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm khách hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa khách hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa khách hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #orderStatus
        Permission::insert([
            'name' => "Hiển thị danh sách tình trạng đơn hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa tình trạng đơn hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #shippingStatus
        Permission::insert([
            'name' => "Hiển thị danh sách tình trạng giao hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa tình trạng giao hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #staff
        Permission::insert([
            'name' => "Hiển thị danh sách thành viên",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm thành viên",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa thành viên",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa thành viên",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #permission
        Permission::insert([
            'name' => "Hiển thị danh sách vai trò",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm vai trò",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa vai trò",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa vai trò",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Cấp tác vụ cho vai trò",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Hiển thị danh sách tác vụ",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}