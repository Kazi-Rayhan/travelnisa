<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            DB::table('posts')->insert([
                'author_id' => rand(1, 10),
                'category_id' => rand(1, 10),
                'title' => $faker->sentence(6, true),
                'seo_title' => $faker->sentence(4, true),
                'excerpt' => $faker->paragraph(),
                'body' => $faker->text(200),
                'image' => $faker->imageUrl(640, 480, 'cats'),
                'slug' => $faker->slug(),
                'meta_description' => $faker->text(150),
                'meta_keywords' => $faker->words(3, true),
                'status' => $faker->randomElement(['PUBLISHED', 'DRAFT', 'PENDING']),
                'featured' => $faker->boolean(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
    
}
