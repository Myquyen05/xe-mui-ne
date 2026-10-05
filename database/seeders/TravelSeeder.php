<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Route;
use App\Models\Category;

class TravelSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Danh mục dịch vụ & bài viết
        $categories = [
            ['name' => 'Xe Tiện Chuyến', 'slug' => 'xe-tien-chuyen', 'type' => 'service', 'description' => 'Dịch vụ xe ghép, xe tiện chuyến giá rẻ'],
            ['name' => 'Thuê Xe Hợp Đồng 4 Chỗ', 'slug' => 'thue-xe-4-cho', 'type' => 'service', 'description' => 'Xe riêng đời mới 4 chỗ sedan'],
            ['name' => 'Thuê Xe Hợp Đồng 7 Chỗ', 'slug' => 'thue-xe-7-cho', 'type' => 'service', 'description' => 'Xe gia đình 7 chỗ rộng rãi Xpander, Fortuner'],
            ['name' => 'Thuê Xe Du Lịch 16 Chỗ', 'slug' => 'thue-xe-16-cho', 'type' => 'service', 'description' => 'Xe đoàn Ford Transit, Solati cao cấp'],
            ['name' => 'Tour Xe Jeep Mũi Né', 'slug' => 'tour-xe-jeep-mui-ne', 'type' => 'service', 'description' => 'Khám phá Đồi Cát Trắng, Suối Tiên, Làng Chài'],
            ['name' => 'Xe Đưa Đón Sân Bay', 'slug' => 'xe-san-bay', 'type' => 'service', 'description' => 'Đón trả tận nơi Tân Sơn Nhất, Cam Ranh, Liên Khương'],
            ['name' => 'Cẩm Nang Du Lịch Mũi Né', 'slug' => 'cam-nang-du-lich', 'type' => 'blog', 'description' => 'Kinh nghiệm ăn chơi, nghỉ dưỡng Mũi Né - Phan Thiết'],
            ['name' => 'Tin Tức Tuyến Đường', 'slug' => 'tin-tuc-tuyen-duong', 'type' => 'blog', 'description' => 'Thông tin cao tốc Phan Thiết - Dầu Giây, Vĩnh Hảo'],
        ];

        foreach ($categories as $cat) {
            Category::updateOrCreate(['slug' => $cat['slug']], $cat);
        }

        // 2. 18 Tuyến xe trọng điểm
        $routes = [
            ['name' => 'Sài Gòn ⇄ Mũi Né', 'slug' => 'sai-gon-mui-ne', 'origin' => 'Sài Gòn / Tân Sơn Nhất', 'destination' => 'Mũi Né / Phan Thiết', 'price_4c' => 1200000, 'price_7c' => 1400000, 'price_16c' => 2400000, 'duration' => '2.5 giờ', 'distance' => '200 km', 'is_popular' => true],
            ['name' => 'Mũi Né ⇄ Sài Gòn (Tiện Chuyến)', 'slug' => 'mui-ne-sai-gon-tien-chuyen', 'origin' => 'Mũi Né', 'destination' => 'Sài Gòn', 'price_4c' => 900000, 'price_7c' => 1100000, 'price_16c' => 2000000, 'duration' => '2.5 giờ', 'distance' => '200 km', 'is_popular' => true],
            ['name' => 'Sân Bay Cam Ranh ⇄ Mũi Né', 'slug' => 'cam-ranh-mui-ne', 'origin' => 'Sân Bay Cam Ranh / Nha Trang', 'destination' => 'Mũi Né', 'price_4c' => 1400000, 'price_7c' => 1600000, 'price_16c' => 2800000, 'duration' => '3 giờ', 'distance' => '210 km', 'is_popular' => true],
            ['name' => 'Mũi Né ⇄ Đà Lạt', 'slug' => 'mui-ne-da-lat', 'origin' => 'Mũi Né', 'destination' => 'Đà Lạt', 'price_4c' => 1300000, 'price_7c' => 1500000, 'price_16c' => 2600000, 'duration' => '3.5 giờ', 'distance' => '160 km', 'is_popular' => true],
            ['name' => 'Sài Gòn ⇄ Phan Thiết', 'slug' => 'sai-gon-phan-thiet', 'origin' => 'Sài Gòn', 'destination' => 'TP. Phan Thiết', 'price_4c' => 1100000, 'price_7c' => 1300000, 'price_16c' => 2300000, 'duration' => '2 giờ', 'distance' => '180 km', 'is_popular' => true],
            ['name' => 'Sân Bay Tân Sơn Nhất ⇄ Mũi Né', 'slug' => 'tan-son-nhat-mui-ne', 'origin' => 'Sân Bay Tân Sơn Nhất (SGN)', 'destination' => 'Resort Mũi Né', 'price_4c' => 1300000, 'price_7c' => 1500000, 'price_16c' => 2500000, 'duration' => '2.5 giờ', 'distance' => '205 km', 'is_popular' => true],
            ['name' => 'Mũi Né ⇄ Vũng Tàu', 'slug' => 'mui-ne-vung-tau', 'origin' => 'Mũi Né', 'destination' => 'Vũng Tàu / Hồ Tràm', 'price_4c' => 1400000, 'price_7c' => 1600000, 'price_16c' => 2800000, 'duration' => '3.5 giờ', 'distance' => '175 km', 'is_popular' => false],
            ['name' => 'Mũi Né ⇄ Phan Rang (Tháp Chàm)', 'slug' => 'mui-ne-phan-rang', 'origin' => 'Mũi Né', 'destination' => 'Phan Rang - Tháp Chàm', 'price_4c' => 1100000, 'price_7c' => 1300000, 'price_16c' => 2200000, 'duration' => '2 giờ', 'distance' => '140 km', 'is_popular' => false],
            ['name' => 'Sài Gòn ⇄ La Gi (Bình Thuận)', 'slug' => 'sai-gon-la-gi', 'origin' => 'Sài Gòn', 'destination' => 'Thị xã La Gi', 'price_4c' => 1100000, 'price_7c' => 1300000, 'price_16c' => 2200000, 'duration' => '2.5 giờ', 'distance' => '155 km', 'is_popular' => false],
            ['name' => 'Mũi Né ⇄ Nha Trang', 'slug' => 'mui-ne-nha-trang', 'origin' => 'Mũi Né', 'destination' => 'TP. Nha Trang', 'price_4c' => 1500000, 'price_7c' => 1700000, 'price_16c' => 3000000, 'duration' => '3.5 giờ', 'distance' => '230 km', 'is_popular' => false],
            ['name' => 'Sài Gòn ⇄ Hồ Tràm / Xuyên Mộc', 'slug' => 'sai-gon-ho-tram', 'origin' => 'Sài Gòn', 'destination' => 'Hồ Tràm / Bình Châu', 'price_4c' => 1000000, 'price_7c' => 1200000, 'price_16c' => 2100000, 'duration' => '2 giờ', 'distance' => '120 km', 'is_popular' => false],
            ['name' => 'Mũi Né ⇄ Sân Bay Liên Khương', 'slug' => 'mui-ne-lien-khuong', 'origin' => 'Mũi Né', 'destination' => 'Sân Bay Liên Khương', 'price_4c' => 1200000, 'price_7c' => 1400000, 'price_16c' => 2500000, 'duration' => '3 giờ', 'distance' => '130 km', 'is_popular' => false],
            ['name' => 'Phan Thiết ⇄ Tuy Phong / Cổ Thạch', 'slug' => 'phan-thiet-co-thach', 'origin' => 'Phan Thiết', 'destination' => 'Chùa Cổ Thạch / Tuy Phong', 'price_4c' => 850000, 'price_7c' => 1000000, 'price_16c' => 1800000, 'duration' => '1.5 giờ', 'distance' => '90 km', 'is_popular' => false],
            ['name' => 'Mũi Né ⇄ Kê Gà (Hải Đăng)', 'slug' => 'mui-ne-ke-ga', 'origin' => 'Mũi Né', 'destination' => 'Mũi Kê Gà / Hàm Thuận Nam', 'price_4c' => 600000, 'price_7c' => 750000, 'price_16c' => 1400000, 'duration' => '1 giờ', 'distance' => '50 km', 'is_popular' => false],
            ['name' => 'Phan Thiết ⇄ Sài Gòn (Ghép Khách)', 'slug' => 'phan-thiet-sai-gon-ghep', 'origin' => 'Phan Thiết', 'destination' => 'Sài Gòn', 'price_4c' => 800000, 'price_7c' => 1000000, 'price_16c' => 1800000, 'duration' => '2 giờ', 'distance' => '180 km', 'is_popular' => false],
            ['name' => 'Sài Gòn ⇄ Phan Rang', 'slug' => 'sai-gon-phan-rang', 'origin' => 'Sài Gòn', 'destination' => 'Phan Rang', 'price_4c' => 2000000, 'price_7c' => 2300000, 'price_16c' => 3800000, 'duration' => '4.5 giờ', 'distance' => '330 km', 'is_popular' => false],
            ['name' => 'Mũi Né ⇄ Quy Nhơn', 'slug' => 'mui-ne-quy-nhon', 'origin' => 'Mũi Né', 'destination' => 'Quy Nhơn (Bình Định)', 'price_4c' => 3200000, 'price_7c' => 3600000, 'price_16c' => 5800000, 'duration' => '6.5 giờ', 'distance' => '440 km', 'is_popular' => false],
            ['name' => 'Tour Khám Phá Mũi Né Nửa Ngày', 'slug' => 'tour-mui-ne-nua-ngay', 'origin' => 'Khách sạn / Resort', 'destination' => 'Đồi Cát - Suối Tiên - Bàu Trắng', 'price_4c' => 550000, 'price_7c' => 650000, 'price_16c' => 1200000, 'duration' => '4.5 giờ', 'distance' => '60 km', 'is_popular' => true],
        ];

        foreach ($routes as $route) {
            Route::updateOrCreate(['slug' => $route['slug']], $route);
        }
    }
}