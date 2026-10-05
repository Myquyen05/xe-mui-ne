<?php

namespace App\Filament\Widgets;

use App\Models\Lead;
use App\Models\Route;
use App\Models\Post;
use App\Models\Video;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $leadsCount = class_exists(Lead::class) ? Lead::count() : 0;
        $routesCount = class_exists(Route::class) ? Route::count() : 0;
        $postsCount = class_exists(Post::class) ? Post::count() : 0;
        $videosCount = class_exists(Video::class) ? Video::count() : 0;

        return [
            Stat::make('Yêu Cầu Đặt Xe', $leadsCount)
                ->description('Khách gửi form từ website')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('danger')
                ->chart([7, 3, 10, 5, 15, 12, 18]),

            Stat::make('Tuyến Xe Đang Chạy', $routesCount)
                ->description('18 tuyến trọng điểm')
                ->descriptionIcon('heroicon-m-map')
                ->color('primary'),

            Stat::make('Cẩm Nang / Bài Viết', $postsCount)
                ->description('Bài viết SEO & kinh nghiệm')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('warning'),

            Stat::make('Video Trải Nghiệm', $videosCount)
                ->description('Video thực tế trên web')
                ->descriptionIcon('heroicon-m-video-camera')
                ->color('success'),
        ];
    }
}
