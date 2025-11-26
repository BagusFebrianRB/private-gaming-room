<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Section -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-2">Admin Dashboard</h1>
                    <p>Selamat datang, {{ Auth::user()->name }}!</p>
                </div>
            </div>

            <!-- Quick Access - Customer Area -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-6 mb-6">
                <h3 class="text-lg font-semibold text-blue-900 mb-4">
                    🎮 Quick Access - Customer Area
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <a href="{{ route('home') }}" class="block p-4 bg-white rounded-lg hover:shadow-md transition">
                        <div class="font-semibold text-gray-900">Landing Page</div>
                        <div class="text-sm text-gray-600">View as customer</div>
                    </a>
                    <a href="{{ route('rooms.index') }}"
                        class="block p-4 bg-white rounded-lg hover:shadow-md transition">
                        <div class="font-semibold text-gray-900">Browse Rooms</div>
                        <div class="text-sm text-gray-600">See room catalog</div>
                    </a>
                    <a href="{{ route('booking.index') }}"
                        class="block p-4 bg-white rounded-lg hover:shadow-md transition">
                        <div class="font-semibold text-gray-900">Make Booking</div>
                        <div class="text-sm text-gray-600">Test booking flow</div>
                    </a>
                </div>
            </div>

            <!-- Dashboard Stats (placeholder) -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mt-4">Dashboard admin dengan statistik akan tampil di sini.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>