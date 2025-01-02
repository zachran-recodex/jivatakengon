<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'title' => 'Tech Innovation Expo 2025',
                'image' => 'events/tech-innovation-expo.jpg',
                'event_date' => '2025-03-15',
                'is_active' => true,
            ],
            [
                'title' => 'Health & Wellness Conference',
                'image' => 'events/health-wellness-conference.jpg',
                'event_date' => '2025-04-10',
                'is_active' => true,
            ],
            [
                'title' => 'Sustainable Energy Summit',
                'image' => 'events/sustainable-energy-summit.jpg',
                'event_date' => '2025-05-20',
                'is_active' => true,
            ],
            [
                'title' => 'Digital Marketing Workshop',
                'image' => 'events/digital-marketing-workshop.jpg',
                'event_date' => '2025-02-25',
                'is_active' => false,
            ],
            [
                'title' => 'AI & Machine Learning Hackathon',
                'image' => 'events/ai-ml-hackathon.jpg',
                'event_date' => '2025-06-05',
                'is_active' => true,
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
