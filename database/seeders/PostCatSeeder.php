<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Travel', 'slug' => 'travel', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Food', 'slug' => 'food', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Lifestyle', 'slug' => 'lifestyle', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Technology', 'slug' => 'technology', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Health', 'slug' => 'health', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Finance', 'slug' => 'finance', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Education', 'slug' => 'education', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Fashion', 'slug' => 'fashion', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Entertainment', 'slug' => 'entertainment', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sports', 'slug' => 'sports', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        DB::table('post_cats')->insert($categories);
    }
}
