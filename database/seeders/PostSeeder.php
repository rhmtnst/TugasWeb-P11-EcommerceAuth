<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'user_id' => 1,
            'title' => 'Post Milik Admin',
            'body' => 'Ini adalah post yang dibuat oleh Admin.',
        ]);

        Post::create([
            'user_id' => 2,
            'title' => 'Post Milik Editor',
            'body' => 'Ini adalah post yang dibuat oleh Editor.',
        ]);

        Post::create([
            'user_id' => 3,
            'title' => 'Post Milik User',
            'body' => 'Ini adalah post yang dibuat oleh User.',
        ]);
    }
}