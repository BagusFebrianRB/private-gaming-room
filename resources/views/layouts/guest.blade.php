<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <!-- Navigation with Scroll Effect -->
    <nav x-data="{
        open: false,
        scrolled: false,
        init() {
            window.addEventListener('scroll', () => {
                this.scrolled = window.scrollY > 20;
            });
        }
    }"
        :class="scrolled ? 'bg-gray-100 backdrop-blur-5xl shadow-xl border-b border-white/10' :
            'bg-none shadow-md'"
        class="sticky top-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('home') }}" class="flex items-center gap-2">
                            <img src="{{ asset('images/Logo1.png') }}" alt="Gaming Room Logo"
                                class="h-10 w-10 object-contain rounded-xl">
                            <span class="font-black text-2xl text-gray-700">PVG</span>
                        </a>
                    </div>

                    <!-- Desktop Navigation Links -->
                    <div class="hidden sm:flex sm:items-center sm:ms-10 space-x-8">
                        <a href="{{ route('home') }}"
                            class="{{ request()->routeIs('home') ? 'text-blue-600 border-b-2 rounded-md  border-blue-600' : 'text-gray-600 hover:text-blue-400' }} inline-flex items-center px-1 pt-1 text-base font-medium transition-colors">
                            Home
                        </a>
                        <a href="{{ route('rooms.index') }}"
                            class="{{ request()->routeIs('rooms.*') ? 'text-blue-600 border-b-2 rounded-md border-blue-600' : 'text-gray-600 hover:text-blue-400' }} inline-flex items-center px-1 pt-1 text-base font-medium transition-colors">
                            Rooms
                        </a>
                        @auth
                            <a href="{{ route('booking.index') }}"
                                class="{{ request()->routeIs('booking.*') ? 'text-blue-600 border-b-2 rounded-md border-blue-600' : 'text-gray-600 hover:text-blue-400' }} inline-flex items-center px-1 pt-1 text-base font-medium transition-colors">
                                Booking
                            </a>
                            <a href="{{ route('my-bookings.index') }}"
                                class="{{ request()->routeIs('my-bookings.*') ? 'text-blue-600 border-b-2 rounded-md border-blue-600' : 'text-gray-600 hover:text-blue-400' }} inline-flex items-center px-1 pt-1 text-base font-medium transition-colors">
                                My Bookings
                            </a>
                        @endauth
                        <a href="{{ route('about') }}"
                            class="{{ request()->routeIs('about') ? 'text-blue-600 border-b-2 rounded-md border-blue-600' : 'text-gray-600 hover:text-blue-400' }} inline-flex items-center px-1 pt-1 text-base font-medium transition-colors">
                            About
                        </a>
                    </div>
                </div>

                <!-- Desktop Right Side -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    @auth
                        <!-- Dropdown Menu -->
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open"
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-800 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>

                            <div x-show="open" @click.away="open = false"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                                class="absolute right-0 mt-1 w-48 rounded-md shadow-lg py-1 bg-blue-600 ring-1 ring-black ring-opacity-5"
                                style="display: none;">

                                @if (Auth::user()->role === 'admin')
                                    <a href="{{ route('admin.dashboard') }}"
                                        class="block px-4 py-2 text-sm text-white hover:bg-blue-700">
                                        Admin Dashboard
                                    </a>
                                @endif
                                <a href="{{ route('profile.edit') }}"
                                    class="block px-4 py-2 text-sm text-white hover:bg-blue-700">
                                    Profile
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="block w-full text-left px-4 py-2 text-sm text-white hover:bg-blue-700">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}"
                            class="text-gray-600 hover:text-blue-400 px-3 py-2 text-sm font-medium transition duration-300">
                            Login
                        </a>
                        <a href="{{ route('register') }}"
                            class="ml-4 inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest uppercase hover:bg-blue-800 transition ease-in-out duration-150">
                            Register
                        </a>
                    @endauth
                </div>

                <!-- Mobile menu button -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:bg-blue-300  hover:text-white focus:outline-none transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div :class="{
            'block': open,
            'hidden': !open,
        }"
            class="fixed w-full hidden sm:hidden bg-gray-600/95 backdrop-blur-lg shadow-lg transition-all duration-300">
            <div class="pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}"
                    class="{{ request()->routeIs('home') ? ' border-blue-600 text-blue-600' : 'border-transparent text-white hover:border-gray-500' }} block ps-3 pe-4 py-2 border-l-4 text-base font-medium">
                    Home
                </a>
                <a href="{{ route('rooms.index') }}"
                    class="{{ request()->routeIs('rooms.*') ? ' border-blue-600 text-blue-600' : 'border-transparent text-white hover:border-gray-500' }} block ps-3 pe-4 py-2 border-l-4 text-base font-medium">
                    Rooms
                </a>
                @auth
                    <a href="{{ route('booking.index') }}"
                        class="{{ request()->routeIs('booking.*') ? ' border-blue-600 text-blue-600' : 'border-transparent text-white  hover:border-gray-500' }} block ps-3 pe-4 py-2 border-l-4 text-base font-medium">
                        Booking
                    </a>
                    <a href="{{ route('my-bookings.index') }}"
                        class="{{ request()->routeIs('my-bookings.*') ? ' border-blue-600 text-blue-600' : 'border-transparent text-white  hover:border-gray-500' }} block ps-3 pe-4 py-2 border-l-4 text-base font-medium">
                        My Bookings
                    </a>
                @endauth
                <a href="{{ route('about') }}"
                    class="{{ request()->routeIs('about') ? ' border-blue-600 text-blue-600' : 'border-transparent text-white  hover:border-gray-500' }} block ps-3 pe-4 py-2 border-l-4 text-base font-medium">
                    About
                </a>
            </div>

            <!-- Mobile User Section -->
            @auth
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="px-4">
                        <div class="font-medium text-lg text-white">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-base text-gray-200">{{ Auth::user()->email }}</div>
                    </div>

                    <div class="mt-3 space-y-1">
                        @if (Auth::user()->role === 'admin')
                            <a href="{{ route('admin.dashboard') }}"
                                class="block ps-3 pe-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300">
                                Admin Dashboard
                            </a>
                        @endif
                        <a href="{{ route('profile.edit') }}"
                            class="block ps-3 pe-4 py-2 border-l-4 border-transparent text-base font-medium text-white hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300">
                            Profile
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="block w-full text-left ps-3 pe-4 py-2 border-l-4 border-transparent text-base font-medium text-white hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <div class="pt-4 pb-3 border-t border-gray-200">
                    <div class="space-y-1">
                        <a href="{{ route('login') }}"
                            class="block ps-3 pe-4 py-2 border-l-4 border-transparent text-base font-medium text-white  hover:border-gray-500">
                            Login
                        </a>
                        <a href="{{ route('register') }}"
                            class="block ps-3 pe-4 py-2 border-l-4 border-transparent text-base font-medium text-white  hover:border-gray-500">
                            Register
                        </a>
                    </div>
                </div>
            @endauth
        </div>
    </nav>

    <!-- Page Content -->
    <main class="min-h-screen bg-gray-50">
        {{ $slot }}
    </main>

    <script>
        AOS.init();
    </script>

</body>

</html>
