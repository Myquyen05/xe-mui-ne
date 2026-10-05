<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mui Ne Private Car Transfer - Saigon, Airport, Da Lat, Nha Trang Taxi Service</title>
    <meta name="description" content="Best private car and taxi service between Saigon (HCMC), Tan Son Nhat Airport, Nha Trang, Da Lat and Mui Ne Phan Thiet. Expressway 2h15m, fixed rates, toll fees included, 24/7 WhatsApp support.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Swiper CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <style>
        html { scroll-behavior: smooth; }
        .hero-bg {
            background: linear-gradient(rgba(15, 23, 42, 0.78), rgba(15, 23, 42, 0.78)), url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
        }
        .pricing-swiper .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            background-color: #94a3b8;
            opacity: 0.5;
            transition: all 0.3s ease;
        }
        .pricing-swiper .swiper-pagination-bullet-active {
            width: 28px;
            border-radius: 6px;
            background-color: #134e8e;
            opacity: 1;
        }
        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            display: flex;
            width: 200%;
            animation: marquee 25s linear infinite;
        }
        .animate-marquee:hover {
            animation-play-state: paused;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased font-sans">

    <!-- 1. TOPBAR & WHATSAPP -->
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
                <span class="text-slate-500">|</span>
                <a href="tel:0375391498" class="font-bold text-amber-300 hover:text-white transition flex items-center gap-1">
                    <i class="fa-solid fa-headset text-amber-400"></i> Dispatch: 037 539 1498
                </a>
            </div>
        </div>
    </div>

    <!-- 2. NAVBAR -->
    <header class="bg-white shadow sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <a href="/" class="flex items-center gap-2 text-2xl font-black text-[#134e8e] tracking-tight">
                <i class="fa-solid fa-car-side text-amber-500"></i>MUI NE CAR RENTAL
            </a>
            <nav class="hidden lg:flex items-center gap-6 font-semibold text-slate-700 text-sm">
                <a href="/" class="text-[#134e8e] font-bold">Home</a>
                <a href="/bang-gia" class="hover:text-[#134e8e] transition">Rates & Routes</a>
                <a href="/tin-tuc" class="hover:text-[#134e8e] transition">Travel Guide</a>
                <a href="#videos" class="hover:text-[#134e8e] transition">Video Tours</a>
                <a href="/lien-he" class="hover:text-[#134e8e] transition">Contact Us</a>
            </nav>
            <div class="flex items-center gap-3">
                <!-- DROPDOWN CHUYỂN NGÔN NGỮ -->
                <div class="relative inline-block text-left" id="lang-dropdown">
                    <button type="button" onclick="toggleLanguageMenu()" class="inline-flex items-center gap-1.5 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold px-3 py-2 rounded-xl border border-slate-200 transition shadow-sm">
                        <span id="current-flag">🇬🇧</span>
                        <span id="current-lang-text">EN</span>
                        <i class="fa-solid fa-chevron-down text-[10px] text-slate-400"></i>
                    </button>
                    <div id="lang-menu" class="hidden absolute right-0 mt-2 w-36 bg-white rounded-xl shadow-xl border border-slate-100 z-50 py-1 text-xs divide-y divide-slate-100">
                        <a href="javascript:void(0)" onclick="changeLanguage('en', '🇬🇧', 'English')" class="flex items-center gap-2 px-3 py-2 hover:bg-amber-50 text-slate-700 font-semibold transition"><span>🇬🇧</span> English</a>
                        <a href="javascript:void(0)" onclick="changeLanguage('vi', '🇻🇳', 'Tiếng Việt')" class="flex items-center gap-2 px-3 py-2 hover:bg-amber-50 text-slate-700 font-semibold transition"><span>🇻🇳</span> Tiếng Việt</a>
                        <a href="javascript:void(0)" onclick="changeLanguage('ru', '🇷🇺', 'Русский')" class="flex items-center gap-2 px-3 py-2 hover:bg-amber-50 text-slate-700 font-semibold transition"><span>🇷🇺</span> Русский</a>
                        <a href="javascript:void(0)" onclick="changeLanguage('ko', '🇰🇷', '한국어')" class="flex items-center gap-2 px-3 py-2 hover:bg-amber-50 text-slate-700 font-semibold transition"><span>🇰🇷</span> 한국어</a>
                    </div>
                </div>

                <a href="#booking" class="bg-amber-500 hover:bg-amber-600 text-[#0f3460] px-4 py-2 rounded-xl font-bold text-xs md:text-sm shadow-md transition flex items-center gap-1.5">
                    <i class="fa-solid fa-bolt"></i> Book Now
                </a>
            </div>
        </div>

        <!-- 3. SERVICES STRIP -->
        <div id="services" class="bg-slate-100 border-t border-b border-slate-200 overflow-x-auto scrollbar-none py-2 px-4">
            <div class="max-w-7xl mx-auto flex items-center gap-3 md:gap-6 text-xs font-bold text-slate-700 whitespace-nowrap">
                <a href="/bang-gia" class="hover:text-[#134e8e] flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white shadow-sm border border-slate-200"><i class="fa-solid fa-car text-blue-600"></i> Private Transfers</a>
                <a href="/bang-gia" class="hover:text-[#134e8e] flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white shadow-sm border border-slate-200"><i class="fa-solid fa-plane-departure text-sky-600"></i> Airport Pickup (SGN/CXR/DLI)</a>
                <a href="/bang-gia" class="hover:text-[#134e8e] flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white shadow-sm border border-slate-200"><i class="fa-solid fa-bolt text-emerald-600"></i> EV Eco Taxi</a>
                <a href="/bang-gia" class="hover:text-[#134e8e] flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white shadow-sm border border-slate-200"><i class="fa-solid fa-users text-rose-600"></i> Shared Ride & Minivan</a>
                <a href="/bang-gia" class="hover:text-[#134e8e] flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white shadow-sm border border-slate-200"><i class="fa-solid fa-map-location-dot text-purple-600"></i> Sand Dunes Jeep Tour</a>
                <a href="/lien-he" class="hover:text-[#134e8e] flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white shadow-sm border border-slate-200"><i class="fa-solid fa-user-tie text-indigo-600"></i> Private Driver Hire</a>
            </div>
        </div>
    </header>

    @php
        $heroImage = ($banner && $banner->image) 
            ? asset('storage/' . $banner->image) 
            : 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1920&q=80';
    @endphp

    <!-- 4. HERO SECTION & FAST BOOKING FORM -->
    <section id="booking" class="py-12 md:py-16 text-white relative bg-cover bg-center" style="background-image: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.8)), url('{{ $heroImage }}');">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <div class="lg:col-span-6 space-y-5">
                <span class="inline-block bg-amber-500 text-blue-950 font-black px-3.5 py-1 rounded-full text-xs uppercase tracking-wider shadow">
                    Premium Private Car Service
                </span>
                <h1 class="text-3xl md:text-5xl font-extrabold leading-tight text-white">
                    Private Car Transfer <br><span class="text-amber-400">Saigon ⇄ Mui Ne Beach</span>
                </h1>
                <p class="text-slate-200 text-sm md:text-base leading-relaxed">
                    Fast highway route in only 2 hours 15 minutes. Door-to-door pickup at hotels, resorts, and Tan Son Nhat (SGN) / Cam Ranh (CXR) Airport. Fixed rates with toll fees and gas included.
                </p>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-2">
                    <div class="bg-white/10 backdrop-blur-md p-3 rounded-xl border border-white/20 text-center">
                        <i class="fa-solid fa-car-side text-amber-400 text-xl mb-1"></i>
                        <h4 class="font-bold text-xs">Instant Car</h4>
                        <p class="text-[11px] text-slate-300">Ready in 15 mins</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md p-3 rounded-xl border border-white/20 text-center">
                        <i class="fa-solid fa-shield-halved text-emerald-400 text-xl mb-1"></i>
                        <h4 class="font-bold text-xs">Fixed Price</h4>
                        <p class="text-[11px] text-slate-300">No hidden fees</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md p-3 rounded-xl border border-white/20 text-center">
                        <i class="fa-solid fa-user-check text-sky-400 text-xl mb-1"></i>
                        <h4 class="font-bold text-xs">Safe Drivers</h4>
                        <p class="text-[11px] text-slate-300">Polite & careful</p>
                    </div>
                </div>

                <div class="flex items-center gap-3 pt-1">
                    <a href="https://wa.me/84375391498" target="_blank" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold px-5 py-2.5 rounded-xl text-xs md:text-sm shadow flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp text-lg"></i> WhatsApp Booking
                    </a>
                    <a href="tel:+84375391498" class="bg-red-600 hover:bg-red-700 text-white font-bold px-5 py-2.5 rounded-xl text-xs md:text-sm shadow flex items-center gap-2">
                        <i class="fa-solid fa-phone"></i> Call Hotline
                    </a>
                </div>
            </div>

            <!-- INSTANT BOOKING FORM -->
            <div class="lg:col-span-6">
                <div class="bg-white text-slate-800 rounded-3xl p-6 md:p-8 shadow-2xl border border-slate-100">
                    
                    <div class="flex items-center border-b border-slate-200 pb-3 mb-4 gap-4">
                        <button type="button" class="text-sm font-bold text-[#134e8e] border-b-2 border-[#134e8e] pb-1 flex items-center gap-1.5">
                            <i class="fa-solid fa-road"></i> Intercity Transfer
                        </button>
                        <a href="/bang-gia" class="text-sm font-semibold text-slate-400 hover:text-slate-700 pb-1 flex items-center gap-1.5">
                            <i class="fa-solid fa-plane"></i> Airport Pickup
                        </a>
                    </div>

                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl mb-4 text-xs font-medium flex items-center gap-2">
                            <i class="fa-solid fa-circle-check text-green-600"></i>
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('booking.store') }}" method="POST" class="space-y-3.5">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3.5">
                            <div>
                                <label class="block text-[11px] font-bold text-slate-600 uppercase mb-1">Full Name *</label>
                                <input type="text" name="customer_name" required placeholder="John Smith" class="w-full border border-slate-300 rounded-xl p-2.5 focus:ring-2 focus:ring-amber-500 focus:outline-none text-xs md:text-sm">
                            </div>
                            <div>
                                <label class="block text-[11px] font-bold text-slate-600 uppercase mb-1">WhatsApp / Phone Number *</label>
                                <input type="tel" name="phone" required placeholder="+84 / +1 / WhatsApp..." class="w-full border border-slate-300 rounded-xl p-2.5 focus:ring-2 focus:ring-amber-500 focus:outline-none text-xs md:text-sm">
                            </div>
                        </div>

                        <!-- OPENSTREETMAP AUTOCOMPLETE INPUTS -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3.5">
                            <div class="relative">
                                <label class="block text-[11px] font-bold text-slate-600 uppercase mb-1">Pick-up Location *</label>
                                <input type="text" id="pickup_input" name="pickup_point" autocomplete="off" required placeholder="e.g. SGN Airport, District 1, Hotel..." class="w-full border border-slate-300 rounded-xl p-2.5 focus:ring-2 focus:ring-amber-500 focus:outline-none text-xs md:text-sm">
                                <div id="pickup_suggestions" class="hidden absolute left-0 right-0 top-full mt-1 bg-white border border-slate-200 rounded-xl shadow-2xl z-50 max-h-52 overflow-y-auto text-xs divide-y"></div>
                            </div>
                            <div class="relative">
                                <label class="block text-[11px] font-bold text-slate-600 uppercase mb-1">Drop-off Location *</label>
                                <input type="text" id="dropoff_input" name="dropoff_point" autocomplete="off" required placeholder="e.g. Mui Ne Resort, Phan Thiet..." class="w-full border border-slate-300 rounded-xl p-2.5 focus:ring-2 focus:ring-amber-500 focus:outline-none text-xs md:text-sm">
                                <div id="dropoff_suggestions" class="hidden absolute left-0 right-0 top-full mt-1 bg-white border border-slate-200 rounded-xl shadow-2xl z-50 max-h-52 overflow-y-auto text-xs divide-y"></div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3.5">
                            <div>
                                <label class="block text-[11px] font-bold text-slate-600 uppercase mb-1">Pick-up Date & Time *</label>
                                <input type="datetime-local" name="pickup_time" required class="w-full border border-slate-300 rounded-xl p-2.5 focus:ring-2 focus:ring-amber-500 focus:outline-none text-xs md:text-sm">
                            </div>
                            <div>
                                <label class="block text-[11px] font-bold text-slate-600 uppercase mb-1">Vehicle Type *</label>
                                <select name="car_type" class="w-full border border-slate-300 rounded-xl p-2.5 focus:ring-2 focus:ring-amber-500 focus:outline-none text-xs md:text-sm bg-white">
                                    <option value="4c">4-Seater Sedan (1-3 Pax + Luggage)</option>
                                    <option value="7c" selected>7-Seater SUV/MPV (1-5 Pax + Luggage)</option>
                                    <option value="16c">16-Seater Van (6-12 Pax + Luggage)</option>
                                    <option value="convenient">Budget Shared Ride / Return Car</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-[11px] font-bold text-slate-600 uppercase mb-1">Special Notes (Flight No, Hotel Name, Child Seat)</label>
                            <input type="text" name="note" placeholder="e.g., Flight VN123 arrival at 14:00, need baby seat..." class="w-full border border-slate-300 rounded-xl p-2.5 focus:ring-2 focus:ring-amber-500 focus:outline-none text-xs md:text-sm">
                        </div>

                        <button type="submit" class="w-full bg-amber-500 hover:bg-amber-600 text-[#0f3460] font-black py-3.5 rounded-xl shadow-lg transition duration-200 uppercase tracking-wide text-sm flex items-center justify-center gap-2">
                            <i class="fa-solid fa-paper-plane"></i> Request Instant Booking
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </section>

    <!-- 5. LIVE BOOKING FEED -->
    <div class="bg-blue-950 text-slate-200 py-2.5 px-4 overflow-hidden border-y border-blue-900 shadow-inner">
        <div class="max-w-7xl mx-auto flex items-center">
            <span class="bg-red-600 text-white text-[10px] md:text-xs font-extrabold uppercase px-2.5 py-1 rounded-md mr-3 whitespace-nowrap flex items-center gap-1 shadow">
                <i class="fa-solid fa-bell animate-bounce"></i> Recent Bookings
            </span>
            <div class="overflow-hidden whitespace-nowrap w-full">
                <div class="animate-marquee text-xs space-x-8">
                    <span>🔥 Customer <strong>David M. (UK)</strong> booked a 7-Seater SUV: <em>Saigon SGN Airport ➔ Mui Ne Resort</em></span>
                    <span>🔥 Customer <strong>Sophie L. (France)</strong> booked a 4-Seater Sedan: <em>Mui Ne ➔ Tan Son Nhat Airport</em></span>
                    <span>🔥 Customer <strong>Alex & Family (Australia)</strong> booked a 16-Seater Van: <em>Phan Thiet ➔ Da Lat City</em></span>
                    <span>🔥 Customer <strong>Michael K. (Germany)</strong> booked a 7-Seater: <em>Mui Ne ➔ Nha Trang Beach</em></span>
                </div>
            </div>
        </div>
    </div>

    <!-- 6. POPULAR ROUTES & RATES SLIDER -->
    <section id="pricing" class="py-14 max-w-7xl mx-auto px-4 overflow-hidden">
        <div class="text-center max-w-3xl mx-auto mb-8">
            <h2 class="text-2xl md:text-3xl font-extrabold text-[#114b88] uppercase tracking-wide mb-2">Private Car Transfer Rates</h2>
            <p class="text-slate-500 text-sm">All-inclusive fixed pricing — Highway toll fees, fuel, and professional driver included</p>
        </div>

        <div class="swiper pricing-swiper pb-10">
            <div class="swiper-wrapper">
                @foreach($allRoutes->chunk(6) as $chunk)
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($chunk as $route)
                        <div class="bg-white rounded-2xl border-2 border-[#134e8e] overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between">
                            
                            <div class="bg-[#134e8e] text-white text-center py-3 px-4 font-bold text-sm md:text-base tracking-wide truncate">
                                {{ $route->name }}
                            </div>

                            <div class="p-4 md:p-5 flex-1 flex flex-col justify-between space-y-4">
                                <div class="bg-slate-50 text-slate-600 rounded-xl py-1.5 px-3 text-center text-xs md:text-sm font-medium border border-slate-200 flex items-center justify-center gap-1.5 shadow-inner">
                                    <i class="fa-regular fa-clock text-slate-400"></i>
                                    <span>{{ $route->duration ?? '2 - 3 Hours' }}</span>
                                    <span class="text-slate-300">|</span>
                                    <span>Distance {{ $route->distance ?? '180 km' }}</span>
                                </div>

                                <div class="space-y-3 text-sm">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-2 font-medium text-slate-700">
                                            <i class="fa-solid fa-car text-rose-500 text-base w-4 text-center"></i>
                                            <span>4-Seater Sedan</span>
                                        </div>
                                        <span class="font-bold text-red-600 tracking-tight">
                                            {{ number_format($route->price_4c, 0, ',', '.') }} VND
                                        </span>
                                    </div>

                                    <div class="flex items-center justify-between border-t border-slate-100 pt-2.5">
                                        <div class="flex items-center gap-2 font-medium text-slate-700">
                                            <i class="fa-solid fa-car-side text-sky-600 text-base w-4 text-center"></i>
                                            <span>7-Seater SUV</span>
                                        </div>
                                        <span class="font-bold text-red-600 tracking-tight">
                                            {{ number_format($route->price_7c, 0, ',', '.') }} VND
                                        </span>
                                    </div>

                                    <div class="flex items-center justify-between border-t border-slate-100 pt-2.5">
                                        <div class="flex items-center gap-2 font-medium text-slate-700">
                                            <i class="fa-solid fa-van-shuttle text-blue-700 text-base w-4 text-center"></i>
                                            <span>16-Seater Van</span>
                                        </div>
                                        <span class="font-bold text-red-600 tracking-tight">
                                            {{ number_format($route->price_16c, 0, ',', '.') }} VND
                                        </span>
                                    </div>
                                </div>

                                <div class="pt-2 border-t border-slate-100 flex items-center justify-between gap-2">
                                    <a href="{{ route('routes.show', $route->slug) }}" class="text-xs font-semibold text-slate-500 hover:text-[#134e8e] transition">
                                        Route Details →
                                    </a>
                                    <a href="{{ route('routes.show', $route->slug) }}" class="bg-[#134e8e] hover:bg-blue-900 text-white font-bold text-xs px-3.5 py-1.5 rounded-lg transition shadow-sm">
                                        Book Route
                                    </a>
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>

            <div class="swiper-pagination mt-6"></div>
        </div>

        <div class="text-center mt-4">
            <a href="/bang-gia" class="inline-flex items-center gap-2 bg-white border-2 border-[#134e8e] text-[#134e8e] hover:bg-[#134e8e] hover:text-white font-bold text-xs md:text-sm px-6 py-2.5 rounded-xl transition shadow-sm">
                <span>View All 18 Routes & Full Pricing</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </section>
    

    <!-- 7. PANORAMIC RESORT BANNER -->
    <div class="max-w-7xl mx-auto px-4 my-8">
        <div class="relative w-full h-64 md:h-80 lg:h-96 rounded-3xl overflow-hidden shadow-xl border border-slate-200 group">
            <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1920&q=85" 
                 alt="Explore Mui Ne Beach Phan Thiet" 
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
            
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/30 to-transparent flex flex-col justify-end p-6 md:p-10">
                <div class="max-w-2xl text-white space-y-2.5">
                    <div class="flex items-center gap-2">
                        <span class="bg-amber-500 text-slate-950 text-xs font-black uppercase tracking-wider px-3 py-1 rounded-md shadow-sm">
                            Explore Phan Thiet & Mui Ne
                        </span>
                        <span class="text-xs text-slate-200 font-medium hidden sm:inline-block">
                            <i class="fa-solid fa-road text-amber-400 mr-1"></i> 2h15m Direct Highway
                        </span>
                    </div>

                    <h3 class="text-2xl md:text-4xl font-extrabold leading-tight text-white drop-shadow-md">
                        Enjoy Stress-Free Holiday With Private Door-to-Door Transfers
                    </h3>

                    <p class="text-slate-200 text-xs md:text-sm leading-relaxed line-clamp-2">
                        Direct pickup at airport terminal or resort lobby. Clean air-conditioned vehicles, experienced drivers, and complimentary cold water.
                    </p>

                    <div class="pt-2 flex items-center gap-3">
                        <a href="#booking" class="bg-blue-600 hover:bg-blue-700 text-white text-xs md:text-sm font-bold px-5 py-2.5 rounded-xl shadow-lg transition duration-200 inline-flex items-center gap-1.5">
                            <i class="fa-solid fa-calendar-check text-amber-400"></i> Book Your Ride
                        </a>
                        <a href="https://wa.me/84375391498" target="_blank" class="bg-emerald-600 hover:bg-emerald-700 text-white text-xs md:text-sm font-bold px-4 py-2.5 rounded-xl transition inline-flex items-center gap-1.5 shadow">
                            <i class="fa-brands fa-whatsapp text-lg"></i> +84 37 539 1498
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@if(isset($reviews) && $reviews->count() > 0)
    <section class="py-14 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-10">
                <span class="bg-amber-100 text-amber-800 text-xs font-black uppercase px-3.5 py-1 rounded-full shadow-sm">
                    Real Feedback & Moments
                </span>
                <h2 class="text-2xl md:text-3xl font-extrabold text-[#114b88] mt-2 mb-2">Customer Experiences & Gallery</h2>
                <p class="text-slate-500 text-sm">Discover genuine moments and reviews from international travelers exploring Mui Ne with us</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($reviews as $review)
                <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition flex flex-col justify-between p-6">
                    
                    @if($review->image)
                        @php 
                            $images = is_array($review->image) ? $review->image : [$review->image]; 
                        @endphp
                        <div class="grid grid-cols-2 gap-2 mb-4">
                            @foreach($images as $img)
                            <div class="h-32 rounded-xl overflow-hidden relative shadow-inner">
                                <img src="{{ asset('storage/' . $img) }}" alt="Customer review photo" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                            </div>
                            @endforeach
                        </div>
                    @endif

                    <div class="space-y-3 flex-1 flex flex-col justify-between">
                        <div class="space-y-2">
                            @if($review->route_name)
                            <span class="inline-block bg-slate-100 text-slate-700 text-[11px] font-bold px-2.5 py-1 rounded-md">
                                <i class="fa-solid fa-route text-amber-500 mr-1"></i> {{ $review->route_name }}
                            </span>
                            @endif
                            <div class="text-amber-400 text-xs">
                                {!! str_repeat('<i class="fa-solid fa-star"></i>', $review->rating) !!}
                            </div>
                            <p class="text-slate-700 text-xs md:text-sm italic leading-relaxed">
                                "{{ $review->review_text }}"
                            </p>
                        </div>

                        <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                            <div>
                                <h4 class="font-bold text-slate-900 text-xs md:text-sm">{{ $review->customer_name }}</h4>
                                <span class="text-[11px] text-slate-400"><i class="fa-solid fa-globe text-sky-500 mr-1"></i> {{ $review->country }}</span>
                            </div>
                            <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs shadow-inner">
                                <i class="fa-solid fa-check"></i>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    <!-- 8. VIDEO EXPERIENCES -->
    @if(isset($videos) && $videos->count() > 0)
    <section id="videos" class="py-12 bg-slate-100 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-8">
                <h2 class="text-2xl md:text-3xl font-extrabold text-[#114b88] uppercase tracking-wide mb-2">Real Route & Travel Experiences</h2>
                <p class="text-slate-500 text-sm">Authentic footage of coastal highways and private car service</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($videos as $video)
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-200 flex flex-col justify-between">
                    <div class="aspect-video w-full bg-black">
                        <iframe class="w-full h-full" src="{{ $video->embed_url }}" title="{{ $video->title }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-4 flex-1">
                        <h4 class="font-bold text-sm text-slate-800 line-clamp-2 hover:text-[#134e8e]">{{ $video->title }}</h4>
                        @if($video->description)
                            <p class="text-xs text-slate-500 mt-1.5 line-clamp-2">{{ $video->description }}</p>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- 9. TRAVEL GUIDES & BLOG -->
    @if(isset($posts) && $posts->count() > 0)
    <section class="py-14 bg-white border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-[#114b88]">Mui Ne Travel Guide & Tips</h2>
                    <p class="text-slate-500 text-sm mt-1">Helpful local advice for your upcoming trip to Phan Thiet & Mui Ne</p>
                </div>
                <a href="/tin-tuc" class="text-xs md:text-sm font-bold text-[#134e8e] hover:underline flex items-center gap-1">
                    <span>Read all guides</span>
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($posts as $post)
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-xl transition flex flex-col justify-between group">
                    <a href="{{ route('posts.show', $post->slug) }}" class="overflow-hidden relative block">
                        <img src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=600&q=80' }}" alt="{{ $post->title }}" class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    </a>
                    <div class="p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-xs text-amber-600 font-bold uppercase">{{ $post->category->name ?? 'Travel Tips' }}</span>
                            <h3 class="font-bold text-slate-800 text-base mt-1 mb-2 line-clamp-2 group-hover:text-[#134e8e] transition">
                                <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
                            </h3>
                            <p class="text-xs text-slate-500 line-clamp-2">{{ $post->summary ?? Str::limit(strip_tags($post->content), 90) }}</p>
                        </div>
                        <div class="mt-4 pt-3 border-t flex justify-between items-center text-xs text-slate-400">
                            <span><i class="fa-regular fa-clock mr-1"></i> {{ $post->created_at->format('M d, Y') }}</span>
                            <a href="{{ route('posts.show', $post->slug) }}" class="text-[#134e8e] font-bold hover:underline flex items-center gap-1">
                                <span>Read more</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- 10. SEO OVERVIEW SECTION -->
    <section class="py-12 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 text-xs md:text-sm text-slate-600 leading-relaxed space-y-4">
            <h3 class="text-lg md:text-xl font-bold text-[#114b88]">Reliable Private Car Transfers & Taxi Service in Mui Ne, Phan Thiet</h3>
            <p>
                Mui Ne (Phan Thiet) is known as the resort capital of Vietnam, famous for its golden sand dunes, turquoise coastline, kiteboarding spots, and fresh seafood. With the newly opened Dau Giay - Phan Thiet Expressway, traveling from Ho Chi Minh City (District 1 / Tan Son Nhat Airport SGN) to Mui Ne takes only <strong>2 hours and 15 minutes</strong>.
            </p>
            <p>
                We provide premium <strong>private car transfers, airport pickups, and sightseeing tours</strong> between Mui Ne, Saigon, Da Lat, Nha Trang, Vung Tau, and Cam Ranh. Enjoy comfortable air-conditioned 4-seater sedans, 7-seater SUVs, and 16-seater minivans with transparent fixed rates, polite drivers, and no unexpected charges.
            </p>
        </div>
    </section>

    <!-- 11. FLOATING WIDGETS -->
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

    <!-- 12. FOOTER -->
    <footer class="bg-slate-900 text-slate-300 pt-12 pb-8 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="space-y-3">
                <h3 class="text-xl font-bold text-white flex items-center gap-2">
                    <i class="fa-solid fa-car-side text-amber-500"></i> MUI NE CAR RENTAL
                </h3>
                <p class="text-xs text-slate-400 leading-relaxed">
                    Trusted private car transfers & airport taxi service connecting Saigon, Mui Ne, Phan Thiet, Da Lat, and Nha Trang.
                </p>
                <div class="flex items-center gap-3 pt-2">
                    <a href="https://wa.me/84375391498" target="_blank" class="w-8 h-8 rounded-full bg-slate-800 hover:bg-emerald-600 text-white flex items-center justify-center text-xs transition"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="tel:+84375391498" class="w-8 h-8 rounded-full bg-slate-800 hover:bg-red-600 text-white flex items-center justify-center text-xs transition"><i class="fa-solid fa-phone"></i></a>
                </div>
            </div>

            <div>
                <h4 class="font-bold text-white mb-3 uppercase text-xs tracking-wider">Contact Info</h4>
                <ul class="text-xs space-y-2 text-slate-400">
                    <li><i class="fa-brands fa-whatsapp text-emerald-400 mr-2"></i> WhatsApp: <strong>+84 37 539 1498</strong></li>
                    <li><i class="fa-solid fa-headset text-amber-400 mr-2"></i> 24/7 Hotline: <strong>037 539 1498</strong></li>
                    <li><i class="fa-solid fa-location-dot text-amber-400 mr-2"></i> Office: Phan Thiet & Mui Ne, Binh Thuan</li>
                    <li><i class="fa-solid fa-clock text-amber-400 mr-2"></i> Working Hours: 24 Hours / 7 Days</li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-white mb-3 uppercase text-xs tracking-wider">Top Routes</h4>
                <ul class="text-xs space-y-2 text-slate-400">
                    <li><a href="/bang-gia" class="hover:text-white transition">Saigon (HCMC) ⇄ Mui Ne</a></li>
                    <li><a href="/bang-gia" class="hover:text-white transition">Tan Son Nhat (SGN) Airport Transfer</a></li>
                    <li><a href="/bang-gia" class="hover:text-white transition">Mui Ne ⇄ Da Lat Highlands</a></li>
                    <li><a href="/bang-gia" class="hover:text-white transition">Mui Ne ⇄ Nha Trang Beach</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-white mb-3 uppercase text-xs tracking-wider">Service Guarantee</h4>
                <ul class="text-xs space-y-2 text-slate-400">
                    <li>✓ 100% clean & modern air-conditioned cars</li>
                    <li>✓ No toll or highway hidden surcharges</li>
                    <li>✓ Professional & punctual English-friendly drivers</li>
                    <li>✓ Direct drop-off at resort reception lobby</li>
                </ul>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 mt-8 pt-6 border-t border-slate-800 text-center text-xs text-slate-500">
            © {{ date('Y') }} Mui Ne Car Rental. All rights reserved. Premium Transport & Transfers.
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
        }

        function toggleLanguageMenu() {
            const menu = document.getElementById('lang-menu');
            menu.classList.toggle('hidden');
        }

        function changeLanguage(langCode, flag, text) {
            document.getElementById('current-flag').innerText = flag;
            document.getElementById('current-lang-text').innerText = langCode.toUpperCase();
            document.getElementById('lang-menu').classList.add('hidden');

            const select = document.querySelector('.goog-te-combo');
            if (select) {
                select.value = langCode;
                select.dispatchEvent(new Event('change'));
            }
        }

        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('lang-dropdown');
            const menu = document.getElementById('lang-menu');
            if (dropdown && !dropdown.contains(event.target)) {
                menu.classList.add('hidden');
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
            new Swiper('.pricing-swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                autoHeight: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        });

        function setupLocationAutocomplete(inputId, suggestionsId) {
            const input = document.getElementById(inputId);
            const suggestions = document.getElementById(suggestionsId);
            let debounceTimer;

            input.addEventListener('input', function() {
                clearTimeout(debounceTimer);
                const query = this.value.trim();

                if (query.length < 2) {
                    suggestions.innerHTML = '';
                    suggestions.classList.add('hidden');
                    return;
                }

                debounceTimer = setTimeout(() => {
                    fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(query)}&countrycodes=vn&limit=6&addressdetails=1`)
                        .then(res => res.json())
                        .then(data => {
                            suggestions.innerHTML = '';
                            if (data.length === 0) {
                                suggestions.classList.add('hidden');
                                return;
                            }

                            data.forEach(item => {
                                const div = document.createElement('div');
                                div.className = 'p-2.5 hover:bg-amber-50 cursor-pointer text-slate-700 flex items-center gap-2';
                                div.innerHTML = `<i class="fa-solid fa-location-dot text-amber-500"></i> <span>${item.display_name}</span>`;
                                
                                div.addEventListener('click', () => {
                                    input.value = item.display_name;
                                    suggestions.innerHTML = '';
                                    suggestions.classList.add('hidden');
                                });

                                suggestions.appendChild(div);
                            });

                            suggestions.classList.remove('hidden');
                        })
                        .catch(() => {
                            suggestions.classList.add('hidden');
                        });
                }, 350);
            });

            document.addEventListener('click', function(e) {
                if (!input.contains(e.target) && !suggestions.contains(e.target)) {
                    suggestions.classList.add('hidden');
                }
            });
        }

        setupLocationAutocomplete('pickup_input', 'pickup_suggestions');
        setupLocationAutocomplete('dropoff_input', 'dropoff_suggestions');
    </script>

    <style>
        .goog-te-banner-frame.skiptranslate, .goog-te-gadget-icon, .goog-te-gadget-simple { display: none !important; }
        body { top: 0px !important; }
        .goog-tooltip { display: none !important; }
        .goog-text-highlight { background-color: transparent !important; border: none !important; box-shadow: none !important; }
    </style>
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
 
<!-- PROMO & DISCOUNT POPUP -->
<div id="promo-popup" class="fixed inset-0 z-50 flex items-center justify-center bg-slate-950/70 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300 px-4">
    <div class="bg-white w-full max-w-lg rounded-3xl shadow-2xl overflow-hidden relative transform scale-95 transition-transform duration-300" id="popup-content">
        
        <!-- Nút đóng popup (X) -->
        <button onclick="closePromoPopup()" class="absolute top-4 right-4 w-9 h-9 bg-slate-100 hover:bg-red-100 text-slate-500 hover:text-red-600 rounded-full flex items-center justify-center transition z-10 font-bold">
            <i class="fa-solid fa-xmark text-lg"></i>
        </button>

        <!-- Phần Banner phía trên của Popup -->
        <div class="bg-gradient-to-r from-[#0f3460] to-[#134e8e] text-white p-6 text-center relative overflow-hidden">
            <div class="absolute -right-6 -bottom-6 text-white/10 text-8xl font-black pointer-events-none">
                <i class="fa-solid fa-taxi"></i>
            </div>
            <span class="bg-amber-500 text-slate-950 text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full shadow-sm inline-block mb-2">
                Limited Special Offer 🎉
            </span>
            <h3 class="text-2xl md:text-3xl font-extrabold tracking-tight">Get 10% OFF Your First Transfer!</h3>
            <p class="text-xs text-slate-200 mt-1">Book your private car between Saigon and Mui Ne today and save extra.</p>
        </div>

        <!-- Nội dung Form / Lời kêu gọi bên dưới Popup -->
        <div class="p-6 md:p-8 space-y-4">
            <div class="space-y-2 text-xs md:text-sm text-slate-600">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-circle-check text-emerald-500 text-base"></i>
                    <span>Free waiting time up to 60 mins at SGN Airport</span>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-circle-check text-emerald-500 text-base"></i>
                    <span>Highway toll fees & parking included in price</span>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-circle-check text-emerald-500 text-base"></i>
                    <span>24/7 English support via WhatsApp instantly</span>
                </div>
            </div>

            <div class="pt-2 space-y-2.5">
                <a href="#booking" onclick="closePromoPopup()" class="block w-full bg-amber-500 hover:bg-amber-600 text-[#0f3460] font-black py-3 rounded-xl text-center shadow-lg transition uppercase tracking-wider text-xs md:text-sm">
                    <i class="fa-solid fa-bolt mr-1"></i> Claim Discount & Book Now
                </a>
                <a href="https://wa.me/84375391498?text=Hello%2C%20I%20want%20to%20claim%20the%2010%25%20discount%20for%20my%20Mui%20Ne%20transfer!" target="_blank" onclick="closePromoPopup()" class="block w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 rounded-xl text-center transition text-xs md:text-sm shadow">
                    <i class="fa-brands fa-whatsapp text-base mr-1"></i> Chat via WhatsApp to Lock Deal
                </a>
            </div>

            <p class="text-[11px] text-center text-slate-400 pt-1">
                No prepayment required. Pay directly to the driver after the trip.
            </p>
        </div>

    </div>
</div>

<!-- SCRIPT ĐIỀU KHIỂN HIỂN THỊ POPUP -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Kiểm tra xem khách đã tắt popup trong phiên làm việc này chưa
        if (!sessionStorage.getItem('promo_shown')) {
            setTimeout(function() {
                const popup = document.getElementById('promo-popup');
                const content = document.getElementById('popup-content');
                if (popup && content) {
                    popup.classList.remove('hidden');
                    setTimeout(() => {
                        popup.classList.remove('opacity-0');
                        content.classList.remove('scale-95');
                    }, 50);
                }
            }, 2500); // Popup tự hiện sau 2.5 giây khách vào web
        }
    });

    function closePromoPopup() {
        const popup = document.getElementById('promo-popup');
        const content = document.getElementById('popup-content');
        if (popup && content) {
            popup.classList.add('opacity-0');
            content.classList.add('scale-95');
            setTimeout(() => {
                popup.classList.add('hidden');
            }, 300);
            // Đánh dấu đã hiện để không hiện lại liên tục làm phiền khách
            sessionStorage.setItem('promo_shown', 'true');
        }
    }
</script>
</body>
</html>