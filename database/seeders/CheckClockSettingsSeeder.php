<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\check_clock_settings;

class CheckClockSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        check_clock_settings::create([
            'id' => 1,
            'name' => 'Standard Shift',
            'type' => 1
        ]);

        check_clock_settings::create([
            'id' => 2,
            'name' => 'Night Shift',
            'type' => 2
        ]);

    }
}
