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
    <script>
        if (window.location.hash) {
            history.replaceState(null, null, window.location.pathname);
        }
    </script>



    <!-- Full Page Wrapper -->
    <div class="relative w-full bg-[#faf9f6] overflow-hidden min-h-screen">

        <!-- Diagonal Cross Grid Top Background -->
        <div class="fixed inset-0"
            style="
            background:
                radial-gradient(125% 125% at 50% 90%, #fff 40%, #6d94e7 100%);
        ">
        </div>


        <!-- Semua Konten dengan z-index lebih tinggi -->
        <div class="relative z-20">
            <!-- Hero Section -->
            <section class="relative text-gray-800 py-20 overflow-hidden min-h-screen flex items-center">
                <!-- Background Image -->
                <div class="absolute inset-0 bg-contain bg-no-repeat md:bg-bottom z-0 opacity-65"
                    style="background-image: url('{{ asset('images/background.png') }}')">
                </div>

                <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 w-full">
                    <!-- CENTER TEXT -->
                    <div class="text-center space-y-3 md:space-y-6">
                        <!-- Main Heading -->
                        <h1 class="text-4xl md:text-6xl font-bold leading-tight font-fugaz " data-aos="fade-up"
                            data-aos-duration="1000">
                            PRIVATE ROOM<br>
                            <span class="text-blue-600">UNLIMITED FUN</span>
                        </h1>

                        <!-- Subheading -->
                        <p class="text-base md:text-xl text-gray-800 max-w-2xl mx-auto" data-aos="fade-up"
                            data-aos-delay="200">
                            Satu ruang, seribu keseruan—Playstation, Karaoke, Netflix dikemas dalam satu Private Room
                            yang dibuat untuk pengalaman terbaikmu.
                        </p>

                        <!-- CTA Buttons -->
                        <div class="mt-12 flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up"
                            data-aos-delay="400">
                            @guest
                                <a href="{{ route('booking.index') }}"
                                    class="inline-flex items-center justify-center px-10 py-5 text-lg font-medium rounded-xl
                        text-black bg-white hover:bg-gray-100 shadow-2xl hover:shadow-2xl
                        transform hover:-translate-y-1 transition-all duration-200">
                                    <span>Booking Sekarang</span>
                                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>
                                </a>

                                <a href="{{ route('register') }}"
                                    class="inline-flex items-center justify-center px-10 py-5 text-lg font-medium rounded-xl
                        text-white bg-blue-600 hover:bg-blue-800 shadow-xl hover:shadow-2xl
                        transform hover:-translate-y-1 transition-all duration-200 border border-blue-500/40">
                                    Daftar Sekarang
                                </a>
                            @else
                                <a href="{{ route('booking.index') }}"
                                    class="inline-flex items-center justify-center px-10 py-5 text-lg font-medium rounded-xl
                        text-black bg-white hover:bg-gray-100 shadow-xl hover:shadow-2xl
                        transform hover:-translate-y-1 transition-all duration-200">
                                    <span>Booking Sekarang</span>
                                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>
                                </a>

                                <a href="{{ route('my-bookings.index') }}"
                                    class="inline-flex items-center justify-center px-10 py-5 text-lg font-medium rounded-xl
                        text-white bg-blue-600 hover:bg-blue-800 shadow-xl hover:shadow-2xl
                        transform hover:-translate-y-1 transition-all duration-200 border border-blue-500/40">
                                    My Bookings
                                </a>
                            @endguest
                        </div>

                        <!-- Scroll Down Indicator-->
                        <div class="mt-16" data-aos="fade-up">
                            <a href="#features" class="inline-block animate-bounce">
                                <div
                                    class="w-10 h-10 border-2 border-blue-400 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features Section -->
            <div id="features" class="py-16 sm:py-20 ">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <!-- Section Header -->
                    <div class="text-center mb-12">
                        <h2 class="text-3xl sm:text-4xl font-bold text-gray-700 mb-4" data-aos="fade-up"
                            data-aos-duration="1000">
                            Kenapa Pilih Gaming Room Kami?
                        </h2>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                            Kami menyediakan pengalaman hiburan terbaik dengan fasilitas premium dan harga terjangkau
                        </p>
                    </div>

                    <!-- Features Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                        <!-- Feature 1 -->
                        <div class="bg-gray-500 bg-clip-padding backdrop-blur-lg backdrop-filter rounded-2xl
                                    border  bg-opacity-10 backdrop-saturate-100 backdrop-contrast-100 p-6 sm:p-8
                                    shadow-lg hover:shadow-2xl
                                    transition-all duration-500 hover:-translate-y-2"
                            data-aos="zoom-in" data-aos-duration="1000">
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
                            class="bg-gray-500 bg-clip-padding backdrop-blur-lg backdrop-filter rounded-2xl
                                    border  bg-opacity-10 backdrop-saturate-100 backdrop-contrast-100 p-6 sm:p-8
                                    shadow-lg hover:shadow-2xl
                                    transition-all duration-500 hover:-translate-y-2" data-aos="zoom-in"
                            data-aos-duration="1000">
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
                            class="bg-gray-500 bg-clip-padding backdrop-blur-lg backdrop-filter rounded-2xl
                                    border  bg-opacity-10 backdrop-saturate-100 backdrop-contrast-100 p-6 sm:p-8
                                    shadow-lg hover:shadow-2xl
                                    transition-all duration-500 hover:-translate-y-2" data-aos="zoom-in"
                            data-aos-duration="1000">
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
                            class="bg-gray-500 bg-clip-padding backdrop-blur-lg backdrop-filter rounded-2xl
                                    border  bg-opacity-10 backdrop-saturate-100 backdrop-contrast-100 p-6 sm:p-8
                                    shadow-lg hover:shadow-2xl
                                    transition-all duration-500 hover:-translate-y-2" data-aos="zoom-in"
                            data-aos-duration="1000">
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
                            class="bg-gray-500 bg-clip-padding backdrop-blur-lg backdrop-filter rounded-2xl
                                    border  bg-opacity-10 backdrop-saturate-100 backdrop-contrast-100 p-6 sm:p-8
                                    shadow-lg hover:shadow-2xl
                                    transition-all duration-500 hover:-translate-y-2" data-aos="zoom-in"
                            data-aos-duration="1000">
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
                            class="bg-gray-500 bg-clip-padding backdrop-blur-lg backdrop-filter rounded-2xl
                                    border  bg-opacity-10 backdrop-saturate-100 backdrop-contrast-100 p-6 sm:p-8
                                    shadow-lg hover:shadow-2xl
                                    transition-all duration-500 hover:-translate-y-2" data-aos="zoom-in"
                            data-aos-duration="1000">
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

            <!-- Rooms Carousel -->
            @if ($roomGallery->count() > 0)
                <div class="py-16 sm:py-12 bg-blue-950 relative overflow-hidden">
                    <!-- Background Pattern -->
                    <div class="absolute inset-0 opacity-5">
                        <div class="absolute inset-0"
                            style="background-image: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'20\' height=\'16\' viewBox=\'0 0 20 16\'%3E%3Cg fill=\'%239C92AC\' fill-opacity=\'0.7\'%3E%3Cpath fill-rule=\'evenodd\' d=\'M0 .04C2.6.22 4.99 1.1 7 2.5A13.94 13.94 0 0 1 15 0h4c.34 0 .67.01 1 .04v2A12 12 0 0 0 7.17 12h5.12A7 7 0 0 1 20 7.07V14a5 5 0 0 0-3-4.58A5 5 0 0 0 14 14H0V7.07c.86.12 1.67.4 2.4.81.75-1.52 1.76-2.9 2.98-4.05C3.79 2.83 1.96 2.2 0 2.04v-2z\'/%3E%3C/g%3E%3C/svg%3E');">
                        </div>

                    </div>

                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <!-- Header -->
                        <div class="text-center mb-12">
                            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4" data-aos="fade-up"
                            data-aos-duration="1000">
                                Ruangan Kami
                            </h2>
                            <p class="text-lg text-gray-400 max-w-2xl mx-auto" data-aos="fade-up"
                            data-aos-delay="200">
                                Lihat koleksi gaming room premium kami
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
                                class="relative aspect-[16/9] md:aspect-[8/4] md:max-w-[900px] mx-auto rounded-2xl overflow-hidden bg-gray-800 shadow-2xl" data-aos="zoom-in"
                            data-aos-duration="1000">
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
                        <h2 class="text-3xl sm:text-4xl font-bold text-gray-700 mb-4" data-aos="fade-up">
                            Cara Booking Mudah
                        </h2>
                        <p class="text-lg text-gray-600" data-aos="fade-up"
                            data-aos-delay="200">
                            Hanya 3 langkah untuk mulai bermain!
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-5 gap-8 relative" data-aos="zoom-in"
                            data-aos-delay="400">
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

            {{-- FAQ SECTION --}}

            <section class="max-w-3xl mx-auto px-4 py-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center" data-aos="fade-up"
                            data-aos-duration="1000">
                    Frequently Asked Questions
                </h2>

                <div class="space-y-4">
                    <!-- FAQ Item -->
                    <details class="group bg-white shadow-xl rounded-xl p-5 border border-gray-100" data-aos="fade-up"
                            data-aos-delay="100">
                        <summary class="flex justify-between items-center cursor-pointer">
                            <span class="font-medium text-gray-800">Bagaimana cara melakukan reservasi?</span>
                            <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <p class="mt-3 text-gray-600">
                            Pilih Ruangan di halaman "Booking", lalu lihat & pilih jam yang tersedia, lalu klik "Book
                            Now".
                            Sistem akan menampilkan harga sesuai waktu dan ruangan yang kamu pilih, lalu bayar tagihan
                            sesuai waktu yang ditentukan.
                        </p>
                    </details>

                    <!-- FAQ Item -->
                    <details class="group bg-white shadow-xl rounded-xl p-5 border border-gray-100" data-aos="fade-up"
                            data-aos-delay="150">
                        <summary class="flex justify-between items-center cursor-pointer">
                            <span class="font-medium text-gray-800">Apakah bisa bayar di tempat?</span>
                            <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <p class="mt-3 text-gray-600">
                            Untuk Reservasi, customer harus membayar terlebih dahulu via website minimal DP 50%.
                            Untuk pelunasannya kamu menerima pembayaran tunai atau QRIS saat datang ke lokasi.
                        </p>
                    </details>

                    <!-- FAQ Item -->
                    <details class="group bg-white shadow-xl rounded-xl p-5 border border-gray-100" data-aos="fade-up"
                            data-aos-delay="200">
                        <summary class="flex justify-between items-center cursor-pointer">
                            <span class="font-medium text-gray-800">Apakah boleh membawa makanan dan minuman
                                sendiri?</span>
                            <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <p class="mt-3 text-gray-600">
                            Boleh, pengunjung bebas membawa makanan dan minuman tanpa biaya tambahan.
                        </p>
                    </details>

                    <!-- FAQ Item -->
                    <details class="group bg-white shadow-xl rounded-xl p-5 border border-gray-100" data-aos="fade-up"
                            data-aos-delay="250">
                        <summary class="flex justify-between items-center cursor-pointer">
                            <span class="font-medium text-gray-800">Berapa maksimal orang dalam satu ruangan?</span>
                            <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <p class="mt-3 text-gray-600">
                            Tergantung jenis ruangan. Premier untuk 2 orang, VVIP hingga 6 orang, dan Premiere Room
                            hingga 10 orang.
                        </p>
                    </details>

                    <!-- FAQ Item -->
                    <details class="group bg-white shadow-xl rounded-xl p-5 border border-gray-100" data-aos="fade-up"
                            data-aos-delay="300">
                        <summary class="flex justify-between items-center cursor-pointer">
                            <span class="font-medium text-gray-800">Apakah bisa refund atau reschedule?</span>
                            <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <p class="mt-3 text-gray-600">
                            Reschedule bisa dilakukan maksimal 3 jam sebelum jadwal. Refund tidak tersedia jika
                            sudah melakukan reservasi.
                        </p>
                    </details>
                </div>
            </section>

            <!-- BANTUAN LANJUTAN -->
            <section
                class="max-w-3xl mx-auto px-4 py-10 text-center shadow-xl bg-white hover:bg-blue-500 rounded-xl duration-1000" data-aos="zoom-in"
                            data-aos-duration="1000" data-aos-delay="200">
                <p class="text-gray-800 mb-4 text-xl font-bold">
                    Informasi kurang lengkap ? <br>
                    <span class="font-light text-lg">Hubungi kami melalui WhatsApp atau hubunngi kontak lain dari kami
                        dengan menekan tombol di bawah ini.</span>
                </p>

                <!-- Tombol WA -->
                <div class="flex items-center justify-center gap-4 flex-col sm:flex-row ">
                    <!-- WhatsApp CTA -->
                    <a href="https://wa.me/6282137679526?text=Halo%20Admin%20PVG%2C%20saya%20mau%20tanya%20tentang%20reservasi%20ruangan."
                        target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center gap-3 px-6 py-3 bg-green-500 hover:bg-green-600 text-white rounded-xl font-semibold shadow-lg transform hover:-translate-y-1.5 transition-all duration-200">
                        <!-- WA Icon (inline SVG) -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                clip-rule="evenodd" />
                            <path fill="currentColor"
                                d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                        </svg>


                        <span>Chat ke WhatsApp</span>
                    </a>

                    <!-- Tombol Lihat FAQ Lengkap (opsional) -->
                    <a href="/about"
                        class="inline-flex items-center px-6 py-3 border border-gray-200 rounded-xl text-gray-700 hover:bg-gray-50  transform hover:-translate-y-1.5 transition-all duration-200">
                        Lihat Kontak Kami
                    </a>
                </div>
            </section>



            <!-- CTA Section -->
            <div class="relative text-gray-700 py-16 sm:py-20 overflow-hidden">
                <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-4" data-aos="fade-up"
                            data-aos-duration="1000">
                        Ready to Level Up?
                    </h2>
                    <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto"  data-aos="fade-up"
                            data-aos-delay="200">
                        Booking sekarang dan rasakan pengalaman gaming terbaik dengan setup premium!
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center"  data-aos="zoom-in"
                            data-aos-duration="1000">
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
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-8 mb-8"  data-aos="zoom-in"
                            data-aos-duration="1000">
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
