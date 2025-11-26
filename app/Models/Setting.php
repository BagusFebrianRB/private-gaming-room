<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'type',
    ];

    // Helper static methods untuk get setting
    public static function get($key, $default = null)
    {
        $setting = self::where('key', $key)->first();

        if (!$setting) {
            return $default;
        }

        // Cast value berdasarkan type
        return match($setting->type) {
            'number' => (int) $setting->value,
            'boolean' => $setting->value === 'true',
            'json' => json_decode($setting->value, true),
            default => $setting->value,
        };
    }

    // Set setting value
    public static function set($key, $value)
    {
        $setting = self::firstOrCreate(['key' => $key]);

        // Auto-detect type
        $type = match(true) {
            is_bool($value) => 'boolean',
            is_numeric($value) => 'number',
            is_array($value) => 'json',
            default => 'text',
        };

        // Convert value to string for storage
        if (is_bool($value)) {
            $value = $value ? 'true' : 'false';
        } elseif (is_array($value)) {
            $value = json_encode($value);
        }

        $setting->update([
            'value' => $value,
            'type' => $type,
        ]);

        return $setting;
    }
}
