<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\users;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        users::create([
            'id' => 1,
            'email' => 'admin@hris.com',
            'password' => Hash::make('admin123'),
            'is_admin' => true
        ]);

        users::create([
            'id' => 2,
            'email' => 'user@hris.com',
            'password' => Hash::make('password123'),
            'is_admin' => false
        ]);
    }
}