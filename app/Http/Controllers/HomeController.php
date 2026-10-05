<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\Category;
use App\Models\Post;
use App\Models\Banner;
use App\Models\Video;
use App\Models\CustomerReview; // Đã sửa lỗi thừa chữ use ở đây
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $popularRoutes = Route::where('is_popular', true)->get();
        $allRoutes = Route::all();
        $categories = Category::where('type', 'service')->get();
        $posts = Post::where('is_published', true)->latest()->take(3)->get();
        $banner = Banner::where('is_active', true)->latest()->first();
        
        // Lấy danh sách video đang bật kích hoạt
        $videos = Video::where('is_active', true)->orderBy('sort_order')->take(6)->get();

        // Lấy danh sách trải nghiệm khách hàng đang bật kích hoạt
        $reviews = CustomerReview::where('is_active', true)->orderBy('sort_order')->get();

        // Đã thêm biến $reviews vào compact để truyền ra trang chủ
        return view('welcome', compact('popularRoutes', 'allRoutes', 'categories', 'posts', 'banner', 'videos', 'reviews'));
    }

    public function pricingPage()
    {
        $allRoutes = Route::all();
        return view('pricing', compact('allRoutes'));
    }

    public function routeDetail($slug)
    {
        $route = Route::where('slug', $slug)->firstOrFail();
        $otherRoutes = Route::where('id', '!=', $route->id)->take(6)->get();
        return view('route-detail', compact('route', 'otherRoutes'));
    }

    public function blog()
    {
        $posts = Post::where('is_published', true)->latest()->paginate(9);
        $categories = Category::all();
        return view('posts.index', compact('posts', 'categories'));
    }

    public function postDetail($slug)
    {
        $post = Post::where('slug', $slug)->where('is_published', true)->firstOrFail();
        $relatedPosts = Post::where('id', '!=', $post->id)->where('is_published', true)->take(4)->get();
        return view('posts.show', compact('post', 'relatedPosts'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function sitemap()
    {
        $routes = Route::all();
        $posts = Post::where('is_published', true)->get();

        return response()->view('sitemap', [
            'routes' => $routes,
            'posts' => $posts,
        ])->header('Content-Type', 'text/xml');
    }
}