<?php

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ai_posts;
use App\Models\category;


/**
 * Summary of DatabaseSeeder;=
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database
     */
    public function run(): void
    {
        $this->call([
            ai_postSeeder::class,
            CategorySeeder::class
        ]);
    }
}
