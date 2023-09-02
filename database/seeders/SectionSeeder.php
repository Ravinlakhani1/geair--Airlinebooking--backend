<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            [
                'name' => 'Header',
                'slug' => 'header',
            ],
            [
                'name' => 'Hero Banner',
                'slug' => 'hero-banner',
            ],
            [
                'name'=>'Flight Offer Deals',
                'slug'=>'flight-offer-deals',
            ],
            [
                'name'=>'Your Great Destination',
                'slug'=>'your-great-destination',
            ],
            [
                'name'=>'Packages',
                'slug'=>'packages',
            ],
            [
                'name'=>'Services',
                'slug'=>'services',
            ],
            [
                'name'=>'News & Events',
                'slug'=>'news-events',
            ],
            [
                'name'=>'Who We Are',
                'slug'=>'who-we-are',
            ],
            [
                'name'=>'Asked Question',
                'slug'=>'asked-question',
            ],
            [
                'name'=>'Contact Us',
                'slug'=>'contact-us',
            ],
            [
                'name'=>'Footer',
                'slug'=>'footer',
            ]

        ];

        foreach ($sections as $section) {
            \App\Models\Section::create($section);
        }
    }
}
