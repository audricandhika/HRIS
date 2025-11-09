<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\check_clocks;

class CheckClocksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        check_clocks::create([
          'user_id' => 1,
                'check_clock_type' => 1,  
                'check_clock_time' => '2025-11-09 08:00:00'
                
        ]);

        check_clocks::create([
            'user_id' => 2,
                'check_clock_type' => 1, 
                'check_clock_time' => '2025-11-09 17:00:00'
        ]);
    }
}
