<x-guest-layout>
    <div class="relative w-full bg-white overflow-hidden min-h-screen">

        <div class="relative z-20">
            <!-- Breadcrumb -->
            <div class="bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                    <nav class="flex items-center space-x-2 text-sm">
                        <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-800">Home</a>
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <a href="{{ route('rooms.index') }}" class="text-gray-600 hover:text-gray-800">Rooms</a>
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-900 font-medium">{{ $room->name }}</span>
                    </nav>
                </div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Left Column - Images & Info -->
                    <div class="lg:col-span-2">
                        <!-- Image Gallery -->
                        <div class="mb-8" x-data="{
                            currentImage: 0,
                            images: {{ $room->images->map(fn($img) => asset('storage/' . $img->image_path))->toJson() }}
                        }">
                            <!-- Main Image -->
                            <div class="relative aspect-[16/10] rounded-2xl overflow-hidden bg-gray-200 mb-4 shadow-xl">
                                @if ($room->images->count() > 0)
                                    <template x-for="(image, index) in images" :key="index">
                                        <img :src="image" alt="{{ $room->name }}"
                                            x-show="currentImage === index" class="w-full h-full object-cover">
                                    </template>

                                    <!-- Navigation Arrows -->
                                    @if ($room->images->count() > 1)
                                        <button
                                            @click="currentImage = currentImage > 0 ? currentImage - 1 : images.length - 1"
                                            class="absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg hover:bg-white transition-colors">
                                            <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 19l-7-7 7-7"></path>
                                            </svg>
                                        </button>
                                        <button
                                            @click="currentImage = currentImage < images.length - 1 ? currentImage + 1 : 0"
                                            class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg hover:bg-white transition-colors">
                                            <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </button>

                                        <!-- Image Counter -->
                                        <div
                                            class="absolute bottom-4 right-4 px-3 py-1.5 bg-black/70 backdrop-blur-sm text-white text-sm rounded-lg">
                                            <span x-text="currentImage + 1"></span> / <span
                                                x-text="images.length"></span>
                                        </div>
                                    @endif
                                @else
                                    <div
                                        class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-200 to-gray-300">
                                        <svg class="w-24 h-24 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </div>
                                @endif
                            </div>

                            <!-- Thumbnail Grid -->
                            @if ($room->images->count() > 1)
                                <div class="grid grid-cols-4 gap-3">
                                    @foreach ($room->images as $index => $image)
                                        <button @click="currentImage = {{ $index }}"
                                            :class="currentImage === {{ $index }} ? 'ring-4 ring-blue-500' :
                                                'ring-2 ring-transparent hover:ring-gray-300'"
                                            class="aspect-[4/3] rounded-lg overflow-hidden transition-all">
                                            <img src="{{ asset('storage/' . $image->image_path) }}"
                                                alt="{{ $room->name }}" class="w-full h-full object-cover">
                                        </button>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <!-- Room Details -->
                        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8">
                            <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                                {{ $room->name }}
                            </h1>

                            <!-- Quick Info -->
                            <div class="flex flex-wrap gap-4 mb-6">
                                <!-- Capacity -->
                                <div class="flex items-center gap-2 text-gray-700">
                                    <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                                        </path>
                                    </svg>
                                    <span class="font-medium">{{ $room->capacity }} orang</span>
                                </div>

                                <!-- Status -->
                                <div class="flex items-center gap-2">
                                    <span
                                        class="px-3 py-1 bg-green-100 text-green-700 text-sm font-semibold rounded-full">
                                        ✓ Available
                                    </span>
                                </div>

                                <!-- Price -->
                                <div class="flex items-center gap-2 text-gray-700">
                                    <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z">
                                        </path>
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-2xl font-bold text-blue-600">
                                        Rp {{ number_format($room->price_per_hour, 0, ',', '.') }}
                                        <span class="text-base font-normal text-gray-500">/jam</span>
                                    </span>
                                </div>
                            </div>

                            <hr class="my-6">

                            <!-- Description -->
                            <div>
                                <h2 class="text-xl font-bold text-gray-900 mb-4">Deskripsi</h2>
                                <div class="prose prose-indigo max-w-none">
                                    <p class="text-gray-700 leading-relaxed whitespace-pre-line">
                                        {{ $room->description }}</p>
                                </div>
                            </div>

                            <hr class="my-6">

                            <!-- Facilities/Features -->
                            <div>
                                <h2 class="text-xl font-bold text-gray-900 mb-4">Fasilitas</h2>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <div class="flex items-center gap-3 text-gray-700">
                                        <div
                                            class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 text-indigo-600" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <span class="font-medium">High-End Console</span>
                                    </div>
                                    <div class="flex items-center gap-3 text-gray-700">
                                        <div
                                            class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                            ⚡
                                        </div>
                                        <span class="font-medium">High-Speed Internet 100+ Mbps</span>
                                    </div>
                                    <div class="flex items-center gap-3 text-gray-700">
                                        <div
                                            class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                            ❄️
                                        </div>
                                        <span class="font-medium">Air Conditioner</span>
                                    </div>
                                    <div class="flex items-center gap-3 text-gray-700">
                                        <div
                                            class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                            🪑
                                        </div>
                                        <span class="font-medium">Comfortable Sofa</span>
                                    </div>
                                    <div class="flex items-center gap-3 text-gray-700">
                                        <div
                                            class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                            🎧
                                        </div>
                                        <span class="font-medium">Big TV Display</span>
                                    </div>
                                    <div class="flex items-center gap-3 text-gray-700">
                                        <div
                                            class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                            🍕
                                        </div>
                                        <span class="font-medium">F&B Available</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Booking Card (Sticky) -->
                    <div class="lg:col-span-1">
                        <div class="bg-white rounded-2xl shadow-xl p-6 sticky top-24">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Booking Room Ini</h3>

                            <!-- Price Highlight -->
                            <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-xl p-5 mb-6">
                                <p class="text-sm text-gray-600 mb-1">Harga per jam</p>
                                <p class="text-3xl font-bold text-blue-600">
                                    Rp {{ number_format($room->price_per_hour, 0, ',', '.') }}
                                </p>
                                <p class="text-xs text-gray-500 mt-2">* Harga sudah termasuk semua fasilitas</p>
                            </div>

                            <!-- Capacity Info -->
                            <div class="flex items-center gap-3 mb-6 text-gray-700">
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                                    </path>
                                </svg>
                                <span>Kapasitas maksimal <strong>{{ $room->capacity }} orang</strong></span>
                            </div>

                            <!-- CTA Button -->
                            @auth
                                <a href="{{ route('booking.index') }}?room={{ $room->id }}"
                                    class="block w-full py-4 bg-gradient-to-r from-blue-600 to-teal-600 text-white text-center font-bold rounded-xl hover:from-blue-700 hover:to-teal-700 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                                    Booking Sekarang
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="block w-full py-4 bg-gradient-to-r from-blue-600 to-teal-600 text-white text-center font-bold rounded-xl hover:from-blue-700 hover:to-teal-700 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                                    Login untuk Booking
                                </a>
                                <p class="text-center text-sm text-gray-600 mt-3">
                                    Belum punya akun?
                                    <a href="{{ route('register') }}"
                                        class="text-blue-600 hover:text-blue-700 font-medium">
                                        Daftar disini
                                    </a>
                                </p>
                            @endauth

                            <hr class="my-6">

                            <!-- Contact Info -->
                            <div>
                                <p class="text-sm text-gray-600 mb-3">Butuh bantuan?</p>
                                <div class="space-y-2">
                                    <a href="https://wa.me/+6282137679526" target="_blank"
                                        class="flex items-center gap-3 text-sm text-gray-700 hover:text-green-600 transition-colors">
                                        <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center">
                                            <svg class="w-4 h-4 text-green-600" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <span>WhatsApp Customer Service</span>
                                    </a>
                                    <a href="tel:082137679526"
                                        class="flex items-center gap-3 text-sm text-gray-700 hover:text-blue-600 transition-colors">
                                        <div class="w-8 h-8 bg-indigo-100 rounded-lg flex items-center justify-center">
                                            <svg class="w-4 h-4 text-blue-600" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                                                </path>
                                            </svg>
                                        </div>
                                        <span>0812-3456-789</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
