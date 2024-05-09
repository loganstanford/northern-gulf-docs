<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Client;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Logan',
            'email' => 'logan@onscripttech.com',
            'password' => bcrypt('f0rNarnia'),
        ]);

        Client::factory()->create();
    }
}
