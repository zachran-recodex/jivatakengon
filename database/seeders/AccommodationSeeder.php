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
                'title' => 'Welcome to Our Website',
                'subtitle' => 'We offer the best solutions for your business needs. Let us help you succeed.',
                'image' => 'accommodations/default1.jpg',
            ],
            [
                'title' => 'Innovative Solutions',
                'subtitle' => 'Our team delivers innovative and customized solutions for your growth.',
                'image' => 'accommodations/default2.jpg',
            ],
            [
                'title' => 'Your Trusted Partner',
                'subtitle' => 'We value trust and transparency in our business relationships.',
                'image' => 'accommodations/default3.jpg',
            ],
        ];

        foreach ($accommodations as $accommodation) {
            Accommodation::create($accommodation);
        }
    }
}
