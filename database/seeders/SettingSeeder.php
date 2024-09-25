<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'site_name' => 'Travelnisa',
            'site_description' => 'Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.',
            'site_address' => '1616 Broadway NY, New York 10001
United States of America',
            'phone' => '855 100 4444',
            'email' => 'info@luxuryhotel.com',
            'facebook_link' => '#',
            'instagram_link' => '#',
            'twitter_link' => '#',
            'youtube_link' => '#',
        ]);
    }
}
