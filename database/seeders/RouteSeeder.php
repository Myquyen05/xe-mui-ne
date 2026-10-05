<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Route;

class RouteSeeder extends Seeder
{
    public function run(): void
    {
        $routes = [
            ['name' => 'Sài Gòn ⇄ Phan Thiết', 'slug' => 'sai-gon-phan-thiet', 'origin' => 'TP. Hồ Chí Minh', 'destination' => 'TP. Phan Thiết', 'price_4c' => 1400000, 'price_7c' => 1600000, 'price_16c' => 2500000, 'distance' => '180 km', 'duration' => '2h15p', 'is_popular' => true],
            ['name' => 'Sài Gòn ⇄ Mũi Né', 'slug' => 'sai-gon-mui-ne', 'origin' => 'TP. Hồ Chí Minh', 'destination' => 'Mũi Né', 'price_4c' => 1500000, 'price_7c' => 1700000, 'price_16c' => 2700000, 'distance' => '200 km', 'duration' => '2h30p', 'is_popular' => true],
            ['name' => 'Sân Bay Tân Sơn Nhất ⇄ Mũi Né', 'slug' => 'san-bay-tan-son-nhat-mui-ne', 'origin' => 'Sân Bay Tân Sơn Nhất', 'destination' => 'Mũi Né', 'price_4c' => 1550000, 'price_7c' => 1750000, 'price_16c' => 2800000, 'distance' => '205 km', 'duration' => '2h30p', 'is_popular' => true],
            ['name' => 'Sài Gòn ⇄ NovaWorld Phan Thiết', 'slug' => 'sai-gon-novaworld-phan-thiet', 'origin' => 'TP. Hồ Chí Minh', 'destination' => 'NovaWorld Tiến Thành', 'price_4c' => 1400000, 'price_7c' => 1600000, 'price_16c' => 2600000, 'distance' => '175 km', 'duration' => '2h10p', 'is_popular' => true],
            ['name' => 'Sài Gòn ⇄ Thị xã La Gi', 'slug' => 'sai-gon-la-gi', 'origin' => 'TP. Hồ Chí Minh', 'destination' => 'Thị xã La Gi', 'price_4c' => 1300000, 'price_7c' => 1500000, 'price_16c' => 2400000, 'distance' => '150 km', 'duration' => '2h00p', 'is_popular' => false],
            ['name' => 'Sài Gòn ⇄ Hải Đăng Kê Gà', 'slug' => 'sai-gon-ke-ga', 'origin' => 'TP. Hồ Chí Minh', 'destination' => 'Hàm Thuận Nam (Kê Gà)', 'price_4c' => 1350000, 'price_7c' => 1550000, 'price_16c' => 2500000, 'distance' => '160 km', 'duration' => '2h10p', 'is_popular' => false],
            ['name' => 'Mũi Né ⇄ Sân Bay Cam Ranh', 'slug' => 'mui-ne-san-bay-cam-ranh', 'origin' => 'Mũi Né', 'destination' => 'Sân Bay Cam Ranh', 'price_4c' => 1600000, 'price_7c' => 1800000, 'price_16c' => 2900000, 'distance' => '190 km', 'duration' => '2h45p', 'is_popular' => true],
            ['name' => 'Mũi Né ⇄ TP. Nha Trang', 'slug' => 'mui-ne-nha-trang', 'origin' => 'Mũi Né', 'destination' => 'TP. Nha Trang', 'price_4c' => 1700000, 'price_7c' => 1900000, 'price_16c' => 3100000, 'distance' => '220 km', 'duration' => '3h15p', 'is_popular' => true],
            ['name' => 'Mũi Né ⇄ TP. Đà Lạt', 'slug' => 'mui-ne-da-lat', 'origin' => 'Mũi Né', 'destination' => 'TP. Đà Lạt', 'price_4c' => 1500000, 'price_7c' => 1700000, 'price_16c' => 2800000, 'distance' => '160 km', 'duration' => '3h30p', 'is_popular' => true],
            ['name' => 'Mũi Né ⇄ Sân Bay Liên Khương', 'slug' => 'mui-ne-san-bay-lien-khuong', 'origin' => 'Mũi Né', 'destination' => 'Sân Bay Liên Khương', 'price_4c' => 1450000, 'price_7c' => 1650000, 'price_16c' => 2700000, 'distance' => '135 km', 'duration' => '3h00p', 'is_popular' => false],
            ['name' => 'Mũi Né ⇄ TP. Vũng Tàu', 'slug' => 'mui-ne-vung-tau', 'origin' => 'Mũi Né', 'destination' => 'TP. Vũng Tàu', 'price_4c' => 1600000, 'price_7c' => 1800000, 'price_16c' => 2900000, 'distance' => '175 km', 'duration' => '3h15p', 'is_popular' => false],
            ['name' => 'Mũi Né ⇄ Hồ Tràm / Bình Châu', 'slug' => 'mui-ne-ho-tram', 'origin' => 'Mũi Né', 'destination' => 'Hồ Tràm (Xuyên Mộc)', 'price_4c' => 1400000, 'price_7c' => 1600000, 'price_16c' => 2600000, 'distance' => '130 km', 'duration' => '2h30p', 'is_popular' => false],
            ['name' => 'Phan Thiết ⇄ Phan Rang Tháp Chàm', 'slug' => 'phan-thiet-phan-rang', 'origin' => 'TP. Phan Thiết', 'destination' => 'TP. Phan Rang', 'price_4c' => 1300000, 'price_7c' => 1500000, 'price_16c' => 2400000, 'distance' => '145 km', 'duration' => '2h00p', 'is_popular' => false],
            ['name' => 'Phan Thiết ⇄ Bàu Trắng (Tour Xe Jeep)', 'slug' => 'phan-thiet-bau-trang', 'origin' => 'TP. Phan Thiết', 'destination' => 'Đồi Cát Trắng (Bắc Bình)', 'price_4c' => 600000, 'price_7c' => 750000, 'price_16c' => 1200000, 'distance' => '45 km', 'duration' => '45p', 'is_popular' => true],
            ['name' => 'Phan Thiết ⇄ Chùa Cổ Thạch', 'slug' => 'phan-thiet-co-thach', 'origin' => 'TP. Phan Thiết', 'destination' => 'Chùa Cổ Thạch (Tuy Phong)', 'price_4c' => 900000, 'price_7c' => 1100000, 'price_16c' => 1800000, 'distance' => '90 km', 'duration' => '1h30p', 'is_popular' => false],
            ['name' => 'Sài Gòn ⇄ TP. Nha Trang', 'slug' => 'sai-gon-nha-trang', 'origin' => 'TP. Hồ Chí Minh', 'destination' => 'TP. Nha Trang', 'price_4c' => 3200000, 'price_7c' => 3600000, 'price_16c' => 5200000, 'distance' => '400 km', 'duration' => '5h30p', 'is_popular' => false],
            ['name' => 'Sài Gòn ⇄ TP. Đà Lạt', 'slug' => 'sai-gon-da-lat', 'origin' => 'TP. Hồ Chí Minh', 'destination' => 'TP. Đà Lạt', 'price_4c' => 2600000, 'price_7c' => 2900000, 'price_16c' => 4500000, 'distance' => '300 km', 'duration' => '5h30p', 'is_popular' => false],
            ['name' => 'Sài Gòn ⇄ TP. Vũng Tàu', 'slug' => 'sai-gon-vung-tau', 'origin' => 'TP. Hồ Chí Minh', 'destination' => 'TP. Vũng Tàu', 'price_4c' => 950000, 'price_7c' => 1150000, 'price_16c' => 1850000, 'distance' => '100 km', 'duration' => '1h45p', 'is_popular' => false],
        ];

        foreach ($routes as $route) {
            Route::updateOrCreate(['slug' => $route['slug']], $route);
        }
    }
}
