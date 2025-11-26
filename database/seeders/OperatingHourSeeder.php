<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OperatingHourSeeder extends Seeder
{
    public function run(): void
    {
        $days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];

        foreach ($days as $day) {
            DB::table('operating_hours')->insert([
                'day' => $day,
                'is_open' => true,
                'open_time' => '10:00:00',
                'close_time' => '22:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
