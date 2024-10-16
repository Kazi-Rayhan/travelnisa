<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $translations = [
            ['key' => 'greeting', 'english' => 'Hello', 'danish' => 'Hej'],
            ['key' => 'farewell', 'english' => 'Goodbye', 'danish' => 'Farvel'],
        ];

        foreach ($translations as $translation) {
            Language::create($translation);
        }

    }
}
