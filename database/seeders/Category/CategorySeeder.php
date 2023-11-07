<?php

namespace Database\Seeders\Category;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
   public function run(): void
    {
        Category::factory()->count(5)->create();
    }
}