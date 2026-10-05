<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerReview extends Model
{
    protected $guarded = [];

    // Tự động chuyển đổi cột image thành mảng JSON
    protected $casts = [
        'image' => 'array',
    ];
}
