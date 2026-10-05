<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/bang-gia', [HomeController::class, 'pricingPage'])->name('pricing');
Route::get('/bang-gia/{slug}', [HomeController::class, 'routeDetail'])->name('routes.show');
Route::get('/tin-tuc', [HomeController::class, 'blog'])->name('posts.index');
Route::get('/tin-tuc/{slug}', [HomeController::class, 'postDetail'])->name('posts.show');
Route::get('/lien-he', [HomeController::class, 'contact'])->name('contact');

Route::post('/dat-xe', [BookingController::class, 'store'])->name('booking.store');