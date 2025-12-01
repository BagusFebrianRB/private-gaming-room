<x-guest-layout>
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 text-white overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 lg:py-32">
            <div class="text-center">
                <!-- Logo/Brand -->
                <div class="mb-6">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight mb-2">
                        🎮 Gaming Room XYZ
                    </h1>
                    <p class="text-xl sm:text-2xl font-medium text-indigo-100">
                        Best Gaming Experience in Town
                    </p>
                </div>

                <!-- Tagline -->
                <p class="mt-6 text-lg sm:text-xl text-indigo-50 max-w-2xl mx-auto">
                    Mainkan game favoritmu dengan setup gaming terbaik! PS5, Xbox Series X, PC RTX 4090, dan AC 24/7.
                </p>

                <!-- CTA Buttons -->
                <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                    @guest
                        <a href="{{ route('rooms.index') }}"
                           class="inline-flex items-center justify-center px-8 py-4 text-base font-medium rounded-xl text-indigo-600 bg-white hover:bg-indigo-50 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                            <span>Lihat Semua Room</span>
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="{{ route('register') }}"
                           class="inline-flex items-center justify-center px-8 py-4 text-base font-medium rounded-xl text-white bg-indigo-800 hover:bg-indigo-900 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 border-2 border-indigo-300">
                            Daftar Sekarang
                        </a>
                    @else
                        <a href="{{ route('rooms.index') }}"
                           class="inline-flex items-center justify-center px-8 py-4 text-base font-medium rounded-xl text-indigo-600 bg-white hover:bg-indigo-50 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                            <span>Booking Sekarang</span>
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="{{ route('my-bookings.index') }}"
                           class="inline-flex items-center justify-center px-8 py-4 text-base font-medium rounded-xl text-white bg-indigo-800 hover:bg-indigo-900 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 border-2 border-indigo-300">
                            My Bookings
                        </a>
                    @endguest
                </div>

                <!-- Trust Indicators -->
                <div class="mt-12 flex flex-wrap justify-center gap-6 text-sm text-indigo-100">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <span>100+ Happy Gamers</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Buka 10:00 - 22:00</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Booking Online 24/7</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wave Divider -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto">
                <path d="M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z" fill="#f9fafb"></path>
            </svg>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-16 sm:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                    Kenapa Pilih Kami?
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Kami menyediakan pengalaman gaming terbaik dengan fasilitas premium dan harga terjangkau
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- Feature 1 -->
                <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center mb-5 text-3xl">
                        🎮
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Latest Gaming Gear
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        PS5, Xbox Series X, PC RTX 4090, dan gaming peripherals terbaru untuk pengalaman gaming maksimal
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-xl flex items-center justify-center mb-5 text-3xl">
                        ⚡
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        High-Speed Internet
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Koneksi internet 100+ Mbps dedicated untuk gaming online tanpa lag dan ping rendah
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-14 h-14 bg-gradient-to-br from-pink-500 to-rose-600 rounded-xl flex items-center justify-center mb-5 text-3xl">
                        ❄️
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Comfortable Environment
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Ruangan ber-AC, kursi gaming ergonomis, dan ambiance nyaman untuk gaming seharian
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center mb-5 text-3xl">
                        💰
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Harga Terjangkau
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Mulai dari Rp 30.000/jam dengan sistem booking online yang mudah dan cepat
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-14 h-14 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-xl flex items-center justify-center mb-5 text-3xl">
                        🍕
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        F&B Available
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Snack, minuman, dan makanan tersedia untuk menemani sesi gaming kamu
                    </p>
                </div>

                <!-- Feature 6 -->
                <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-violet-600 rounded-xl flex items-center justify-center mb-5 text-3xl">
                        🔒
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Private & Secure
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Ruangan private dengan sistem keamanan terjamin dan privacy maksimal
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- How It Works Section -->
    <div class="py-16 sm:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                    Cara Booking Mudah
                </h2>
                <p class="text-lg text-gray-600">
                    Hanya 3 langkah untuk mulai gaming!
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                <!-- Step 1 -->
                <div class="text-center relative">
                    <div class="w-20 h-20 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6 text-3xl font-bold text-indigo-600">
                        1
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Pilih Room & Waktu</h3>
                    <p class="text-gray-600">
                        Browse room yang tersedia dan pilih waktu yang kamu mau
                    </p>
                </div>

                <!-- Arrow (hidden on mobile) -->
                <div class="hidden md:flex items-center justify-center">
                    <svg class="w-12 h-12 text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </div>

                <!-- Step 2 -->
                <div class="text-center relative">
                    <div class="w-20 h-20 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6 text-3xl font-bold text-indigo-600">
                        2
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Bayar Online</h3>
                    <p class="text-gray-600">
                        Bayar dengan VA, QRIS, E-wallet, atau Credit Card (aman & cepat)
                    </p>
                </div>

                <!-- Arrow (hidden on mobile) -->
                <div class="hidden md:flex items-center justify-center">
                    <svg class="w-12 h-12 text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </div>

                <!-- Step 3 -->
                <div class="text-center relative">
                    <div class="w-20 h-20 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6 text-3xl font-bold text-indigo-600">
                        3
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Datang & Main</h3>
                    <p class="text-gray-600">
                        Tunjukkan booking code dan mulai gaming session kamu!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="relative bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-16 sm:py-20 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">
                Ready to Level Up?
            </h2>
            <p class="text-xl text-indigo-100 mb-8 max-w-2xl mx-auto">
                Booking sekarang dan rasakan pengalaman gaming terbaik dengan setup premium!
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                @guest
                    <a href="{{ route('register') }}"
                       class="inline-flex items-center justify-center px-8 py-4 text-base font-medium rounded-xl text-indigo-600 bg-white hover:bg-indigo-50 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                        <span>Daftar Gratis</span>
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                    <a href="{{ route('login') }}"
                       class="inline-flex items-center justify-center px-8 py-4 text-base font-medium rounded-xl text-white bg-transparent hover:bg-white/10 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 border-2 border-white">
                        Sudah Punya Akun? Login
                    </a>
                @else
                    <a href="{{ route('rooms.index') }}"
                       class="inline-flex items-center justify-center px-8 py-4 text-base font-medium rounded-xl text-indigo-600 bg-white hover:bg-indigo-50 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                        <span>Booking Sekarang</span>
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                @endguest
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="bg-gray-900 text-gray-300 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <!-- Brand -->
                <div>
                    <h3 class="text-white text-lg font-bold mb-4">🎮 Gaming Room XYZ</h3>
                    <p class="text-sm">
                        Rental gaming room terbaik dengan setup premium dan harga terjangkau di Surabaya.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-white text-sm font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('rooms.index') }}" class="hover:text-white transition-colors">Browse Rooms</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">About Us</a></li>
                        @auth
                            <li><a href="{{ route('my-bookings.index') }}" class="hover:text-white transition-colors">My Bookings</a></li>
                        @endauth
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-white text-sm font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                            <span>info@gamingroom.com</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                            </svg>
                            <span>0812-3456-789</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Surabaya, Jawa Timur</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-gray-800 pt-8 text-center text-sm">
                <p>&copy; {{ date('Y') }} Gaming Room XYZ. All rights reserved.</p>
            </div>
        </div>
    </div>
</x-guest-layout>
