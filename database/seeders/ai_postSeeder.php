<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ai_posts;
use Illuminate\Support\Facades\File;

class ai_postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $json = file::get(path: 'database/json/ai_posts.json');
        $posts = collect(json_decode($json));

        $posts->each(function($post){
            ai_posts::create([
                'title' => $post->title,
                'post_content' => $post->post_content,
                // 'categories_id' => $post->categories_id
            ]);
        });
    }
}
