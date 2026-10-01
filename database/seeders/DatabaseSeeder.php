<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Users
        User::factory(5)->create();

        // Categories
        $categories = Category::factory(5)->create();

        // Tags
        $tags = Tag::factory(8)->create();

        // Products
        $products = Product::factory(60)->create();

        // Hubungkan product dengan tag
        $products->each(function ($product) use ($tags) {
            $product->tags()->attach(
                $tags->random(rand(1, 3))->pluck('id')
            );
        });
    }
}