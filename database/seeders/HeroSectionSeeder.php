<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Welcome to Our Website',
                'description' => 'We offer the best solutions for your business needs. Let us help you succeed.',
                'image' => 'hero-sections/default1.jpg',
            ],
            [
                'title' => 'Innovative Solutions',
                'description' => 'Our team delivers innovative and customized solutions for your growth.',
                'image' => 'hero-sections/default2.jpg',
            ],
            [
                'title' => 'Your Trusted Partner',
                'description' => 'We value trust and transparency in our business relationships.',
                'image' => 'hero-sections/default3.jpg',
            ],
        ];

        foreach ($data as $item) {
            HeroSection::create($item);
        }
    }
}
