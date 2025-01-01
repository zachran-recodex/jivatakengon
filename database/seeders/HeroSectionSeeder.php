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
                'title' => 'Welcome to Our Website',
                'subtitle' => 'We offer the best solutions for your business needs. Let us help you succeed.',
                'image' => 'hero-sections/default1.jpg',
            ],
            [
                'title' => 'Innovative Solutions',
                'subtitle' => 'Our team delivers innovative and customized solutions for your growth.',
                'image' => 'hero-sections/default2.jpg',
            ],
            [
                'title' => 'Your Trusted Partner',
                'subtitle' => 'We value trust and transparency in our business relationships.',
                'image' => 'hero-sections/default3.jpg',
            ],
        ];

        foreach ($heroSections as $heroSection) {
            HeroSection::create($heroSection);
        }
    }
}
