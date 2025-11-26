<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class RoomImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'image_path',
        'is_thumbnail',
        'order',
    ];

    protected $casts = [
        'is_thumbnail' => 'boolean',
    ];

    // Relationships
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    // Helper methods
    public function getImageUrlAttribute()
    {
        return Storage::url($this->image_path);
    }
}
