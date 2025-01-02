<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use Illuminate\Database\Seeder;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heroSections = [
            [
                'title' => 'Discover the Great Outdoors',
                'subtitle' => 'Escape the hustle and immerse yourself in the beauty of nature.',
                'image' => 'main/images/hero/hero-one_img-1.jpg',
            ],
            [
                'title' => 'Adventure Awaits',
                'subtitle' => 'Experience unforgettable moments under the stars.',
                'image' => 'main/images/hero/hero-one_img-1.jpg',
            ],
            [
                'title' => 'Connect with Nature',
                'subtitle' => 'Find peace and tranquility in breathtaking landscapes.',
                'image' => 'main/images/hero/hero-one_img-1.jpg',
            ],
        ];

        foreach ($heroSections as $heroSection) {
            HeroSection::create($heroSection);
        }
    }
}
