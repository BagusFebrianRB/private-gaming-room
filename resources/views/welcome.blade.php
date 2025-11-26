<x-guest-layout>
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl font-bold mb-4">Gaming Room XYZ</h1>
            <p class="text-xl mb-8">Best Gaming Experience in Town</p>

            @guest
                <div class="space-x-4">
                    <a href="{{ route('rooms.index') }}" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100">
                        Browse Rooms
                    </a>
                    <a href="{{ route('register') }}" class="inline-block bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600">
                        Get Started
                    </a>
                </div>
            @else
                <div class="space-x-4">
                    <a href="{{ route('booking.index') }}" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100">
                        Book Now
                    </a>
                    <a href="{{ route('my-bookings.index') }}" class="inline-block bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600">
                        My Bookings
                    </a>
                </div>
            @endguest
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12">Why Choose Us?</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="text-4xl mb-4">🎮</div>
                    <h3 class="text-xl font-semibold mb-2">Latest Gaming Gear</h3>
                    <p class="text-gray-600">RTX 4090, PS5, Xbox Series X, and more</p>
                </div>

                <div class="text-center">
                    <div class="text-4xl mb-4">⚡</div>
                    <h3 class="text-xl font-semibold mb-2">High-Speed Internet</h3>
                    <p class="text-gray-600">100+ Mbps for lag-free gaming</p>
                </div>

                <div class="text-center">
                    <div class="text-4xl mb-4">❄️</div>
                    <h3 class="text-xl font-semibold mb-2">Comfortable Environment</h3>
                    <p class="text-gray-600">AC, comfy chairs, and great ambiance</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-blue-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Play?</h2>
            <p class="text-xl mb-8">Book your gaming room now and experience the best gaming setup!</p>

            @guest
                <a href="{{ route('register') }}" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100">
                    Sign Up Now
                </a>
            @else
                <a href="{{ route('booking.index') }}" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100">
                    Book a Room
                </a>
            @endguest
        </div>
    </div>

    <!-- Footer -->
    <div class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; 2025 Gaming Room XYZ. All rights reserved.</p>
        </div>
    </div>
</x-guest-layout>
