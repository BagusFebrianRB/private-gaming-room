<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of active rooms (Public)
     */
    public function index(Request $request)
    {
        $query = Room::with('thumbnail')
            ->where('status', 'active')
            ->latest();

        // Search by name
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Sort by price
        if ($request->filled('sort')) {
            if ($request->sort === 'price_low') {
                $query->orderBy('price_per_hour', 'asc');
            } elseif ($request->sort === 'price_high') {
                $query->orderBy('price_per_hour', 'desc');
            }
        }

        $rooms = $query->paginate(12);

        return view('rooms.index', compact('rooms'));
    }

    /**
     * Display the specified room detail (Public)
     */
    public function show($slug)
    {
        $room = Room::with('images')
            ->where('slug', $slug)
            ->firstOrFail();

        // Get related rooms (same price range, exclude current room)
        $relatedRooms = Room::with('thumbnail')
            ->where('status', 'active')
            ->where('id', '!=', $room->id)
            ->whereBetween('price_per_hour', [
                $room->price_per_hour * 0.8,
                $room->price_per_hour * 1.2
            ])
            ->limit(3)
            ->get();

        return view('rooms.show', compact('room', 'relatedRooms'));
    }
}
