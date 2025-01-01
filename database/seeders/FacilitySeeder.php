<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facilities = [
            [
                'title' => 'Tent Rentals',
                'subtitle' => 'We offer high-quality tents for all types of camping, whether you are a beginner or an experienced camper.',
                'icon' => 'flaticon-helmet',
            ],
            [
                'title' => 'Campfire Setup',
                'subtitle' => 'Enjoy a cozy evening with a professional campfire setup, perfect for warmth and gathering.',
                'icon' => 'flaticon-helmet',
            ],
            [
                'title' => 'Guided Hiking Tours',
                'subtitle' => 'Explore the great outdoors with our guided hiking tours through scenic landscapes.',
                'icon' => 'flaticon-helmet',
            ],
            [
                'title' => 'Fishing Gear Rental',
                'subtitle' => 'We provide all the equipment you need for a relaxing fishing trip at nearby lakes or rivers.',
                'icon' => 'flaticon-helmet',
            ],
            [
                'title' => 'Luxury Camping (Glamping)',
                'subtitle' => 'Experience the comfort of luxury camping with our premium tents, beds, and amenities.',
                'icon' => 'flaticon-helmet',
            ],
            [
                'title' => 'Camp Kitchen',
                'subtitle' => 'Fully equipped kitchens at the campsite, so you can cook meals with ease and convenience.',
                'icon' => 'flaticon-helmet',
            ],
        ];

        foreach ($facilities as $facility) {
            Facility::create($facility);
        }
    }
}
