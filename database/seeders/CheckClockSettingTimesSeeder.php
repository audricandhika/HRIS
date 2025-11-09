<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\check_clock_setting_times;

class CheckClockSettingTimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        check_clock_setting_times::create([
            'id' => 1,
            'ck_settings_id' => 1,
            'day' => '2025-11-10',  
            'clock_in' => '08:00:00',
            'clock_out' => '17:00:00',
            'break_start' => '12:00:00',
            'break_end' => '13:00:00',
        ]);

        check_clock_setting_times::create([
            'id' => 2,
            'ck_settings_id' => 2,
            'day' => '2025-11-11',  
            'clock_in' => '08:00:00',
            'clock_out' => '17:00:00',
            'break_start' => '12:00:00',
            'break_end' => '13:00:00',
        ]);
    }
}
