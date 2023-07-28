<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Guillermo Cruz',
            'email' => 'guillermo.cruzvega29@outlook.com',
            'password' => bcrypt('122903monaka')
        ]);
    }
}
