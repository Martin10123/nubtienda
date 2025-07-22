<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
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
            'name' => 'Martin Elias',
            'email' => 'martin@gmail.com',
            'cellphone' => '3006830624',
            'role' => 'admin',
            'birthdate' => Carbon::create(2001, 06, 12),
            'country' => 'Colombia',
            'city' => 'Cartagena',
            'address' => 'Nariño calle la paz #41-34',
            'password' => bcrypt('12345678'),
        ]);
    }
}
