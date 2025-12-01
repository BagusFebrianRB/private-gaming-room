<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;

/*
|--------------------------------------------------------------------------
| Public Routes (Guest & Authenticated)
|--------------------------------------------------------------------------
*/

// Landing Page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rooms (Public, bisa diakses tanpa login)
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/{slug}', [RoomController::class, 'show'])->name('rooms.show');

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');

/*
|--------------------------------------------------------------------------
| Dashboard Redirect (after login)
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    // Redirect based on role
    if (Auth::user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }

    // Customer redirect to home
    return redirect()->route('home');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Customer Routes (Authenticated Customer)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Booking Routes (Customer)
    Route::prefix('booking')->name('booking.')->group(function () {
        Route::get('/', function () {
            return view('booking.index');
        })->name('index'); // Step 1: Pilih waktu

        Route::post('/check-availability', function () {
            return 'Check availability';
        })->name('check-availability'); // Step 2: Show available rooms

        Route::post('/confirm', function () {
            return 'Confirm booking';
        })->name('confirm'); // Step 3: Konfirmasi

        Route::get('/payment/{bookingCode}', function ($bookingCode) {
            return view('booking.payment', compact('bookingCode'));
        })->name('payment'); // Step 4: Pembayaran
    });

    // My Bookings
    Route::prefix('my-bookings')->name('my-bookings.')->group(function () {
        Route::get('/', function () {
            return view('my-bookings.index');
        })->name('index');

        Route::get('/{bookingCode}', function ($bookingCode) {
            return view('my-bookings.show', compact('bookingCode'));
        })->name('show');

        Route::post('/{bookingCode}/cancel', function ($bookingCode) {
            return 'Cancel booking';
        })->name('cancel');
    });
});

/*
|--------------------------------------------------------------------------
| Admin Routes (Authenticated Admin Only)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Rooms Management
    Route::prefix('rooms')->name('rooms.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\RoomController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\RoomController::class, 'create'])->name('create');
        Route::post('/', [App\Http\Controllers\Admin\RoomController::class, 'store'])->name('store');
        Route::get('/{room}/edit', [App\Http\Controllers\Admin\RoomController::class, 'edit'])->name('edit');
        Route::put('/{room}', [App\Http\Controllers\Admin\RoomController::class, 'update'])->name('update');
        Route::delete('/{room}', [App\Http\Controllers\Admin\RoomController::class, 'destroy'])->name('destroy');
    });

    // Bookings Management
    Route::prefix('bookings')->name('bookings.')->group(function () {
        Route::get('/', function () {
            return view('admin.bookings.index');
        })->name('index');

        Route::get('/{id}', function ($id) {
            return view('admin.bookings.show', compact('id'));
        })->name('show');

        Route::post('/{id}/accept-payment', function ($id) {
            return 'Accept payment';
        })->name('accept-payment');

        Route::post('/{id}/cancel', function ($id) {
            return 'Cancel booking';
        })->name('cancel');

        Route::post('/{id}/complete', function ($id) {
            return 'Complete booking';
        })->name('complete');

        // Manual Booking (Walk-in)
        Route::get('/create/manual', function () {
            return view('admin.bookings.create');
        })->name('create');

        Route::post('/manual', function () {
            return 'Store manual booking';
        })->name('store-manual');
    });

    // Customers Management
    Route::prefix('customers')->name('customers.')->group(function () {
        Route::get('/', function () {
            return view('admin.customers.index');
        })->name('index');

        Route::get('/{id}', function ($id) {
            return view('admin.customers.show', compact('id'));
        })->name('show');

        Route::post('/{id}/block', function ($id) {
            return 'Block customer';
        })->name('block');

        Route::post('/{id}/unblock', function ($id) {
            return 'Unblock customer';
        })->name('unblock');
    });

    // Reports
    Route::prefix('reports')->name('reports.')->group(function () {
        Route::get('/', function () {
            return view('admin.reports.index');
        })->name('index');

        Route::get('/revenue', function () {
            return 'Revenue report';
        })->name('revenue');

        Route::get('/bookings', function () {
            return 'Bookings report';
        })->name('bookings');

        Route::get('/customers', function () {
            return 'Customers report';
        })->name('customers');
    });

    // Settings
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/', function () {
            return view('admin.settings.index');
        })->name('index');

        Route::put('/', function () {
            return 'Update settings';
        })->name('update');
    });
});

// Load Breeze auth routes (login, register, dll)
require __DIR__ . '/auth.php';