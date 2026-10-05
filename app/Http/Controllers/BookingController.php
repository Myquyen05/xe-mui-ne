<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'pickup_point' => 'required|string',
            'dropoff_point' => 'required|string',
            'pickup_time' => 'required',
            'car_type' => 'required|in:4c,7c,16c,convenient',
            'note' => 'nullable|string',
        ]);

        Lead::create($validated);

        return back()->with('success', 'Đặt xe thành công! Điều hành sẽ liên hệ với bạn trong ít phút để chốt xe.');
    }
}