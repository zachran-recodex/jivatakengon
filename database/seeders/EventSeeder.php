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
                'title' => 'Mountain Escape Camp',
                'image' => 'main/images/event/event-1.jpg',
                'event_date' => '2025-03-15',
                'is_active' => true,
            ],
            [
                'title' => 'Forest Night Adventure',
                'image' => 'main/images/event/event-1.jpg',
                'event_date' => '2025-04-10',
                'is_active' => true,
            ],
            [
                'title' => 'Riverfront Camping Retreat',
                'image' => 'main/images/event/event-1.jpg',
                'event_date' => '2025-05-20',
                'is_active' => true,
            ],
            [
                'title' => 'Family Fun Camp Weekend',
                'image' => 'main/images/event/event-1.jpg',
                'event_date' => '2025-06-15',
                'is_active' => true,
            ],
            [
                'title' => 'Starry Sky Camping Experience',
                'image' => 'main/images/event/event-1.jpg',
                'event_date' => '2025-07-05',
                'is_active' => true,
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
