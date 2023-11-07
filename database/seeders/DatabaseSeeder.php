<?php

namespace Database\Seeders;

use Database\Seeders\Category\CategorySeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Mr. Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345'),
        ]);
        $this->call([
            CustomerSeeder::class,
            CategorySeeder::class,
        ]);
    }
}