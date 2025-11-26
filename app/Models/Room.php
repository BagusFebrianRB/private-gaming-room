<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'capacity',
        'price_per_hour',
        'status',
    ];

    protected $casts = [
        'price_per_hour' => 'decimal:2',
    ];

    // Relationships
    public function images()
    {
        return $this->hasMany(RoomImage::class);
    }

    public function thumbnail()
    {
        return $this->hasOne(RoomImage::class)->where('is_thumbnail', true);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // Helper methods
    public function isActive()
    {
        return $this->status === 'active';
    }

    public function isMaintenance()
    {
        return $this->status === 'maintenance';
    }
}
