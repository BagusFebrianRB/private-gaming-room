<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperatingHour extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'is_open',
        'open_time',
        'close_time',
    ];

    protected $casts = [
        'is_open' => 'boolean',
    ];

    // Helper method untuk cek apakah hari tertentu buka
    public static function isOpenOn($day)
    {
        $operatingHour = self::where('day', strtolower($day))->first();
        return $operatingHour ? $operatingHour->is_open : false;
    }

    // Get operating hours untuk hari tertentu
    public static function getHoursFor($day)
    {
        return self::where('day', strtolower($day))->first();
    }
}
