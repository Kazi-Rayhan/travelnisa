<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faqs')->insert([
            [
                'order' => 1,
                'title' => 'How can I confirm that you have received my reservation?',
                'body' => 'Once your reservation is successfully submitted, you will receive a confirmation email with the details of your booking. If you do not receive this email within a few minutes, please check your spam folder or contact our support team for assistance.',
                'created_at' => now(),
            ],
            [
                'order' => 2,
                'title' => 'Up to what age are they considered children?',
                'body' => 'Children are typically considered to be those aged 12 and under. For specific hotels or services, age limits may vary, so please check the hotel\'s policy or contact us for clarification.',
                'created_at' => now(),
            ],
            [
                'order' => 3,
                'title' => 'Do you have any discount code?',
                'body' => 'Yes, we occasionally offer discount codes during promotions or special events. To stay updated on our latest offers, sign up for our newsletter or follow us on social media.',
                'created_at' => now(),
            ],
            [
                'order' => 4,
                'title' => 'How can I get in touch with my hotel?',
                'body' => 'Once your reservation is confirmed, you will receive the hotel\'s contact information via email. You can directly reach out to the hotel for any specific inquiries or additional requests.',
                'created_at' => now(),
            ],
            [
                'order' => 5,
                'title' => 'On the last day, can I leave the room later?',
                'body' => 'Late check-out requests are subject to availability and may incur an additional fee. Please contact the hotel directly on the day of your departure to check if a late check-out is possible.',
                'created_at' => now(),
            ],
            [
                'order' => 6,
                'title' => 'Can I cancel my reservation?',
                'body' => 'Yes, you can cancel your reservation, but cancellation policies vary depending on the hotel and booking type. Please refer to the cancellation policy in your booking confirmation or contact customer support for assistance.',
                'created_at' => now(),
            ],
            [
                'order' => 7,
                'title' => 'Do you have hotels with a spa?',
                'body' => 'Yes, we offer a variety of hotels that feature spa services. You can filter your hotel search to include properties with spa amenities or contact us for personalized recommendations.',
                'created_at' => now(),
            ],
        ]);

    }
}
