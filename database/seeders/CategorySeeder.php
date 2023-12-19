<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json2 = file::get(path: 'database/json/category.json');
        $categories = collect(json_decode($json2));

        $categories->each(function($categ){
            category::create([
                'name' => $categ->name,
                
            ]);
        });
    }
}
