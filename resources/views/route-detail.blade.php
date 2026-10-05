<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $route->name }} - Bảng Giá & Đặt Xe Nhanh</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        html { scroll-behavior: smooth; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased font-sans flex flex-col min-h-screen">

    <!-- TOPBAR -->
    <div class="bg-[#0f3460] text-white text-xs md:text-sm py-2 px-4 border-b border-blue-950">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-4 text-slate-200">
                <span><i class="fa-solid fa-clock text-amber-400 mr-1"></i> Phục vụ 24/7 (Cả Lễ, Tết)</span>
                <span class="hidden sm:inline"><i class="fa-solid fa-shield-halved text-amber-400 mr-1"></i> Xe đời mới - Đi cao tốc 2h15p</span>
            </div>
            <div class="flex items-center gap-4">
                <a href="tel:0375391498" class="font-bold text-amber-300 hover:text-white transition flex items-center gap-1">
                    <i class="fa-solid fa-phone-volume text-amber-400 animate-pulse"></i> Đặt xe: 037 539 1498
                </a>
                <span class="text-slate-500">|</span>
                <a href="tel:0876226227" class="font-bold text-amber-300 hover:text-white transition flex items-center gap-1">
                    <i class="fa-solid fa-headset text-amber-400"></i> Hotline: 037 539 1498
                </a>
            </div>
        </div>
    </div>

    <!-- NAVBAR -->
    <header class="bg-white shadow sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <a href="/" class="flex items-center gap-2 text-2xl font-black text-[#134e8e] tracking-tight">
                <i class="fa-solid fa-car-side text-amber-500"></i> XE MŨI NÉ
            </a>
            <nav class="hidden lg:flex items-center gap-6 font-semibold text-slate-700 text-sm">
                <a href="/" class="hover:text-[#134e8e] transition">Trang Chủ</a>
                <a href="/bang-gia" class="text-[#134e8e] font-bold">Bảng Giá Tuyến</a>
                <a href="/tin-tuc" class="hover:text-[#134e8e] transition">Cẩm Nang Du Lịch</a>
                <a href="/lien-he" class="hover:text-[#134e8e] transition">Liên Hệ</a>
            </nav>
            <a href="/#booking" class="bg-amber-500 hover:bg-amber-600 text-[#0f3460] px-4 py-2 rounded-xl font-bold text-xs md:text-sm shadow-md transition flex items-center gap-1.5">
                <i class="fa-solid fa-bolt"></i> Đặt Xe Nhanh
            </a>
        </div>
    </header>

    <!-- BREADCRUMBS -->
    <div class="bg-slate-100 border-b border-slate-200 py-3 px-4 text-xs">
        <div class="max-w-7xl mx-auto flex items-center gap-2 text-slate-500">
            <a href="/" class="hover:text-[#134e8e] flex items-center gap-1"><i class="fa-solid fa-house"></i> Trang chủ</a>
            <span>/</span>
            <a href="/bang-gia" class="hover:text-[#134e8e]">Bảng giá</a>
            <span>/</span>
            <span class="text-slate-800 font-semibold truncate">{{ $route->name }}</span>
        </div>
    </div>

    <!-- NỘI DUNG CHI TIẾT TUYẾN (LAYOUT 2 CỘT) -->
    <main class="max-w-7xl mx-auto px-4 py-10 flex-1 w-full grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <!-- CỘT TRÁI: THÔNG TIN CHI TIẾT & BẢNG GIÁ -->
        <div class="lg:col-span-7 space-y-6">
            
            <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200 shadow-sm space-y-4">
                <span class="inline-block bg-[#134e8e]/10 text-[#134e8e] text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                    Lộ Trình Trọng Điểm
                </span>
                <h1 class="text-2xl md:text-3xl font-extrabold text-slate-900 leading-tight">
                    Tuyến Xe {{ $route->name }}
                </h1>
                
                <div class="flex flex-wrap gap-4 text-xs md:text-sm text-slate-600 pt-2 border-t border-b py-3">
                    <div class="flex items-center gap-1.5"><i class="fa-solid fa-location-dot text-amber-500"></i> Điểm đón: <strong>{{ $route->origin }}</strong></div>
                    <div class="flex items-center gap-1.5"><i class="fa-solid fa-flag-checkered text-emerald-600"></i> Điểm đến: <strong>{{ $route->destination }}</strong></div>
                    <div class="flex items-center gap-1.5"><i class="fa-regular fa-clock text-blue-600"></i> Thời gian: <strong>{{ $route->duration ?? '2 - 3h' }}</strong></div>
                    <div class="flex items-center gap-1.5"><i class="fa-solid fa-road text-slate-400"></i> Cự ly: <strong>{{ $route->distance ?? '180km' }}</strong></div>
                </div>

                <!-- Bảng giá xe chi tiết -->
                <div class="space-y-3 pt-2">
                    <h3 class="font-bold text-slate-900 text-sm uppercase tracking-wider">Bảng Giá Trọn Gói Theo Dòng Xe:</h3>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div class="bg-slate-50 p-4 rounded-2xl border border-slate-200 text-center space-y-1">
                            <i class="fa-solid fa-car text-rose-500 text-xl"></i>
                            <h4 class="font-bold text-xs text-slate-700">Xe 4 Chỗ</h4>
                            <p class="text-[11px] text-slate-500">Vios, Accent, City</p>
                            <p class="text-sm font-extrabold text-red-600 pt-1">{{ number_format($route->price_4c, 0, ',', '.') }} đ</p>
                        </div>
                        <div class="bg-amber-50/60 p-4 rounded-2xl border border-amber-200 text-center space-y-1">
                            <i class="fa-solid fa-car-side text-sky-600 text-xl"></i>
                            <h4 class="font-bold text-xs text-slate-700">Xe 7 Chỗ</h4>
                            <p class="text-[11px] text-slate-500">Xpander, Fortuner</p>
                            <p class="text-sm font-extrabold text-red-600 pt-1">{{ number_format($route->price_7c, 0, ',', '.') }} đ</p>
                        </div>
                        <div class="bg-slate-50 p-4 rounded-2xl border border-slate-200 text-center space-y-1">
                            <i class="fa-solid fa-van-shuttle text-blue-700 text-xl"></i>
                            <h4 class="font-bold text-xs text-slate-700">Xe 16 Chỗ</h4>
                            <p class="text-[11px] text-slate-500">Transit, Solati</p>
                            <p class="text-sm font-extrabold text-red-600 pt-1">{{ number_format($route->price_16c, 0, ',', '.') }} đ</p>
                        </div>
                    </div>
                </div>

                <!-- Cam kết chất lượng -->
                <div class="bg-slate-50 rounded-2xl p-4 border border-slate-200 text-xs text-slate-600 space-y-2 mt-4">
                    <p class="font-bold text-slate-800">Ưu đãi khi đặt tuyến {{ $route->name }}:</p>
                    <ul class="space-y-1 list-disc list-inside">
                        <li>Miễn phí toàn bộ phí qua trạm BOT và vé vào cổng sân bay.</li>
                        <li>Đón trả tận nơi tại sảnh khách sạn, resort, nhà riêng không tính thêm phụ phí.</li>
                        <li>Tài xế chuyên nghiệp, chạy đúng tốc độ quy định, lịch sự và chu đáo.</li>
                    </ul>
                </div>
            </div>

            <!-- Các tuyến liên quan khác -->
            @if(isset($otherRoutes) && $otherRoutes->count() > 0)
            <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm space-y-4">
                <h3 class="font-bold text-slate-900 text-sm uppercase tracking-wider">Tuyến Xe Phổ Biến Khác</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
                    @foreach($otherRoutes as $other)
                    <a href="{{ route('routes.show', $other->slug) }}" class="p-3 rounded-xl border border-slate-200 hover:border-[#134e8e] hover:bg-blue-50/50 transition flex items-center justify-between">
                        <span class="font-semibold text-slate-800">{{ $other->name }}</span>
                        <span class="font-bold text-red-600">{{ number_format($other->price_4c, 0, ',', '.') }}đ</span>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif

        </div>

        <!-- CỘT PHẢI: FORM ĐẶT XE TRỰC TIẾP CHO TUYẾN NÀY -->
        <div class="lg:col-span-5">
            <div class="bg-white rounded-3xl p-6 md:p-8 shadow-xl border border-slate-200 sticky top-24 space-y-4">
                <div class="border-b border-slate-100 pb-3">
                    <h3 class="text-lg font-bold text-[#0f3460]">Đặt Xe Nhanh Tuyến Này</h3>
                    <p class="text-xs text-slate-500">Tài xế & điều hành sẽ gọi xác nhận trong vòng 5 phút</p>
                </div>

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2.5 rounded-xl text-xs font-medium flex items-center gap-2">
                        <i class="fa-solid fa-circle-check text-green-600"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('booking.store') }}" method="POST" class="space-y-3">
                    @csrf
                    <div>
                        <label class="block text-[11px] font-bold text-slate-600 uppercase mb-1">Họ tên của bạn *</label>
                        <input type="text" name="customer_name" required placeholder="Nguyễn Văn A" class="w-full border border-slate-300 rounded-xl p-2.5 focus:ring-2 focus:ring-amber-500 focus:outline-none text-xs md:text-sm">
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold text-slate-600 uppercase mb-1">Số điện thoại / Zalo *</label>
                        <input type="tel" name="phone" required placeholder="09xxxxxxxx" class="w-full border border-slate-300 rounded-xl p-2.5 focus:ring-2 focus:ring-amber-500 focus:outline-none text-xs md:text-sm">
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-[11px] font-bold text-slate-600 uppercase mb-1">Điểm đón *</label>
                            <input type="text" name="pickup_point" required value="{{ $route->origin }}" class="w-full border border-slate-300 rounded-xl p-2.5 focus:ring-2 focus:ring-amber-500 focus:outline-none text-xs md:text-sm bg-slate-50">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-slate-600 uppercase mb-1">Điểm đến *</label>
                            <input type="text" name="dropoff_point" required value="{{ $route->destination }}" class="w-full border border-slate-300 rounded-xl p-2.5 focus:ring-2 focus:ring-amber-500 focus:outline-none text-xs md:text-sm bg-slate-50">
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-[11px] font-bold text-slate-600 uppercase mb-1">Thời gian đón *</label>
                            <input type="datetime-local" name="pickup_time" required class="w-full border border-slate-300 rounded-xl p-2.5 focus:ring-2 focus:ring-amber-500 focus:outline-none text-xs md:text-sm">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-slate-600 uppercase mb-1">Loại xe *</label>
                            <select name="car_type" class="w-full border border-slate-300 rounded-xl p-2.5 focus:ring-2 focus:ring-amber-500 focus:outline-none text-xs md:text-sm bg-white">
                                <option value="4c">Xe 4 Chỗ</option>
                                <option value="7c" selected>Xe 7 Chỗ</option>
                                <option value="16c">Xe 16 Chỗ</option>
                                <option value="convenient">Xe Tiện Chuyến</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold text-slate-600 uppercase mb-1">Ghi chú (địa chỉ đón cụ thể, giờ bay...)</label>
                        <input type="text" name="note" placeholder="Nhập địa chỉ nhà/resort..." class="w-full border border-slate-300 rounded-xl p-2.5 focus:ring-2 focus:ring-amber-500 focus:outline-none text-xs md:text-sm">
                    </div>

                    <button type="submit" class="w-full bg-amber-500 hover:bg-amber-600 text-[#0f3460] font-black py-3 rounded-xl shadow-lg transition duration-200 uppercase tracking-wide text-xs md:text-sm flex items-center justify-center gap-2">
                        <i class="fa-solid fa-paper-plane"></i> Xác Nhận Đặt Tuyến Này
                    </button>
                </form>

                <div class="pt-2 border-t border-slate-100 flex items-center justify-center gap-4 text-xs font-bold">
                    <a href="tel:0375391498" class="text-red-600 flex items-center gap-1 hover:underline"><i class="fa-solid fa-phone"></i> 037 539 1498</a>
                    <span class="text-slate-300">|</span>
                    <a href="https://zalo.me/0375391498" target="_blank" class="text-sky-600 flex items-center gap-1 hover:underline"><i class="fa-solid fa-comment-dots"></i> Chat Zalo 24/7</a>
                </div>
            </div>
        </div>

    </main>

    <!-- FLOATING WIDGET -->
    <div class="fixed bottom-6 right-6 flex flex-col gap-3 z-50">
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="w-12 h-12 bg-slate-800 text-white rounded-full flex items-center justify-center shadow-xl hover:bg-slate-700 transition" title="Lên đầu trang">
            <i class="fa-solid fa-arrow-up"></i>
        </button>
        <a href="https://zalo.me/0375391498" target="_blank" class="w-12 h-12 bg-sky-600 text-white rounded-full flex items-center justify-center shadow-xl hover:scale-110 transition" title="Chat Zalo">
            <i class="fa-solid fa-comment-dots text-xl"></i>
        </a>
        <a href="tel:0375391498" class="w-12 h-12 bg-red-600 text-white rounded-full flex items-center justify-center shadow-2xl hover:scale-110 animate-bounce transition" title="Gọi ngay">
            <i class="fa-solid fa-phone text-xl"></i>
        </a>
    </div>

    <!-- FOOTER -->
    <footer class="bg-slate-900 text-slate-300 pt-12 pb-8 border-t border-slate-800 mt-12">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="space-y-3">
                <h3 class="text-xl font-bold text-white flex items-center gap-2">
                    <i class="fa-solid fa-car-side text-amber-500"></i> XE MŨI NÉ
                </h3>
                <p class="text-xs text-slate-400 leading-relaxed">
                    Dịch vụ xe du lịch riêng & tiện chuyến cao tốc chuyên tuyến Phan Thiết - Mũi Né - Sài Gòn - Đà Lạt - Nha Trang.
                </p>
            </div>
            <div>
                <h4 class="font-bold text-white mb-3 uppercase text-xs tracking-wider">Thông Tin Liên Hệ</h4>
                <ul class="text-xs space-y-2 text-slate-400">
                    <li><i class="fa-solid fa-phone text-amber-400 mr-2"></i> Hotline 1: <strong>037 539 1498</strong></li>
                    <li><i class="fa-solid fa-headset text-amber-400 mr-2"></i> Hotline 2: <strong>0876.226.227</strong></li>
                    <li><i class="fa-solid fa-location-dot text-amber-400 mr-2"></i> Trụ sở: TP. Phan Thiết, Bình Thuận</li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-white mb-3 uppercase text-xs tracking-wider">Dịch Vụ Trọng Điểm</h4>
                <ul class="text-xs space-y-2 text-slate-400">
                    <li><a href="/bang-gia" class="hover:text-white transition">Xe riêng Sài Gòn ⇄ Mũi Né</a></li>
                    <li><a href="/bang-gia" class="hover:text-white transition">Đưa đón sân bay Tân Sơn Nhất</a></li>
                    <li><a href="/bang-gia" class="hover:text-white transition">Xe ghép tiện chuyến tiết kiệm</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-white mb-3 uppercase text-xs tracking-wider">Cam Kết Khách Hàng</h4>
                <ul class="text-xs space-y-2 text-slate-400">
                    <li>✓ 100% xe đời mới sang trọng, mát lạnh</li>
                    <li>✓ Không phụ thu phí cầu đường cao tốc</li>
                    <li>✓ Tài xế đón đúng giờ, lịch sự, chu đáo</li>
                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 mt-8 pt-6 border-t border-slate-800 text-center text-xs text-slate-500">
            © {{ date('Y') }} Xe Mũi Né. Toàn quyền bảo lưu thương hiệu.
        </div>
    </footer>

</body>
</html>