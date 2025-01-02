<?php

namespace Database\Seeders;

use App\Models\Accommodation;
use Illuminate\Database\Seeder;

class AccommodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accommodations = [
            [
                'title' => 'Cozy Camping Tents',
                'subtitle' => 'Experience the outdoors with our high-quality and comfortable camping tents.',
                'image' => 'main/images/service/service-1.jpg',
            ],
            [
                'title' => 'Campfire Nights',
                'subtitle' => 'Enjoy warm campfire evenings with your friends and family.',
                'image' => 'main/images/service/service-1.jpg',
            ],
            [
                'title' => 'Luxury Glamping',
                'subtitle' => 'Combine the thrill of camping with the comfort of a luxury stay.',
                'image' => 'main/images/service/service-1.jpg',
            ],
            [
                'title' => 'Nature Trails',
                'subtitle' => 'Explore beautiful trails and reconnect with nature during your stay.',
                'image' => 'main/images/service/service-1.jpg',
            ],
            [
                'title' => 'Outdoor Adventures',
                'subtitle' => 'Experience thrilling outdoor activities such as hiking, fishing, and more.',
                'image' => 'main/images/service/service-1.jpg',
            ],
        ];

        foreach ($accommodations as $accommodation) {
            Accommodation::create($accommodation);
        }
    }
}
