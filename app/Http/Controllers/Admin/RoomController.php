<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\RoomImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class RoomController extends Controller
{
    /**
     * Display a listing of rooms.
     */
    public function index(Request $request)
    {
        $query = Room::with('thumbnail')->latest();

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Search by name or slug
        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('slug', 'like', '%' . $request->search . '%');
            });
        }

        $rooms = $query->paginate(10);

        return view('admin.rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new room.
     */
    public function create()
    {
        return view('admin.rooms.create');
    }

    /**
     * Store a newly created room in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:rooms,slug'],
            'description' => ['required', 'string'],
            'capacity' => ['required', 'integer', 'min:1'],
            'price_per_hour' => ['required', 'numeric', 'min:0'],
            'status' => ['required', 'in:active,maintenance'],
            'images' => ['required', 'array', 'min:1', 'max:10'],
            'images.*' => ['image', 'mimes:jpeg,jpg,png,webp', 'max:2048'],
            'thumbnail_index' => ['required', 'integer', 'min:0'],
        ]);

        // Create room
        $room = Room::create([
            'name' => $validated['name'],
            'slug' => $validated['slug'],
            'description' => $validated['description'],
            'capacity' => $validated['capacity'],
            'price_per_hour' => $validated['price_per_hour'],
            'status' => $validated['status'],
        ]);

        // Upload images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $filename = 'room_' . $room->id . '_' . time() . '_' . $index . '.' . $image->getClientOriginalExtension();

                // Resize & optimize image
                $img = Image::read($image);
                $img->scale(width: 1200); // Max width 1200px

                // Save to storage
                $path = 'rooms/' . $filename;
                Storage::disk('public')->put($path, $img->encode());

                // Create room image record
                RoomImage::create([
                    'room_id' => $room->id,
                    'image_path' => $path,
                    'is_thumbnail' => ($index == $validated['thumbnail_index']),
                    'order' => $index,
                ]);
            }
        }

        return redirect()->route('admin.rooms.index')
            ->with('success', 'Room created successfully!');
    }

    /**
     * Show the form for editing the specified room.
     */
    public function edit(Room $room)
    {
        $room->load('images');
        return view('admin.rooms.edit', compact('room'));
    }

    /**
     * Update the specified room in storage.
     */
    public function update(Request $request, Room $room)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:rooms,slug,' . $room->id],
            'description' => ['required', 'string'],
            'capacity' => ['required', 'integer', 'min:1'],
            'price_per_hour' => ['required', 'numeric', 'min:0'],
            'status' => ['required', 'in:active,maintenance'],
            'new_images' => ['nullable', 'array', 'max:10'],
            'new_images.*' => ['image', 'mimes:jpeg,jpg,png,webp', 'max:2048'],
            'thumbnail_id' => ['required', 'integer'],
            'delete_images' => ['nullable', 'array'],
            'delete_images.*' => ['integer', 'exists:room_images,id'],
        ]);

        // Update room
        $room->update([
            'name' => $validated['name'],
            'slug' => $validated['slug'],
            'description' => $validated['description'],
            'capacity' => $validated['capacity'],
            'price_per_hour' => $validated['price_per_hour'],
            'status' => $validated['status'],
        ]);

        // Delete images if requested
        if ($request->filled('delete_images')) {
            foreach ($request->delete_images as $imageId) {
                $image = RoomImage::find($imageId);
                if ($image && $image->room_id == $room->id) {
                    // Delete file from storage
                    Storage::disk('public')->delete($image->image_path);
                    // Delete record
                    $image->delete();
                }
            }
        }

        // Upload new images
        if ($request->hasFile('new_images')) {
            $currentMaxOrder = $room->images()->max('order') ?? -1;

            foreach ($request->file('new_images') as $index => $image) {
                $filename = 'room_' . $room->id . '_' . time() . '_' . ($currentMaxOrder + $index + 1) . '.' . $image->getClientOriginalExtension();

                // Resize & optimize image
                $img = Image::read($image);
                $img->scale(width: 1200);

                // Save to storage
                $path = 'rooms/' . $filename;
                Storage::disk('public')->put($path, $img->encode());

                // Create room image record
                RoomImage::create([
                    'room_id' => $room->id,
                    'image_path' => $path,
                    'is_thumbnail' => false,
                    'order' => $currentMaxOrder + $index + 1,
                ]);
            }
        }

        // Update thumbnail
        $room->images()->update(['is_thumbnail' => false]);
        RoomImage::where('id', $validated['thumbnail_id'])
            ->where('room_id', $room->id)
            ->update(['is_thumbnail' => true]);

        return redirect()->route('admin.rooms.index')
            ->with('success', 'Room updated successfully!');
    }

    /**
     * Remove the specified room from storage.
     */
    public function destroy(Room $room)
    {
        // Delete all images from storage
        foreach ($room->images as $image) {
            Storage::disk('public')->delete($image->image_path);
        }

        // Delete room (cascade will delete images records)
        $room->delete();

        return redirect()->route('admin.rooms.index')
            ->with('success', 'Room deleted successfully!');
    }
}