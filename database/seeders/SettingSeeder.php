<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // Business Info
            ['key' => 'business_name', 'value' => 'Gaming Room XYZ', 'type' => 'text'],
            ['key' => 'business_tagline', 'value' => 'Best Gaming Experience', 'type' => 'text'],
            ['key' => 'business_description', 'value' => 'Private gaming room dengan fasilitas terbaik', 'type' => 'text'],
            ['key' => 'business_address', 'value' => 'Jl. Gaming No. 123, Surabaya', 'type' => 'text'],
            ['key' => 'business_phone', 'value' => '08123456789', 'type' => 'text'],
            ['key' => 'business_email', 'value' => 'info@gamingroom.com', 'type' => 'text'],
            ['key' => 'business_whatsapp', 'value' => '08123456789', 'type' => 'text'],

            // Social Media
            ['key' => 'instagram_url', 'value' => 'https://instagram.com/gamingroom', 'type' => 'text'],
            ['key' => 'facebook_url', 'value' => '', 'type' => 'text'],
            ['key' => 'tiktok_url', 'value' => '', 'type' => 'text'],

            // Booking Policy
            ['key' => 'min_booking_duration', 'value' => '1', 'type' => 'number'],
            ['key' => 'max_booking_duration', 'value' => '8', 'type' => 'number'],
            ['key' => 'payment_timeout', 'value' => '30', 'type' => 'number'],
            ['key' => 'dp_percentage', 'value' => '50', 'type' => 'number'],
            ['key' => 'min_booking_advance', 'value' => '0', 'type' => 'number'],

            // Booking Toggle
            ['key' => 'booking_enabled', 'value' => 'true', 'type' => 'boolean'],

            // Terms & Conditions
            ['key' => 'terms_conditions', 'value' => 'Booking tidak dapat dibatalkan atau direfund setelah pembayaran dikonfirmasi.', 'type' => 'text'],

            // Notification Settings
            ['key' => 'whatsapp_enabled', 'value' => 'false', 'type' => 'boolean'],
            ['key' => 'whatsapp_api_key', 'value' => '', 'type' => 'text'],
            ['key' => 'email_enabled', 'value' => 'true', 'type' => 'boolean'],
        ];

        foreach ($settings as $setting) {
            DB::table('settings')->insert(array_merge($setting, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
