<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private Car Rates & Routes - Mui Ne Transport</title>
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
                <span><i class="fa-solid fa-clock text-amber-400 mr-1"></i> 24/7 Available (English Support)</span>
                <span class="hidden sm:inline"><i class="fa-solid fa-shield-halved text-amber-400 mr-1"></i> Modern Fleet • Expressway Route 2h15m</span>
            </div>
            <div class="flex items-center gap-4">
                <a href="https://wa.me/84375391498" target="_blank" class="font-bold text-amber-300 hover:text-white transition flex items-center gap-1">
                    <i class="fa-brands fa-whatsapp text-emerald-400 text-base"></i> WhatsApp / Hotline: +84 37 539 1498
                </a>
            </div>
        </div>
    </div>

    <!-- NAVBAR -->
    <header class="bg-white shadow sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <a href="/" class="flex items-center gap-2 text-2xl font-black text-[#134e8e] tracking-tight">
                <i class="fa-solid fa-car-side text-amber-500"></i> MUI NE CARS
            </a>
            <nav class="hidden lg:flex items-center gap-6 font-semibold text-slate-700 text-sm">
                <a href="/" class="hover:text-[#134e8e] transition">Home</a>
                <a href="/bang-gia" class="text-[#134e8e] font-bold border-b-2 border-[#134e8e] pb-0.5">Rates & Routes</a>
                <a href="/tin-tuc" class="hover:text-[#134e8e] transition">Travel Guide</a>
                <a href="/lien-he" class="hover:text-[#134e8e] transition">Contact Us</a>
            </nav>
            <div class="flex items-center gap-3">
                <a href="/#booking" class="bg-amber-500 hover:bg-amber-600 text-[#0f3460] px-4 py-2 rounded-xl font-bold text-xs md:text-sm shadow-md transition flex items-center gap-1.5">
                    <i class="fa-solid fa-bolt"></i> Book Now
                </a>
            </div>
        </div>
    </header>

    <!-- BANNER -->
    <div class="bg-gradient-to-r from-[#0f3460] to-[#134e8e] text-white py-12 px-4 shadow-inner">
        <div class="max-w-7xl mx-auto text-center space-y-3">
            <span class="inline-block bg-amber-500 text-slate-950 text-xs font-black uppercase tracking-wider px-3 py-1 rounded-full shadow-sm">
                Fixed & Transparent Pricing
            </span>
            <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight">Private Car Transfer Rates</h1>
            <p class="text-slate-200 text-xs md:text-sm max-w-2xl mx-auto leading-relaxed">
                All prices are fixed per vehicle, including toll fees, fuel, and door-to-door hotel/airport service.
            </p>

            <!-- Ô TÌM KIẾM NHANH (INSTANT SEARCH BAR) -->
            <div class="max-w-xl mx-auto pt-4">
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                        <i class="fa-solid fa-magnifying-glass text-base"></i>
                    </span>
                    <input type="text" id="route-search-input" onkeyup="filterRoutes()" placeholder="Search route (e.g. Saigon, Da Lat, Airport, Nha Trang)..." 
                           class="w-full pl-11 pr-4 py-3.5 rounded-2xl bg-white text-slate-800 placeholder-slate-400 text-sm shadow-xl focus:outline-none focus:ring-2 focus:ring-amber-400">
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN ROUTES GRID -->
    <main class="max-w-7xl mx-auto px-4 py-12 flex-1 w-full">
        <div id="routes-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($allRoutes as $route)
            <div class="route-card bg-white rounded-2xl border-2 border-[#134e8e] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between" data-name="{{ strtolower($route->name) }}">
                
                <div class="bg-[#134e8e] text-white text-center py-3.5 px-4 font-bold text-base tracking-wide flex items-center justify-between">
                    <span>{{ $route->name }}</span>
                    @if($route->is_popular)
                        <span class="bg-red-500 text-white text-[10px] font-black px-2 py-0.5 rounded-full uppercase">Popular</span>
                    @endif
                </div>

                <div class="p-5 flex-1 flex flex-col justify-between space-y-4">
                    <div class="bg-slate-50 text-slate-600 rounded-xl py-2 px-3 text-center text-xs md:text-sm font-medium border border-slate-200 flex items-center justify-center gap-1.5 shadow-inner">
                        <i class="fa-regular fa-clock text-slate-400"></i>
                        <span>{{ $route->duration ?? '2 - 3 Hours' }}</span>
                        <span class="text-slate-300">|</span>
                        <span>Distance {{ $route->distance ?? '180 km' }}</span>
                    </div>

                    <div class="space-y-3.5 text-sm">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2 font-medium text-slate-700">
                                <i class="fa-solid fa-car text-rose-500 text-base w-4 text-center"></i>
                                <span>4-Seater Sedan:</span>
                            </div>
                            <span class="font-bold text-red-600 tracking-tight">
                                {{ number_format($route->price_4c, 0, ',', '.') }} VND
                            </span>
                        </div>

                        <div class="flex items-center justify-between border-t border-slate-100 pt-3">
                            <div class="flex items-center gap-2 font-medium text-slate-700">
                                <i class="fa-solid fa-car-side text-sky-600 text-base w-4 text-center"></i>
                                <span>7-Seater SUV:</span>
                            </div>
                            <span class="font-bold text-red-600 tracking-tight">
                                {{ number_format($route->price_7c, 0, ',', '.') }} VND
                            </span>
                        </div>

                        <div class="flex items-center justify-between border-t border-slate-100 pt-3">
                            <div class="flex items-center gap-2 font-medium text-slate-700">
                                <i class="fa-solid fa-van-shuttle text-blue-700 text-base w-4 text-center"></i>
                                <span>16-Seater Van:</span>
                            </div>
                            <span class="font-bold text-red-600 tracking-tight">
                                {{ number_format($route->price_16c, 0, ',', '.') }} VND
                            </span>
                        </div>
                    </div>

                    <div class="pt-3 border-t border-slate-100 flex items-center justify-between gap-2">
                        <a href="{{ route('routes.show', $route->slug) }}" class="text-xs font-semibold text-slate-500 hover:text-[#134e8e] transition">
                            Route Details →
                        </a>
                        <a href="{{ route('routes.show', $route->slug) }}" class="bg-[#134e8e] hover:bg-blue-900 text-white font-bold text-xs px-4 py-2 rounded-xl transition shadow">
                            Book Now
                        </a>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

        <!-- THÔNG BÁO KHI KHÔNG TÌM THẤY KẾT QUẢ -->
        <div id="no-results" class="hidden text-center py-16 bg-white rounded-3xl border border-slate-200 shadow-sm mt-4">
            <i class="fa-solid fa-car-burst text-slate-300 text-5xl mb-3"></i>
            <h3 class="text-lg font-bold text-slate-700">No routes found matching your search.</h3>
            <p class="text-xs text-slate-500 mt-1">Please try searching with another keyword or contact us via WhatsApp for custom requests.</p>
        </div>
    </main>

    <!-- SCRIPT TÌM KIẾM NHANH (LIVE SEARCH) -->
    <script>
        function filterRoutes() {
            const input = document.getElementById('route-search-input');
            const filter = input.value.toLowerCase().trim();
            const container = document.getElementById('routes-container');
            const cards = container.getElementsByClassName('route-card');
            const noResults = document.getElementById('no-results');
            let visibleCount = 0;

            for (let i = 0; i < cards.length; i++) {
                const name = cards[i].getAttribute('data-name');
                if (name.includes(filter)) {
                    cards[i].style.display = "";
                    visibleCount++;
                } else {
                    cards[i].style.display = "none";
                }
            }

            if (visibleCount === 0) {
                noResults.classList.remove('hidden');
            } else {
                noResults.classList.add('hidden');
            }
        }
    </script>

    <!-- FLOATING WIDGETS -->
    <div class="fixed bottom-6 right-6 flex flex-col gap-3 z-50">
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="w-12 h-12 bg-slate-800 text-white rounded-full flex items-center justify-center shadow-xl hover:bg-slate-700 transition" title="Back to top">
            <i class="fa-solid fa-arrow-up"></i>
        </button>
        <a href="https://wa.me/84375391498" target="_blank" class="w-12 h-12 bg-emerald-600 text-white rounded-full flex items-center justify-center shadow-2xl hover:scale-110 transition" title="WhatsApp Us">
            <i class="fa-brands fa-whatsapp text-2xl"></i>
        </a>
        <a href="tel:+84375391498" class="w-12 h-12 bg-red-600 text-white rounded-full flex items-center justify-center shadow-2xl hover:scale-110 animate-bounce transition" title="Call Us">
            <i class="fa-solid fa-phone text-xl"></i>
        </a>
    </div>

    <!-- FOOTER -->
    <footer class="bg-slate-900 text-slate-300 pt-12 pb-8 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="space-y-3">
                <h3 class="text-xl font-bold text-white flex items-center gap-2">
                    <i class="fa-solid fa-car-side text-amber-500"></i> MUI NE CARS
                </h3>
                <p class="text-xs text-slate-400 leading-relaxed">
                    Trusted private car transfers & airport taxi service connecting Saigon, Mui Ne, Phan Thiet, Da Lat, and Nha Trang.
                </p>
            </div>
            <div>
                <h4 class="font-bold text-white mb-3 uppercase text-xs tracking-wider">Contact Info</h4>
                <ul class="text-xs space-y-2 text-slate-400">
                    <li><i class="fa-brands fa-whatsapp text-emerald-400 mr-2"></i> WhatsApp: <strong>+84 37 539 1498</strong></li>
                    <li><i class="fa-solid fa-headset text-amber-400 mr-2"></i> 24/7 Hotline: <strong>0876.226.227</strong></li>
                    <li><i class="fa-solid fa-location-dot text-amber-400 mr-2"></i> Office: Phan Thiet & Mui Ne, Binh Thuan</li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-white mb-3 uppercase text-xs tracking-wider">Top Routes</h4>
                <ul class="text-xs space-y-2 text-slate-400">
                    <li><a href="/bang-gia" class="hover:text-white transition">Saigon (HCMC) ⇄ Mui Ne</a></li>
                    <li><a href="/bang-gia" class="hover:text-white transition">Tan Son Nhat (SGN) Airport</a></li>
                    <li><a href="/bang-gia" class="hover:text-white transition">Mui Ne ⇄ Da Lat</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-white mb-3 uppercase text-xs tracking-wider">Service Guarantee</h4>
                <ul class="text-xs space-y-2 text-slate-400">
                    <li>✓ 100% clean & modern air-conditioned cars</li>
                    <li>✓ Tolls and fuel included</li>
                    <li>✓ Punctual English-friendly drivers</li>
                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 mt-8 pt-6 border-t border-slate-800 text-center text-xs text-slate-500">
            © {{ date('Y') }} Mui Ne Cars. All rights reserved.
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