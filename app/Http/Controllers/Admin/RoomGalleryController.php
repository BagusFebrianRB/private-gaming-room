<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RoomGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class RoomGalleryController extends Controller
{
    public function index()
    {
        $gallery = RoomGallery::orderBy('order')->get();
        return view('admin.room-gallery.index', compact('gallery'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,jpg,png,webp|max:2048',
            'order' => 'nullable|integer',
        ]);

        // Upload & resize image
        $image = $request->file('image');
        $filename = 'gallery_' . time() . '.' . $image->getClientOriginalExtension();

        $img = Image::read($image);
        $img->scale(width: 1200);

        $path = 'room-gallery/' . $filename;
        Storage::disk('public')->put($path, $img->encode());

        RoomGallery::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image_path' => $path,
            'order' => $validated['order'] ?? 0,
        ]);

        return redirect()->back()->with('success', 'Gambar berhasil ditambahkan!');
    }

    public function update(Request $request, RoomGallery $roomGallery)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $roomGallery->update($validated);

        return redirect()->back()->with('success', 'Gambar berhasil diupdate!');
    }

    public function destroy(RoomGallery $roomGallery)
    {
        Storage::disk('public')->delete($roomGallery->image_path);
        $roomGallery->delete();

        return redirect()->back()->with('success', 'Gambar berhasil dihapus!');
    }
}
