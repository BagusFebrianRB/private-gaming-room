<x-guest-layout>
    <div class="relative w-full bg-white overflow-hidden min-h-screen">
        <!-- Diagonal Cross Grid Top Background -->

        <div class="relative z-20">
            <!-- Header Section -->
            <div class=" text-gray-700 py-12 sm:py-8">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl sm:text-4xl font-bold mb-4">Our Gaming Rooms</h1>
                    <p class="text-lg text-gray-600">
                        Pilih room favoritmu dan mulai gaming session!
                    </p>
                </div>
            </div>

            <!-- Filter & Search Section -->
            <div class="shadow-sm sticky top-0 z-10">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                    <form method="GET" action="{{ route('rooms.index') }}" class="flex flex-col sm:flex-row gap-3">
                        <!-- Search Input -->
                        <div class="flex-1">
                            <input type="text" name="search" value="{{ request('search') }}"
                                placeholder="Cari room..."
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- Search Button -->
                        <button type="submit"
                            class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium">
                            Cari
                        </button>

                        <!-- Reset Button -->
                        @if (request('search') || request('sort'))
                            <a href="{{ route('rooms.index') }}"
                                class="px-6 py-2.5 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition-colors font-medium text-center">
                                Reset
                            </a>
                        @endif
                    </form>
                </div>
            </div>

            <!-- Rooms Grid -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
                @if ($rooms->count() > 0)
                    <!-- Results Count -->
                    <div class="mb-6">
                        <p class="text-gray-600">
                            Menampilkan <span class="font-semibold text-gray-900">{{ $rooms->count() }}</span> room
                            @if (request('search'))
                                untuk "<span class="font-semibold text-blue-600">{{ request('search') }}</span>"
                            @endif
                        </p>
                    </div>

                    <!-- Grid Container -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                        @foreach ($rooms as $room)
                            <div
                                class="bg-white rounded-xl shadow-xl hover:shadow-xl transition-shadow duration-300 overflow-hidden group">
                                <!-- Room Image -->
                                <div class="relative aspect-[4/3] overflow-hidden bg-gray-200">
                                    @if ($room->thumbnail)
                                        <img src="{{ asset('storage/' . $room->thumbnail->image_path) }}"
                                            alt="{{ $room->name }}"
                                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                    @else
                                        <div
                                            class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-200 to-gray-300">
                                            <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                </path>
                                            </svg>
                                        </div>
                                    @endif

                                    <!-- Status Badge -->
                                    <div class="absolute top-3 right-3">
                                        <span
                                            class="px-3 py-1 bg-green-500 text-white text-xs font-semibold rounded-full shadow-lg">
                                            Available
                                        </span>
                                    </div>

                                    <!-- Capacity Badge -->
                                    <div class="absolute bottom-3 left-3">
                                        <span
                                            class="px-3 py-1 bg-white/90 backdrop-blur-sm text-gray-700 text-xs font-medium rounded-full shadow-md flex items-center gap-1">
                                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                                                </path>
                                            </svg>
                                            {{ $room->capacity }} orang
                                        </span>
                                    </div>
                                </div>

                                <!-- Room Info -->
                                <div class="p-5">
                                    <!-- Room Name -->
                                    <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-1">
                                        {{ $room->name }}
                                    </h3>

                                    <!-- Description (truncated) -->
                                    <p class="text-sm text-gray-600 mb-4 line-clamp-2">
                                        {{ $room->description }}
                                    </p>

                                    <!-- Price & Button -->
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="text-xs text-gray-500">Mulai dari</p>
                                            <p class="text-xl font-bold text-blue-600">
                                                Rp {{ number_format($room->price_per_hour, 0, ',', '.') }}
                                                <span class="text-sm font-normal text-gray-500">/jam</span>
                                            </p>
                                        </div>

                                        <a href="{{ route('rooms.show', $room->slug) }}"
                                            class="inline-flex items-center justify-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition-colors shadow-md hover:shadow-lg">
                                            Lihat
                                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="mt-8">
                        {{ $rooms->links() }}
                    </div>
                @else
                    <!-- Empty State -->
                    <div class="text-center py-16">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-gray-100 rounded-full mb-6">
                            <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Tidak Ada Room Ditemukan</h3>
                        <p class="text-gray-600 mb-6">
                            @if (request('search'))
                                Tidak ada room yang sesuai dengan pencarian "{{ request('search') }}"
                            @else
                                Belum ada room yang tersedia saat ini
                            @endif
                        </p>
                        <a href="{{ route('rooms.index') }}"
                            class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium">
                            Lihat Semua Room
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-guest-layout>
