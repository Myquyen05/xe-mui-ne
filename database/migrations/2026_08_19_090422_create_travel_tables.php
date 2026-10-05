<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        // 1. Tuyến đường & Bảng giá xe
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('origin');
            $table->string('destination');
            $table->decimal('price_4c', 12, 0)->nullable();
            $table->decimal('price_7c', 12, 0)->nullable();
            $table->decimal('price_16c', 12, 0)->nullable();
            $table->string('duration')->nullable();
            $table->string('distance')->nullable();
            $table->text('description')->nullable();
            $table->longText('content')->nullable();
            $table->boolean('is_popular')->default(false);
            $table->timestamps();
        });

        // 2. Danh mục dịch vụ / bài viết
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->enum('type', ['service', 'blog'])->default('blog');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // 3. Bài viết & Cẩm nang du lịch
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('thumbnail')->nullable();
            $table->text('summary')->nullable();
            $table->longText('content');
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });

        // 4. Đơn đặt xe (Leads)
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('phone', 20);
            $table->string('pickup_point');
            $table->string('dropoff_point');
            $table->dateTime('pickup_time');
            $table->enum('car_type', ['4c', '7c', '16c', 'convenient']);
            $table->text('note')->nullable();
            $table->enum('status', ['new', 'contacted', 'confirmed', 'canceled'])->default('new');
            $table->timestamps();
        });

        // 5. Banners quảng cáo
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('link')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 6. Cài đặt hệ thống (Hotline, Zalo...)
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('settings');
        Schema::dropIfExists('banners');
        Schema::dropIfExists('leads');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('routes');
    }
};