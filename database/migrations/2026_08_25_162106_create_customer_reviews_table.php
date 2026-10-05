<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customer_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('country')->nullable(); // Quốc tịch khách (VD: UK, France, Australia...)
            $table->string('route_name')->nullable(); // Tuyến đi (VD: Saigon - Mui Ne)
            $table->text('review_text'); // Nội dung đánh giá
            $table->string('image')->nullable(); // Ảnh chụp thực tế của khách/xe
            $table->integer('rating')->default(5); // Số sao đánh giá (1-5)
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_reviews');
    }
};
