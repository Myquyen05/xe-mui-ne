<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} - Xe Mũi Né</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        html { scroll-behavior: smooth; }
        .article-content p { margin-bottom: 1.25rem; line-height: 1.8; color: #334155; }
        .article-content h2 { font-size: 1.5rem; font-weight: 800; color: #0f3460; margin-top: 2rem; margin-bottom: 1rem; }
        .article-content h3 { font-size: 1.25rem; font-weight: 700; color: #134e8e; margin-top: 1.5rem; margin-bottom: 0.75rem; }
        .article-content ul { list-style-type: disc; padding-left: 1.5rem; margin-bottom: 1.25rem; }
        .article-content img { border-radius: 1rem; margin: 1.5rem auto; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1); }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased font-sans flex flex-col min-h-screen">

    <!-- 1. TOPBAR & 2 SỐ HOTLINE -->
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
                <a href="tel:0375391498" class="font-bold text-amber-300 hover:text-white transition flex items-center gap-1">
                    <i class="fa-solid fa-headset text-amber-400"></i> Hotline: 037 539 1498
                </a>
            </div>
        </div>
    </div>

    <!-- 2. NAVBAR CHÍNH -->
    <header class="bg-white shadow sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <a href="/" class="flex items-center gap-2 text-2xl font-black text-[#134e8e] tracking-tight">
                <i class="fa-solid fa-car-side text-amber-500"></i> XE MŨI NÉ
            </a>
            <nav class="hidden lg:flex items-center gap-6 font-semibold text-slate-700 text-sm">
                <a href="/" class="hover:text-[#134e8e] transition">Trang Chủ</a>
                <a href="/bang-gia" class="hover:text-[#134e8e] transition">Bảng Giá Tuyến</a>
                <a href="/tin-tuc" class="text-[#134e8e] font-bold border-b-2 border-[#134e8e] pb-0.5">Cẩm Nang Du Lịch</a>
                <a href="/lien-he" class="hover:text-[#134e8e] transition">Liên Hệ</a>
            </nav>
            <div class="flex items-center gap-3">
                <span class="hidden sm:inline-flex items-center gap-1 text-xs font-bold text-slate-600 bg-slate-100 px-2 py-1 rounded">
                    🇻🇳 VN
                </span>
                <a href="/#booking" class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-xl font-bold text-xs md:text-sm shadow-md transition flex items-center gap-1.5">
                    <i class="fa-solid fa-bolt"></i> Đặt Xe Nhanh
                </a>
            </div>
        </div>
    </header>

    <!-- 3. BREADCRUMBS -->
    <div class="bg-slate-100 border-b border-slate-200 py-3 px-4 text-xs">
        <div class="max-w-7xl mx-auto flex items-center gap-2 text-slate-500">
            <a href="/" class="hover:text-[#134e8e] flex items-center gap-1"><i class="fa-solid fa-house"></i> Trang chủ</a>
            <span>/</span>
            <a href="{{ route('posts.index') }}" class="hover:text-[#134e8e]">Cẩm nang du lịch</a>
            <span>/</span>
            <span class="text-slate-800 font-semibold truncate max-w-xs md:max-w-md">{{ $post->title }}</span>
        </div>
    </div>

    <!-- 4. THÂN BÀI VIẾT (LAYOUT 2 CỘT) -->
    <main class="max-w-7xl mx-auto px-4 py-10 flex-1 w-full grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <!-- CỘT NỘI DUNG CHÍNH (8 CỘT) -->
        <article class="lg:col-span-8 bg-white rounded-3xl p-6 md:p-10 shadow-sm border border-slate-200">
            <!-- Header bài viết -->
            <div class="border-b border-slate-100 pb-6 mb-6">
                @if($post->category)
                    <span class="inline-block bg-[#134e8e]/10 text-[#134e8e] text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-3">
                        {{ $post->category->name }}
                    </span>
                @endif
                <h1 class="text-2xl md:text-4xl font-extrabold text-slate-900 leading-tight mb-4">
                    {{ $post->title }}
                </h1>
                <div class="flex flex-wrap items-center gap-4 text-xs text-slate-400">
                    <span><i class="fa-regular fa-clock text-slate-400 mr-1"></i> Ngày đăng: {{ $post->created_at->format('d/m/Y H:i') }}</span>
                    <span><i class="fa-solid fa-user-shield text-slate-400 mr-1"></i> Tác giả: Ban Điều Hành Xe Mũi Né</span>
                </div>
            </div>

            <!-- Tóm tắt bài viết -->
            @if($post->summary)
                <div class="bg-slate-50 border-l-4 border-[#134e8e] p-4 rounded-r-xl text-slate-700 italic text-sm mb-6 leading-relaxed">
                    {{ $post->summary }}
                </div>
            @endif

            <!-- Ảnh đại diện bài viết -->
            @if($post->thumbnail)
                <div class="rounded-2xl overflow-hidden mb-8 shadow-sm">
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="w-full max-h-[450px] object-cover">
                </div>
            @endif

            <!-- Nội dung chi tiết bài viết -->
            <div class="article-content text-sm md:text-base">
                {!! nl2br(e($post->content)) !!}
            </div>

            <!-- Khung Kêu Gọi Đặt Xe Độc Quyền (Call To Action) -->
            <div class="mt-10 bg-gradient-to-br from-[#0f3460] to-[#134e8e] rounded-2xl p-6 md:p-8 text-white shadow-xl relative overflow-hidden">
                <div class="relative z-10 space-y-3 text-center md:text-left md:flex items-center justify-between gap-6">
                    <div class="space-y-1">
                        <span class="text-xs text-amber-400 font-bold uppercase tracking-wider">Dịch Vụ Xe Du Lịch Uy Tín</span>
                        <h3 class="text-xl md:text-2xl font-extrabold">Cần Đặt Xe Đi Mũi Né - Phan Thiết?</h3>
                        <p class="text-xs md:text-sm text-slate-200">Đón trả tận nơi tại nhà, resort, sân bay • Đi cao tốc 2h15p • Không phát sinh phụ phí</p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3 pt-3 md:pt-0 justify-center">
                        <a href="/#booking" class="bg-amber-500 hover:bg-amber-600 text-blue-950 font-black px-5 py-3 rounded-xl text-xs md:text-sm shadow-md transition whitespace-nowrap text-center">
                            <i class="fa-solid fa-paper-plane mr-1"></i> Đặt Xe Ngay
                        </a>
                        <a href="tel:0375391498" class="bg-white/20 hover:bg-white/30 backdrop-blur text-white font-bold px-4 py-3 rounded-xl text-xs md:text-sm transition border border-white/30 whitespace-nowrap text-center">
                            <i class="fa-solid fa-phone mr-1"></i> 037 539 1498
                        </a>
                    </div>
                </div>
            </div>
        </article>

        <!-- CỘT SIDEBAR BÊN PHẢI (4 CỘT) -->
        <aside class="lg:col-span-4 space-y-6">
            
            <!-- Box Hotline Hỗ Trợ Khẩn Cấp -->
            <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm text-center space-y-3">
                <div class="w-12 h-12 bg-amber-100 text-amber-600 rounded-full flex items-center justify-center mx-auto text-xl shadow-inner">
                    <i class="fa-solid fa-headset"></i>
                </div>
                <h4 class="font-bold text-slate-900 text-base">Tổng Đài Điều Hành 24/7</h4>
                <p class="text-xs text-slate-500">Tư vấn chọn loại xe phù hợp và báo giá nhanh trong 30 giây</p>
                <div class="pt-1 space-y-2">
                    <a href="tel:0375391498" class="block w-full bg-red-600 hover:bg-red-700 text-white font-bold py-2.5 rounded-xl text-xs md:text-sm shadow transition">
                        <i class="fa-solid fa-phone mr-1"></i> 037 539 1498
                    </a>
                    <a href="https://zalo.me/0375391498" target="_blank" class="block w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2.5 rounded-xl text-xs md:text-sm shadow transition">
                        <i class="fa-solid fa-comment-dots mr-1"></i> Chat Zalo Nhận Báo Giá
                    </a>
                </div>
            </div>

            <!-- Box Tuyến Đường Hot -->
            <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm space-y-4">
                <h4 class="font-bold text-slate-900 text-sm uppercase tracking-wider border-b border-slate-100 pb-2">
                    Tuyến Xe Trọng Điểm
                </h4>
                <ul class="text-xs space-y-2.5 text-slate-600">
                    <li class="flex items-center justify-between hover:text-[#134e8e] transition">
                        <a href="/bang-gia" class="flex items-center gap-1.5"><i class="fa-solid fa-car text-amber-500"></i> Sài Gòn ⇄ Mũi Né</a>
                        <span class="font-bold text-red-600">từ 1.400k</span>
                    </li>
                    <li class="flex items-center justify-between hover:text-[#134e8e] transition">
                        <a href="/bang-gia" class="flex items-center gap-1.5"><i class="fa-solid fa-car text-amber-500"></i> Sân Bay TSN ⇄ Phan Thiết</a>
                        <span class="font-bold text-red-600">từ 1.400k</span>
                    </li>
                    <li class="flex items-center justify-between hover:text-[#134e8e] transition">
                        <a href="/bang-gia" class="flex items-center gap-1.5"><i class="fa-solid fa-car text-amber-500"></i> Mũi Né ⇄ Đà Lạt</a>
                        <span class="font-bold text-red-600">từ 1.400k</span>
                    </li>
                    <li class="flex items-center justify-between hover:text-[#134e8e] transition">
                        <a href="/bang-gia" class="flex items-center gap-1.5"><i class="fa-solid fa-car text-amber-500"></i> Mũi Né ⇄ Vũng Tàu</a>
                        <span class="font-bold text-red-600">từ 1.400k</span>
                    </li>
                </ul>
            </div>

            <!-- Box Bài Viết Liên Quan -->
            @if(isset($relatedPosts) && $relatedPosts->count() > 0)
            <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm space-y-4">
                <h4 class="font-bold text-slate-900 text-sm uppercase tracking-wider border-b border-slate-100 pb-2">
                    Bài Viết Cùng Chủ Đề
                </h4>
                <div class="space-y-4">
                    @foreach($relatedPosts as $rel)
                    <div class="flex gap-3 items-center group">
                        <img src="{{ $rel->thumbnail ? asset('storage/' . $rel->thumbnail) : 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=200&q=80' }}" 
                             alt="{{ $rel->title }}" 
                             class="w-16 h-16 rounded-xl object-cover flex-shrink-0 group-hover:opacity-90 transition">
                        <div>
                            <h5 class="text-xs font-bold text-slate-800 line-clamp-2 group-hover:text-[#134e8e] transition">
                                <a href="{{ route('posts.show', $rel->slug) }}">{{ $rel->title }}</a>
                            </h5>
                            <span class="text-[10px] text-slate-400 mt-1 block">{{ $rel->created_at->format('d/m/Y') }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

        </aside>

    </main>

    <!-- 5. NÚT NỔI LIÊN HỆ -->
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

    <!-- 6. FOOTER -->
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
                    <li><i class="fa-solid fa-headset text-amber-400 mr-2"></i> Hotline 2: <strong>037 539 1498</strong></li>
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
<!-- GOOGLE TRANSLATE ENGINE -->
<div id="google_translate_element" class="hidden"></div>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,vi,ru,ko',
            autoDisplay: false
        }, 'google_translate_element');

        // Tự động kích hoạt lại ngôn ngữ đã lưu khi chuyển trang
        const savedLang = localStorage.getItem('selected_lang');
        if (savedLang && savedLang !== 'en') {
            setTimeout(function() {
                const select = document.querySelector('.goog-te-combo');
                if (select) {
                    select.value = savedLang;
                    select.dispatchEvent(new Event('change'));
                }
            }, 1000);
        }
    }

    function toggleLanguageMenu() {
        const menu = document.getElementById('lang-menu');
        if(menu) menu.classList.toggle('hidden');
    }

    function changeLanguage(langCode, flag, text) {
        // Lưu ngôn ngữ vào localStorage để đồng bộ qua các trang khác
        localStorage.setItem('selected_lang', langCode);

        const flagEl = document.getElementById('current-flag');
        const textEl = document.getElementById('current-lang-text');
        const menuEl = document.getElementById('lang-menu');

        if(flagEl) flagEl.innerText = flag;
        if(textEl) textEl.innerText = langCode.toUpperCase();
        if(menuEl) menuEl.classList.add('hidden');

        const select = document.querySelector('.goog-te-combo');
        if (select) {
            select.value = langCode;
            select.dispatchEvent(new Event('change'));
        } else {
            // Nếu widget chưa load xong thì reload lại trang với ngôn ngữ mới
            location.reload();
        }
    }

    // Đóng dropdown khi click ra ngoài
    document.addEventListener('click', function(event) {
        const dropdown = document.getElementById('lang-dropdown');
        const menu = document.getElementById('lang-menu');
        if (dropdown && menu && !dropdown.contains(event.target)) {
            menu.classList.add('hidden');
        }
    });
</script>

<style>
    .goog-te-banner-frame.skiptranslate, .goog-te-gadget-icon, .goog-te-gadget-simple { display: none !important; }
    body { top: 0px !important; }
    .goog-tooltip { display: none !important; }
    .goog-text-highlight { background-color: transparent !important; border: none !important; box-shadow: none !important; }
</style>
</body>
</html>