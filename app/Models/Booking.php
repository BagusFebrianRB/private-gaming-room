<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_code',
        'user_id',
        'room_id',
        'booking_date',
        'start_time',
        'end_time',
        'duration',
        'price_per_hour',
        'total_amount',
        'payment_type',
        'paid_amount',
        'remaining_amount',
        'payment_status',
        'booking_status',
        'notes',
        'cancelled_reason',
        'cancelled_by',
        'confirmed_at',
        'completed_at',
        'cancelled_at',
    ];

    protected $casts = [
        'booking_date' => 'date',
        'price_per_hour' => 'decimal:2',
        'total_amount' => 'decimal:2',
        'paid_amount' => 'decimal:2',
        'remaining_amount' => 'decimal:2',
        'confirmed_at' => 'datetime',
        'completed_at' => 'datetime',
        'cancelled_at' => 'datetime',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function cancelledBy()
    {
        return $this->belongsTo(User::class, 'cancelled_by');
    }

    // Helper methods
    public function isPending()
    {
        return $this->booking_status === 'pending';
    }

    public function isConfirmed()
    {
        return $this->booking_status === 'confirmed';
    }

    public function isCompleted()
    {
        return $this->booking_status === 'completed';
    }

    public function isCancelled()
    {
        return $this->booking_status === 'cancelled';
    }

    public function isPartiallyPaid()
    {
        return $this->payment_status === 'partial';
    }

    public function isPaid()
    {
        return $this->payment_status === 'paid';
    }

    public function isPaymentPending()
    {
        return $this->payment_status === 'pending';
    }
}
