<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomGallery extends Model
{
    use HasFactory;

    protected $table = 'room_gallery';

    protected $fillable = [
        'title',
        'description',
        'image_path',
        'order',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Scope untuk ambil yang aktif aja
    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('order');
    }
}
