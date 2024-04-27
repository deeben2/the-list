<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Steven Weller',
            'email' => 'steven08063@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'Aaron Belz',
            'email' => 'belzaaron@gmail.om',
        ]);
    }
}
