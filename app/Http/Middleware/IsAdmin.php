<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login DAN role-nya admin
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            // Kalau bukan admin, redirect ke home dengan error message
            return redirect('/')->with('error', 'Unauthorized access.');
        }

        return $next($request);
    }
}
