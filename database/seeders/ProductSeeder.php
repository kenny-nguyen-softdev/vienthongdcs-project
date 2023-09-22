<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            'barcode' => null,
            'model' => 'Epos-Sennheiser Adapt 260',
            'name' => 'Tai nghe Bluetooth không dây Epos-Sennheiser Adapt 260',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 250000,
            'sale_price' => 250000,
            'hover_featured_image' => 'products/tai-nghe-epos-sennheiser-adapt-260.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 15,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            'slug' => 'tai-nghe-bluetooth-khong-day-epos-sennheiser-adapt-260',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Jabra Biz 1100 USB Duo',
            'name' => 'Tai nghe Jabra Biz 1100 USB Duo',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'tai-nghe-jabra-biz-1100-usb-duo',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'MRD-QD001',
            'name' => 'Cáp tai nghe 3.5mm MRD-QD001',
            'insurance' => '3 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'cap-tai-nghe-35mm-mrd-qd001',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Epos-Sennheiser Adapt 260',
            'name' => 'Tai nghe Bluetooth không dây Epos-Sennheiser Adapt 260',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 250000,
            'sale_price' => 250000,
            'hover_featured_image' => 'products/tai-nghe-epos-sennheiser-adapt-260.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 15,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            'slug' => 'tai-nghe-bluetooth-khong-day-epos-sennheiser-adapt-260',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Jabra Biz 1100 USB Duo',
            'name' => 'Tai nghe Jabra Biz 1100 USB Duo',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'tai-nghe-jabra-biz-1100-usb-duo',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'MRD-QD001',
            'name' => 'Cáp tai nghe 3.5mm MRD-QD001',
            'insurance' => '3 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'cap-tai-nghe-35mm-mrd-qd001',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Epos-Sennheiser Adapt 260',
            'name' => 'Tai nghe Bluetooth không dây Epos-Sennheiser Adapt 260',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 250000,
            'sale_price' => 250000,
            'hover_featured_image' => 'products/tai-nghe-epos-sennheiser-adapt-260.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 15,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            'slug' => 'tai-nghe-bluetooth-khong-day-epos-sennheiser-adapt-260',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'CDX-901A',
            'name' => 'Điện thoại chuyên đụng khách sạn CDX-901A',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Thiết kế tùy chỉnh Faceplate theo logo khách sạn
            – 10 phím chức năng có thể lập trình
            – Đèn báo sáng khi thông báo cuộc gọi đến
            – Bốn chế độ để điều chỉnh âm lượng chuông và chế độ rảnh tay
            – Chức năng rảnh tay, quay số lại, phím Redial
            – Bảo vệ sấm sét và chống EMI;
            – Chống thấm nước và chống ẩm ướt
            – Tương thích tất cả hệ thống tổng đài điện thoại analog
            – Lựa chọn 2 màu: đen và trắng”',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/dien-thoai-excelltel-cdx-901a_2.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'djien-thoai-chuyen-djung-khach-san-cdx-901a',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'MRD-QD001',
            'name' => 'Cáp tai nghe 3.5mm MRD-QD001',
            'insurance' => '3 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-adapt-presence-grey-business_1.jpg',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'cap-tai-nghe-35mm-mrd-qd001',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Epos-Sennheiser Adapt 260',
            'name' => 'Tai nghe Bluetooth không dây Epos-Sennheiser Adapt 260',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 250000,
            'sale_price' => 250000,
            'hover_featured_image' => 'products/tai-nghe-epos-sennheiser-adapt-260.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 15,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            'slug' => 'tai-nghe-bluetooth-khong-day-epos-sennheiser-adapt-260',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Jabra Biz 1100 USB Duo',
            'name' => 'Tai nghe Jabra Biz 1100 USB Duo',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'tai-nghe-jabra-biz-1100-usb-duo',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'MRD-QD001',
            'name' => 'Cáp tai nghe 3.5mm MRD-QD001',
            'insurance' => '3 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'cap-tai-nghe-35mm-mrd-qd001',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Epos-Sennheiser Adapt 260',
            'name' => 'Tai nghe Bluetooth không dây Epos-Sennheiser Adapt 260',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 250000,
            'sale_price' => 250000,
            'hover_featured_image' => 'products/tai-nghe-epos-sennheiser-adapt-260.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 15,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            'slug' => 'tai-nghe-bluetooth-khong-day-epos-sennheiser-adapt-260',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Jabra Biz 1100 USB Duo',
            'name' => 'Tai nghe Jabra Biz 1100 USB Duo',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'tai-nghe-jabra-biz-1100-usb-duo',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'MRD-QD001',
            'name' => 'Cáp tai nghe 3.5mm MRD-QD001',
            'insurance' => '3 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'cap-tai-nghe-35mm-mrd-qd001',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Epos-Sennheiser Adapt 260',
            'name' => 'Tai nghe Bluetooth không dây Epos-Sennheiser Adapt 260',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 250000,
            'sale_price' => 250000,
            'hover_featured_image' => 'products/tai-nghe-epos-sennheiser-adapt-260.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 15,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            'slug' => 'tai-nghe-bluetooth-khong-day-epos-sennheiser-adapt-260',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'CDX-901A',
            'name' => 'Điện thoại chuyên đụng khách sạn CDX-901A',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Thiết kế tùy chỉnh Faceplate theo logo khách sạn
            – 10 phím chức năng có thể lập trình
            – Đèn báo sáng khi thông báo cuộc gọi đến
            – Bốn chế độ để điều chỉnh âm lượng chuông và chế độ rảnh tay
            – Chức năng rảnh tay, quay số lại, phím Redial
            – Bảo vệ sấm sét và chống EMI;
            – Chống thấm nước và chống ẩm ướt
            – Tương thích tất cả hệ thống tổng đài điện thoại analog
            – Lựa chọn 2 màu: đen và trắng”',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/dien-thoai-excelltel-cdx-901a_2.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'djien-thoai-chuyen-djung-khach-san-cdx-901a',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'MRD-QD001',
            'name' => 'Cáp tai nghe 3.5mm MRD-QD001',
            'insurance' => '3 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-adapt-presence-grey-business_1.jpg',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'cap-tai-nghe-35mm-mrd-qd001',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Epos-Sennheiser Adapt 260',
            'name' => 'Tai nghe Bluetooth không dây Epos-Sennheiser Adapt 260',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 250000,
            'sale_price' => 250000,
            'hover_featured_image' => 'products/tai-nghe-epos-sennheiser-adapt-260.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 15,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            'slug' => 'tai-nghe-bluetooth-khong-day-epos-sennheiser-adapt-260',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Jabra Biz 1100 USB Duo',
            'name' => 'Tai nghe Jabra Biz 1100 USB Duo',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'tai-nghe-jabra-biz-1100-usb-duo',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'MRD-QD001',
            'name' => 'Cáp tai nghe 3.5mm MRD-QD001',
            'insurance' => '3 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'cap-tai-nghe-35mm-mrd-qd001',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Epos-Sennheiser Adapt 260',
            'name' => 'Tai nghe Bluetooth không dây Epos-Sennheiser Adapt 260',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 250000,
            'sale_price' => 250000,
            'hover_featured_image' => 'products/tai-nghe-epos-sennheiser-adapt-260.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 15,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            'slug' => 'tai-nghe-bluetooth-khong-day-epos-sennheiser-adapt-260',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Jabra Biz 1100 USB Duo',
            'name' => 'Tai nghe Jabra Biz 1100 USB Duo',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'tai-nghe-jabra-biz-1100-usb-duo',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'MRD-QD001',
            'name' => 'Cáp tai nghe 3.5mm MRD-QD001',
            'insurance' => '3 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'cap-tai-nghe-35mm-mrd-qd001',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Epos-Sennheiser Adapt 260',
            'name' => 'Tai nghe Bluetooth không dây Epos-Sennheiser Adapt 260',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 250000,
            'sale_price' => 250000,
            'hover_featured_image' => 'products/tai-nghe-epos-sennheiser-adapt-260.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 15,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            'slug' => 'tai-nghe-bluetooth-khong-day-epos-sennheiser-adapt-260',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'CDX-901A',
            'name' => 'Điện thoại chuyên đụng khách sạn CDX-901A',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Thiết kế tùy chỉnh Faceplate theo logo khách sạn
            – 10 phím chức năng có thể lập trình
            – Đèn báo sáng khi thông báo cuộc gọi đến
            – Bốn chế độ để điều chỉnh âm lượng chuông và chế độ rảnh tay
            – Chức năng rảnh tay, quay số lại, phím Redial
            – Bảo vệ sấm sét và chống EMI;
            – Chống thấm nước và chống ẩm ướt
            – Tương thích tất cả hệ thống tổng đài điện thoại analog
            – Lựa chọn 2 màu: đen và trắng”',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/dien-thoai-excelltel-cdx-901a_2.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'djien-thoai-chuyen-djung-khach-san-cdx-901a',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'MRD-QD001',
            'name' => 'Cáp tai nghe 3.5mm MRD-QD001',
            'insurance' => '3 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-adapt-presence-grey-business_1.jpg',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'cap-tai-nghe-35mm-mrd-qd001',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Epos-Sennheiser Adapt 260',
            'name' => 'Tai nghe Bluetooth không dây Epos-Sennheiser Adapt 260',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 250000,
            'sale_price' => 250000,
            'hover_featured_image' => 'products/tai-nghe-epos-sennheiser-adapt-260.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 15,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            'slug' => 'tai-nghe-bluetooth-khong-day-epos-sennheiser-adapt-260',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Jabra Biz 1100 USB Duo',
            'name' => 'Tai nghe Jabra Biz 1100 USB Duo',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'tai-nghe-jabra-biz-1100-usb-duo',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'MRD-QD001',
            'name' => 'Cáp tai nghe 3.5mm MRD-QD001',
            'insurance' => '3 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'cap-tai-nghe-35mm-mrd-qd001',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Epos-Sennheiser Adapt 260',
            'name' => 'Tai nghe Bluetooth không dây Epos-Sennheiser Adapt 260',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 250000,
            'sale_price' => 250000,
            'hover_featured_image' => 'products/tai-nghe-epos-sennheiser-adapt-260.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 15,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            'slug' => 'tai-nghe-bluetooth-khong-day-epos-sennheiser-adapt-260',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Jabra Biz 1100 USB Duo',
            'name' => 'Tai nghe Jabra Biz 1100 USB Duo',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'tai-nghe-jabra-biz-1100-usb-duo',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'MRD-QD001',
            'name' => 'Cáp tai nghe 3.5mm MRD-QD001',
            'insurance' => '3 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'cap-tai-nghe-35mm-mrd-qd001',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Epos-Sennheiser Adapt 260',
            'name' => 'Tai nghe Bluetooth không dây Epos-Sennheiser Adapt 260',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 250000,
            'sale_price' => 250000,
            'hover_featured_image' => 'products/tai-nghe-epos-sennheiser-adapt-260.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 15,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            'slug' => 'tai-nghe-bluetooth-khong-day-epos-sennheiser-adapt-260',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'CDX-901A',
            'name' => 'Điện thoại chuyên đụng khách sạn CDX-901A',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Thiết kế tùy chỉnh Faceplate theo logo khách sạn
            – 10 phím chức năng có thể lập trình
            – Đèn báo sáng khi thông báo cuộc gọi đến
            – Bốn chế độ để điều chỉnh âm lượng chuông và chế độ rảnh tay
            – Chức năng rảnh tay, quay số lại, phím Redial
            – Bảo vệ sấm sét và chống EMI;
            – Chống thấm nước và chống ẩm ướt
            – Tương thích tất cả hệ thống tổng đài điện thoại analog
            – Lựa chọn 2 màu: đen và trắng”',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/dien-thoai-excelltel-cdx-901a_2.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'djien-thoai-chuyen-djung-khach-san-cdx-901a',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'MRD-QD001',
            'name' => 'Cáp tai nghe 3.5mm MRD-QD001',
            'insurance' => '3 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-adapt-presence-grey-business_1.jpg',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'cap-tai-nghe-35mm-mrd-qd001',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Product::insert([
            'barcode' => null,
            'model' => 'Epos-Sennheiser Adapt 260',
            'name' => 'Tai nghe Bluetooth không dây Epos-Sennheiser Adapt 260',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 250000,
            'sale_price' => 250000,
            'hover_featured_image' => 'products/tai-nghe-epos-sennheiser-adapt-260.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 15,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            'slug' => 'tai-nghe-bluetooth-khong-day-epos-sennheiser-adapt-260',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Jabra Biz 1100 USB Duo',
            'name' => 'Tai nghe Jabra Biz 1100 USB Duo',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'tai-nghe-jabra-biz-1100-usb-duo',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'MRD-QD001',
            'name' => 'Cáp tai nghe 3.5mm MRD-QD001',
            'insurance' => '3 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'cap-tai-nghe-35mm-mrd-qd001',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Epos-Sennheiser Adapt 260',
            'name' => 'Tai nghe Bluetooth không dây Epos-Sennheiser Adapt 260',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 250000,
            'sale_price' => 250000,
            'hover_featured_image' => 'products/tai-nghe-epos-sennheiser-adapt-260.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 15,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            'slug' => 'tai-nghe-bluetooth-khong-day-epos-sennheiser-adapt-260',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Jabra Biz 1100 USB Duo',
            'name' => 'Tai nghe Jabra Biz 1100 USB Duo',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'tai-nghe-jabra-biz-1100-usb-duo',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'MRD-QD001',
            'name' => 'Cáp tai nghe 3.5mm MRD-QD001',
            'insurance' => '3 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'cap-tai-nghe-35mm-mrd-qd001',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Epos-Sennheiser Adapt 260',
            'name' => 'Tai nghe Bluetooth không dây Epos-Sennheiser Adapt 260',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 250000,
            'sale_price' => 250000,
            'hover_featured_image' => 'products/tai-nghe-epos-sennheiser-adapt-260.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 15,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            'slug' => 'tai-nghe-bluetooth-khong-day-epos-sennheiser-adapt-260',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'CDX-901A',
            'name' => 'Điện thoại chuyên đụng khách sạn CDX-901A',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Thiết kế tùy chỉnh Faceplate theo logo khách sạn
            – 10 phím chức năng có thể lập trình
            – Đèn báo sáng khi thông báo cuộc gọi đến
            – Bốn chế độ để điều chỉnh âm lượng chuông và chế độ rảnh tay
            – Chức năng rảnh tay, quay số lại, phím Redial
            – Bảo vệ sấm sét và chống EMI;
            – Chống thấm nước và chống ẩm ướt
            – Tương thích tất cả hệ thống tổng đài điện thoại analog
            – Lựa chọn 2 màu: đen và trắng”',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/dien-thoai-excelltel-cdx-901a_2.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'djien-thoai-chuyen-djung-khach-san-cdx-901a',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'MRD-QD001',
            'name' => 'Cáp tai nghe 3.5mm MRD-QD001',
            'insurance' => '3 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-adapt-presence-grey-business_1.jpg',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'cap-tai-nghe-35mm-mrd-qd001',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Epos-Sennheiser Adapt 260',
            'name' => 'Tai nghe Bluetooth không dây Epos-Sennheiser Adapt 260',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 250000,
            'sale_price' => 250000,
            'hover_featured_image' => 'products/tai-nghe-epos-sennheiser-adapt-260.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 15,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            'slug' => 'tai-nghe-bluetooth-khong-day-epos-sennheiser-adapt-260',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Jabra Biz 1100 USB Duo',
            'name' => 'Tai nghe Jabra Biz 1100 USB Duo',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'tai-nghe-jabra-biz-1100-usb-duo',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'MRD-QD001',
            'name' => 'Cáp tai nghe 3.5mm MRD-QD001',
            'insurance' => '3 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'cap-tai-nghe-35mm-mrd-qd001',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Epos-Sennheiser Adapt 260',
            'name' => 'Tai nghe Bluetooth không dây Epos-Sennheiser Adapt 260',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 250000,
            'sale_price' => 250000,
            'hover_featured_image' => 'products/tai-nghe-epos-sennheiser-adapt-260.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 15,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            'slug' => 'tai-nghe-bluetooth-khong-day-epos-sennheiser-adapt-260',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Jabra Biz 1100 USB Duo',
            'name' => 'Tai nghe Jabra Biz 1100 USB Duo',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'tai-nghe-jabra-biz-1100-usb-duo',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'MRD-QD001',
            'name' => 'Cáp tai nghe 3.5mm MRD-QD001',
            'insurance' => '3 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-Jabra-Biz-1100-USB-Duo.png',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'cap-tai-nghe-35mm-mrd-qd001',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'Epos-Sennheiser Adapt 260',
            'name' => 'Tai nghe Bluetooth không dây Epos-Sennheiser Adapt 260',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 250000,
            'sale_price' => 250000,
            'hover_featured_image' => 'products/tai-nghe-epos-sennheiser-adapt-260.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 15,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            'slug' => 'tai-nghe-bluetooth-khong-day-epos-sennheiser-adapt-260',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'CDX-901A',
            'name' => 'Điện thoại chuyên đụng khách sạn CDX-901A',
            'insurance' => '2 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Thiết kế tùy chỉnh Faceplate theo logo khách sạn
            – 10 phím chức năng có thể lập trình
            – Đèn báo sáng khi thông báo cuộc gọi đến
            – Bốn chế độ để điều chỉnh âm lượng chuông và chế độ rảnh tay
            – Chức năng rảnh tay, quay số lại, phím Redial
            – Bảo vệ sấm sét và chống EMI;
            – Chống thấm nước và chống ẩm ướt
            – Tương thích tất cả hệ thống tổng đài điện thoại analog
            – Lựa chọn 2 màu: đen và trắng”',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/dien-thoai-excelltel-cdx-901a_2.webp',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'djien-thoai-chuyen-djung-khach-san-cdx-901a',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Product::insert([
            'barcode' => null,
            'model' => 'MRD-QD001',
            'name' => 'Cáp tai nghe 3.5mm MRD-QD001',
            'insurance' => '3 năm',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => '– Sử dụng 2 bên tai
            – Tích hợp sẵn USB dongle, được tối ưu hóa UC và được Microsoft Teams chứng nhận.
            – Công nghệ Bluetooth – 5.0
            – Công nghệ Micrô- Chống ồn, khử tiếng ồn và lọc tiếng ồn xung quanh
            – Cần Micro có thể điều chỉnh vị trí linh hoạt theo ý muốn
            – Phạm vi không dây – 82ft
            – Thời gian đàm thoại – 27 giờ',
            'price' => 2250000,
            'sale_price' => 1250000,
            'hover_featured_image' => 'products/tai-nghe-adapt-presence-grey-business_1.jpg',
            'featured_image' => 'products/tai-nghe-Jabra-Evolve-30-Mono-UC-MS-loai-1-tai.jpg',
            'inventory_qty' => 25,
            'description_detail' => 'Tai nghe Jabra Evolve 30 Mono UC&MS loại 1 tai là tai nghe chuyên nghiệp được thiết kế đặc biệt để cải thiện các cuộc hội thoại. Micrô khử tiếng ồn hiện đại giúp loại bỏ tiếng ồn, do đó bạn có thể nghe nhiều hơn và tập trung tốt hơn vào cuộc trò chuyện.

            Tối ưu hóa cho Microsoft Skype for Business với bộ chuyển đổi USB cho phép tích hợp dễ dàng với PC và jack cắm 3,5mm để kết nối với điện thoại thông minh hoặc máy tính bảng của bạn.',
            'technical_statistics' => 'Tai nghe Jabra Evolve 30 Mono đi kèm với một bộ điều khiển giúp bạn thoải mái và dễ dàng thao tác các chức năng như chỉnh âm lượng và tắt tiếng. Bạn cũng có thể trả lời các cuộc gọi và từ chối cuộc gọi trực tiếp tại bộ điều khiển do đó làm tăng tính tiện lợi, do đó bạn có thể tập trung tốt hơn vào cuộc trò chuyện.',
            'star' => 5.00,
            'is_active' => 1,
            'featured' => 1,
            'category_id' => 2,
            'brand_id' => 2,
            'slug' => 'cap-tai-nghe-35mm-mrd-qd001',
            'origin_id' => null,
            'configuration_id' => null,
            'feature_id' => null,
            'title_seo' => null,
            'meta_des' => null,
            'meta_key' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}