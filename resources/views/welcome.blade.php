<x-guest-layout>

    <style>
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-12px);
            }

            100% {
                transform: translateY(0px);
            }
        }
    </style>


    <!-- Full Page Wrapper dengan Background Striped -->
    <div class="relative w-full bg-[#faf9f6] overflow-hidden min-h-screen">

        <!-- Soft Blue Radial Background -->
        <div class="fixed inset-0 z-0"
            style="
            background-image: radial-gradient(circle at 1px 1px, rgba(0,0,0,0.08) 1px, transparent 0),
        repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(0,0,0,0.02) 2px, rgba(0,0,0,0.02) 4px),
        repeating-linear-gradient(90deg, transparent, transparent 2px, rgba(0,0,0,0.02) 2px, rgba(0,0,0,0.02) 4px);
        background-size: 8px 8px, 32px 32px, 32px 32px;
        ">
        </div>

        <!-- Semua Konten dengan z-index lebih tinggi -->
        <div class="relative z-20">

            <!-- Hero Section -->
            <section class="text-gray-800 py-10">
                <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                    <!-- LEFT TEXT -->
                    <div class="space-y-6">
                        <h1 class="text-5xl md:text-6xl font-bold leading-tight font-fugaz">
                            PRIVATE GAMING <span class="text-blue-600">ROOM</span>
                        </h1>

                        <p class="text-lg text-gray-600 max-w-md">
                            Satu ruang, seribu keseruan—Playstation, Karaoke, Netflix dikemas dalam satu Private Room
                            yang dibuat untuk pengalaman terbaikmu.
                        </p>

                        <!-- CTA Buttons -->
                        <div class="mt-10 flex flex-col sm:flex-row gap-4">
                            @guest
                                <a href="{{ route('booking.index') }}"
                                    class="inline-flex items-center justify-center px-8 py-4 text-base font-medium rounded-xl
                                        text-black bg-white hover:bg-gray-100 shadow-lg hover:shadow-xl
                                        transform hover:-translate-y-0.5 transition-all duration-200">
                                    <span>Booking Sekarang</span>
                                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>
                                </a>

                                <a href="{{ route('register') }}"
                                    class="inline-flex items-center justify-center px-8 py-4 text-base font-medium rounded-xl
                                        text-white bg-blue-600 hover:bg-blue-800 shadow-lg hover:shadow-xl
                                        transform hover:-translate-y-0.5 transition-all duration-200 border border-indigo-500/40">
                                    Daftar Sekarang
                                </a>
                            @else
                                <a href="{{ route('booking.index') }}"
                                    class="inline-flex items-center justify-center px-8 py-4 text-base font-medium rounded-xl
                                        text-black bg-white hover:bg-gray-100 shadow-lg hover:shadow-xl
                                        transform hover:-translate-y-0.5 transition-all duration-200">
                                    <span>Booking Sekarang</span>
                                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>
                                </a>

                                <a href="{{ route('my-bookings.index') }}"
                                    class="inline-flex items-center justify-center px-8 py-4 text-base font-medium rounded-xl
                                        text-white bg-blue-600 hover:bg-blue-800 shadow-lg hover:shadow-xl
                                        transform hover:-translate-y-0.5 transition-all duration-200 border border-indigo-500/40">
                                    My Bookings
                                </a>
                            @endguest
                        </div>

                    </div>

                    <!-- RIGHT IMAGE -->
                    <div class="flex justify-center md:justify-end relative cursor-default">
                        <div class="relative inline-block">

                            <!-- PS5 with Enhanced Shadow -->
                            <img src="{{ asset('images/3D.png') }}" alt="PlayStation Image"
                                class="relative z-10 w-72 md:w-[420px] scale-105
                                animate-[float_5s_ease-in-out_infinite]">

                            <!-- Floating Card 1 - Top Right (5+ Rooms) -->
                            <div
                                class="absolute md:bottom-72 bottom-44 md:left-64 left-44 z-10
                                bg-gray-400 bg-clip-padding backdrop-blur-lg backdrop-filter rounded-2xl
                                border border-white/20 bg-opacity-10 backdrop-saturate-100 backdrop-contrast-100
                                px-8 py-2 shadow-lg
                                animate-[float_4s_ease-in-out_infinite]
                                hover:bg-white/15 hover:border-white/30 hover:scale-105
                                transition-all duration-300">
                                <div class="flex items-center gap-3">

                                    <div>
                                        <p class="text-3xl font-bold text-blue-500">5+</p>
                                        <p class="text-sm text-gray-600">Rooms</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Floating Card 2 - Middle Left (30+ Games) -->
                            <div
                                class="absolute top-1/3 -left-6 z-10
                                bg-gray-400 bg-clip-padding backdrop-blur-lg backdrop-filter rounded-2xl
                                border border-white/20 bg-opacity-10 backdrop-saturate-100 backdrop-contrast-100
                                px-6 py-2 shadow-lg
                                animate-[float_3.5s_ease-in-out_infinite]
                                hover:bg-white/15 hover:border-white/30 hover:scale-105
                                transition-all duration-300">
                                <div class="flex items-center gap-3">
                                    <div>
                                        <p class="text-3xl font-bold text-violet-500">30+</p>
                                        <p class="text-sm text-gray-600">Games</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Floating Card 3 - Bottom Right (4K Display) -->
                            <div
                                class="absolute bottom-4 -right-4 z-10
                                bg-gray-400 bg-clip-padding backdrop-blur-lg backdrop-filter rounded-2xl
                                border border-white/20 bg-opacity-5 backdrop-saturate-100 backdrop-contrast-100
                                px-8 py-2 shadow-lg
                                animate-[float_4.5s_ease-in-out_infinite_1s]
                                hover:bg-white/15 hover:border-white/30 hover:scale-105
                                transition-all duration-300">
                                <div class="flex items-center gap-3">

                                    <div>
                                        <p class="text-3xl font-bold text-rose-500">4K</p>
                                        <p class="text-sm text-gray-600">Display</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </section>

            <!-- Features Section -->
            <div class="py-16 sm:py-20 ">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <!-- Section Header -->
                    <div class="text-center mb-12">
                        <h2 class="text-3xl sm:text-4xl font-bold text-gray-700 mb-4">
                            Kenapa Pilih Gaming Room Kami?
                        </h2>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                            Kami menyediakan pengalaman hiburan terbaik dengan fasilitas premium dan harga terjangkau
                        </p>
                    </div>

                    <!-- Features Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                        <!-- Feature 1 -->
                        <div
                            class="bg-gray-400 bg-clip-padding backdrop-blur-lg backdrop-filter rounded-2xl
                                    border  bg-opacity-10 backdrop-saturate-100 backdrop-contrast-100 p-6 sm:p-8
                                    shadow-lg hover:shadow-2xl
                                    transition-all duration-500 hover:-translate-y-2">
                            <div class="w-14 h-14 flex items-center justify-center mb-5 text-3xl">
                                <img width="48" height="48" src="https://img.icons8.com/emoji/48/video-game.png"
                                    alt="video-game" />
                            </div>
                            <h3 class="text-xl font-bold text-gray-700 mb-3">
                                Premium Entertainment
                            </h3>
                            <p class="text-gray-500 leading-relaxed">
                                PS5, PS4, Netlix, dan Karaoke Equipment untuk pengalaman bermain yang maksimal
                            </p>
                        </div>

                        <!-- Feature 2 -->
                        <div
                            class="bg-gray-400 bg-clip-padding backdrop-blur-lg backdrop-filter rounded-2xl
                                    border  bg-opacity-10 backdrop-saturate-100 backdrop-contrast-100 p-6 sm:p-8
                                    shadow-lg hover:shadow-2xl
                                    transition-all duration-500 hover:-translate-y-2">
                            <div class="w-14 h-14  flex items-center justify-center mb-5 text-3xl">
                                <img width="48" height="48" src="https://img.icons8.com/color/48/wifi-logo.png"
                                    alt="wifi-logo" />
                            </div>
                            <h3 class="text-xl font-bold text-gray-700 mb-3">
                                High-Speed Internet
                            </h3>
                            <p class="text-gray-500 leading-relaxed">
                                Koneksi internet 100+ Mbps dedicated untuk gaming online tanpa lag dan ping rendah
                            </p>
                        </div>

                        <!-- Feature 3 -->
                        <div
                            class="bg-gray-400 bg-clip-padding backdrop-blur-lg backdrop-filter rounded-2xl
                                    border  bg-opacity-10 backdrop-saturate-100 backdrop-contrast-100 p-6 sm:p-8
                                    shadow-lg hover:shadow-2xl
                                    transition-all duration-500 hover:-translate-y-2">
                            <div class="w-14 h-14  flex items-center justify-center mb-5 text-3xl">
                                <img width="48" height="48" src="https://img.icons8.com/3d-fluency/50/sofa.png"
                                    alt="sofa" />
                            </div>
                            <h3 class="text-xl font-bold text-gray-700 mb-3">
                                Comfortable Environment
                            </h3>
                            <p class="text-gray-500 leading-relaxed">
                                Ruangan ber-AC, kursi gaming ergonomis, dan ambiance nyaman untuk gaming seharian
                            </p>
                        </div>

                        <!-- Feature 4 -->
                        <div
                            class="bg-gray-400 bg-clip-padding backdrop-blur-lg backdrop-filter rounded-2xl
                                    border  bg-opacity-10 backdrop-saturate-100 backdrop-contrast-100 p-6 sm:p-8
                                    shadow-lg hover:shadow-2xl
                                    transition-all duration-500 hover:-translate-y-2">
                            <div class="w-14 h-14  flex items-center justify-center mb-5 text-3xl">
                                <img width="48" height="48"
                                    src="https://img.icons8.com/emoji/48/money-bag-emoji.png" alt="money-bag-emoji" />
                            </div>
                            <h3 class="text-xl font-bold text-gray-700 mb-3">
                                Harga Terjangkau
                            </h3>
                            <p class="text-gray-500 leading-relaxed">
                                Mulai dari Rp 30.000/jam dengan sistem booking online yang mudah dan cepat
                            </p>
                        </div>

                        <!-- Feature 5 -->
                        <div
                            class="bg-gray-400 bg-clip-padding backdrop-blur-lg backdrop-filter rounded-2xl
                                    border  bg-opacity-10 backdrop-saturate-100 backdrop-contrast-100 p-6 sm:p-8
                                    shadow-lg hover:shadow-2xl
                                    transition-all duration-500 hover:-translate-y-2">
                            <div class="w-14 h-14  flex items-center justify-center mb-5 text-3xl">
                                <img width="64" height="64"
                                    src="https://img.icons8.com/external-konkapp-flat-konkapp/64/external-noodle-seafood-konkapp-flat-konkapp.png"
                                    alt="external-noodle-seafood-konkapp-flat-konkapp" />
                            </div>
                            <h3 class="text-xl font-bold text-gray-700 mb-3">
                                F&B Available
                            </h3>
                            <p class="text-gray-500 leading-relaxed">
                                Snack, minuman, dan makanan tersedia untuk menemani sesi gaming kamu
                            </p>
                        </div>

                        <!-- Feature 6 -->
                        <div
                            class="bg-gray-400 bg-clip-padding backdrop-blur-lg backdrop-filter rounded-2xl
                                    border  bg-opacity-10 backdrop-saturate-100 backdrop-contrast-100 p-6 sm:p-8
                                    shadow-lg hover:shadow-2xl
                                    transition-all duration-500 hover:-translate-y-2">
                            <div class="w-14 h-14  flex items-center justify-center mb-5 text-3xl">
                                <img src="https://img.icons8.com/?size=100&id=yHTclm7aovKd&format=png&color=000000"
                                    alt="">
                            </div>
                            <h3 class="text-xl font-bold text-gray-700 mb-3">
                                Private & Secure
                            </h3>
                            <p class="text-gray-500 leading-relaxed">
                                Ruangan private dengan sistem keamanan terjamin dan privacy maksimal
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sneak Peek Rooms Carousel -->
            @if ($roomGallery->count() > 0)
                <div class="py-16 sm:py-20 bg-gray-900 relative overflow-hidden">
                    <!-- Background Pattern -->
                    <div class="absolute inset-0 opacity-5">
                        <div class="absolute inset-0"
                            style="background: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
                        </div>
                    </div>

                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <!-- Header -->
                        <div class="text-center mb-12">
                            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                                Sneak Peek Ruangan Kami
                            </h2>
                            <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                                Lihat koleksi setup gaming premium kami
                            </p>
                        </div>

                        <!-- Carousel Container -->
                        <div x-data="{
                            currentSlide: 0,
                            slides: {{ $roomGallery->count() }},
                            autoplay: null,
                            init() {
                                this.startAutoplay();
                            },
                            startAutoplay() {
                                this.autoplay = setInterval(() => {
                                    this.next();
                                }, 5000);
                            },
                            stopAutoplay() {
                                clearInterval(this.autoplay);
                            },
                            next() {
                                this.currentSlide = (this.currentSlide + 1) % this.slides;
                            },
                            prev() {
                                this.currentSlide = (this.currentSlide - 1 + this.slides) % this.slides;
                            },
                            goTo(index) {
                                this.currentSlide = index;
                                this.stopAutoplay();
                                this.startAutoplay();
                            }
                        }" @mouseenter="stopAutoplay()" @mouseleave="startAutoplay()"
                            class="relative">

                            <!-- Slides -->
                            <div
                                class="relative aspect-[16/9] md:aspect-[21/12] md:max-w-[900px] mx-auto rounded-2xl overflow-hidden bg-gray-800 shadow-2xl">
                                @foreach ($roomGallery as $index => $image)
                                    <div x-show="currentSlide === {{ $index }}"
                                        x-transition:enter="transition ease-out duration-500"
                                        x-transition:enter-start="opacity-0 transform scale-95"
                                        x-transition:enter-end="opacity-100 transform scale-100"
                                        x-transition:leave="transition ease-in duration-300"
                                        x-transition:leave-start="opacity-100 transform scale-100"
                                        x-transition:leave-end="opacity-0 transform scale-95"
                                        class="absolute inset-0">

                                        <img src="{{ Storage::url($image->image_path) }}" alt="{{ $image->title }}"
                                            class="w-full h-full object-cover">

                                        <!-- Overlay Gradient -->
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent">
                                        </div>

                                        <!-- Content -->
                                        <div class="absolute bottom-0 left-0 right-0 p-6 md:p-10">
                                            <div class="max-w-3xl">
                                                <h3 class="text-2xl md:text-4xl font-bold text-white mb-3">
                                                    {{ $image->title }}
                                                </h3>
                                                @if ($image->description)
                                                    <p class="text-base md:text-lg text-gray-200 mb-4">
                                                        {{ $image->description }}
                                                    </p>
                                                @endif
                                                <a href="{{ route('rooms.index') }}"
                                                    class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-semibold transition-colors">
                                                    Lihat Semua Room
                                                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <!-- Navigation Arrows -->
                                <button @click="prev()"
                                    class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/20 backdrop-blur-sm hover:bg-white/30 rounded-full flex items-center justify-center transition-all">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7" />
                                    </svg>
                                </button>

                                <button @click="next()"
                                    class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/20 backdrop-blur-sm hover:bg-white/30 rounded-full flex items-center justify-center transition-all">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>

                                <!-- Slide Counter -->
                                <div
                                    class="absolute top-4 right-4 px-4 py-2 bg-black/50 backdrop-blur-sm text-white rounded-full text-sm font-medium">
                                    <span x-text="currentSlide + 1"></span> / <span x-text="slides"></span>
                                </div>
                            </div>

                            <!-- Dots Indicator -->
                            <div class="flex justify-center gap-2 mt-6">
                                @foreach ($roomGallery as $index => $image)
                                    <button @click="goTo({{ $index }})"
                                        :class="currentSlide === {{ $index }} ? 'bg-blue-600 w-8' :
                                            'bg-gray-600 w-2 hover:bg-gray-500'"
                                        class="h-2 rounded-full transition-all duration-300">
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- How It Works Section -->
            <div class="py-16 sm:py-20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl sm:text-4xl font-bold text-gray-700 mb-4">
                            Cara Booking Mudah
                        </h2>
                        <p class="text-lg text-gray-600">
                            Hanya 3 langkah untuk mulai bermain!
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-5 gap-8 relative">
                        <!-- Step 1 -->
                        <div class="text-center relative">
                            <div
                                class="w-20 h-20 bg-blue-200 rounded-full flex items-center justify-center mx-auto mb-6 text-3xl font-bold text-blue-600">
                                1
                            </div>
                            <h3 class="text-xl font-bold text-gray-600 mb-3">Pilih Room & Waktu</h3>
                            <p class="text-gray-500">
                                Browse room yang tersedia dan pilih waktu yang kamu mau
                            </p>
                        </div>

                        <!-- Arrow (hidden on mobile) -->
                        <div class="hidden md:flex items-center justify-center">
                            <svg class="w-12 h-12 text-blue-300" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6">
                                </path>
                            </svg>
                        </div>

                        <!-- Step 2 -->
                        <div class="text-center relative">
                            <div
                                class="w-20 h-20 bg-blue-200 rounded-full flex items-center justify-center mx-auto mb-6 text-3xl font-bold text-blue-600">
                                2
                            </div>
                            <h3 class="text-xl font-bold text-gray-600 mb-3">Bayar Online</h3>
                            <p class="text-gray-500">
                                Bayar dengan VA, QRIS, E-wallet, atau Credit Card (aman & cepat)
                            </p>
                        </div>

                        <!-- Arrow (hidden on mobile) -->
                        <div class="hidden md:flex items-center justify-center">
                            <svg class="w-12 h-12 text-blue-300" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6">
                                </path>
                            </svg>
                        </div>

                        <!-- Step 3 -->
                        <div class="text-center relative">
                            <div
                                class="w-20 h-20 bg-blue-200 rounded-full flex items-center justify-center mx-auto mb-6 text-3xl font-bold text-blue-600">
                                3
                            </div>
                            <h3 class="text-xl font-bold text-gray-600 mb-3">Datang & Main</h3>
                            <p class="text-gray-500">
                                Tunjukkan booking code dan mulai gaming session kamu!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="relative text-gray-700 py-16 sm:py-20 overflow-hidden">
                <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-4">
                        Ready to Level Up?
                    </h2>
                    <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                        Booking sekarang dan rasakan pengalaman gaming terbaik dengan setup premium!
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        @guest
                            <a href="{{ route('register') }}"
                                class="inline-flex items-center justify-center px-8 py-4 text-base font-medium rounded-xl text-blue-600 bg-white shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                                <span>Daftar Gratis</span>
                                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6">
                                    </path>
                                </svg>
                            </a>
                            <a href="{{ route('login') }}"
                                class="inline-flex items-center justify-center px-8 py-4 text-base font-medium rounded-xl text-blue-600 bg-transparent hover:bg-blue-600 hover:text-white shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 border-2 border-blue-600">
                                Sudah Punya Akun? Login
                            </a>
                        @else
                            <a href="{{ route('rooms.index') }}"
                                class="inline-flex items-center justify-center px-8 py-4 text-base font-medium rounded-xl text-blue-600 bg-white  shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                                <span>Booking Sekarang</span>
                                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6">
                                    </path>
                                </svg>
                            </a>
                        @endguest
                    </div>
                </div>
            </div>


            <!-- Footer -->
            <div class=" text-gray-500 py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-8 mb-8">
                        <!-- Brand -->
                        <div>
                            <h3 class="text-gray-700 text-xl font-bold mb-4">Private Gaming Room</h3>
                            <p class="text-sm">
                                Rental gaming room terbaik dengan setup premium dan harga terjangkau di Tuban.
                            </p>
                        </div>

                        <!-- Quick Links -->
                        <div>
                            <h4 class="text-gray-700 text-sm font-semibold mb-4">Quick Links</h4>
                            <ul class="space-y-2 text-sm">
                                <li><a href="{{ route('rooms.index') }}"
                                        class="hover:text-blue-600 transition-colors">Browse
                                        Rooms</a></li>
                                <li><a href="{{ route('about') }}"
                                        class="hover:text-blue-600 transition-colors">About
                                        Us</a>
                                </li>
                                @auth
                                    <li><a href="{{ route('my-bookings.index') }}"
                                            class="hover:text-blue-600 transition-colors">My
                                            Bookings</a></li>
                                @endauth
                            </ul>
                        </div>


                        <!-- Contact -->
                        <div>
                            <h4 class="text-gray-700 text-sm font-semibold mb-4">Contact</h4>
                            <ul class="space-y-2 text-sm">
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                        </path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                    <span>info@gamingroom.com</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                                        </path>
                                    </svg>
                                    <span>0821-3767-9526</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Jl. KH. Agus Salim No.17, Ronggomulyo, Kec. Tuban, Kabupaten Tuban, Jawa Timur
                                        62313</span>
                                </li>
                            </ul>
                        </div>

                        {{-- Maps --}}
                        <div class="w-full h-[350px] rounded-xl overflow-hidden col-span-2 border-2 shadow-lg">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9659912764146!2d112.05676679999999!3d-6.8946714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77bd0054a51903%3A0xc1a1f45f9f590a6!2sPrivate%20Gaming%20Room%20Tuban!5e0!3m2!1sid!2sid!4v1764741981656!5m2!1sid!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <!-- Bottom Footer -->
                    <div class="border-t border-gray-800 pt-8 text-center text-sm text-gray-700">
                        <p>&copy; {{ date('Y') }} Private Gaming Room. All rights reserved.</p>
                    </div>
                </div>
            </div>

        </div> <!-- End of relative z-10 wrapper -->

    </div> <!-- End of full page striped background wrapper -->
</x-guest-layout>
