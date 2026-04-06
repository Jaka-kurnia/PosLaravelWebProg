<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'kurnia jaka',
            'email' => 'kurniajakaa@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
