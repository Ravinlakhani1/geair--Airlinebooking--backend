<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'section_id' => 1,
                'name' => 'Logo',
                'slug' => 'logo',
                'type' => 'image',
                'default' => json_encode([
                    'scr' => 'https://via.placeholder.com/150',
                    'alt' => 'Logo',
                ]),
            ],
            [
                'section_id' => 1,
                'name' => 'Menu',
                'slug' => 'menu',
                'type' => 'menu',
                'default' => json_encode([
                    [
                        'name' => 'Home',
                        'slug' => 'home',
                        'url' => '/',
                    ],
                    [
                        'name' => 'About',
                        'slug' => 'about',
                        'url' => '/about',
                    ],
                    [
                        'name' => 'Blog',
                        'slug' => 'blog',
                        'url' => '/blog',
                        'sub-manu'=>[
                            [
                                'name' => 'Blog',
                                'slug' => 'blog',
                                'url' => '/blog',
                            ],
                            [
                                'name' => 'Blog Details',
                                'slug' => 'blog-details',
                                'url' => '/blog-details',
                            ],
                        ]
                    ],
                    [
                        'name' => 'Contact',
                        'slug' => 'contact',
                        'url' => '/contact',
                    ],
                ]),
            ],
            [
                'section_id' => 1,
                'name' => 'Buttons',
                'slug' => 'buttons',
                'type' => 'link',
                'default' => json_encode([
                   'guest'=>[
                       [
                           'label'=>'Login',
                           'url'=>'/login',
                       ],
                       [
                           'label'=>'Register',
                           'url'=>'/register',
                       ],
                   ],
                'user'=>[
                    [
                        'name'=>'profile',
                        'url'=>'/profile',
                    ],
                ]
                ]),
            ],
            [
                'section_id' => 2,
                'name' => 'Hero Banner Image',
                'slug' => 'hero-banner-image',
                'type' => 'image',
                'default' => json_encode([
                    'scr' => 'https://via.placeholder.com/150',
                    'alt' => 'Hero Banner Image',
                ]),
            ],
            [
                'section_id' => 2,
                'name' => 'Hero Banner title',
                'slug' => 'hero-banner-title',
                'type' => 'text',
                'default' => json_encode([
                    'text' => "A Lifetime of Discounts? It's Genius.",
                ]),
            ],
            [
                'section_id' => 2,
                'name' => 'Hero Banner Subtitle',
                'slug' => 'hero-banner-subtitle',
                'type' => 'text',
                'default' => json_encode([
                    'text' => "Get rewarded for your travels – unlock instant savings of 10% or more with a free Geairinfo.com account",
                ]),
            ],
            [
                'section_id' => 2,
                'name' => 'Hero Banner Button',
                'slug' => 'hero-banner-button',
                'type' => 'buttons',
                'default' => json_encode([
                   'guest'=>[
                       [
                           'label'=>'Login',
                           'url'=>'/login',
                       ],
                   ],
                    'user'=>[
                        [
                            'label'=>'Book Now',
                            'url'=>'/book-now',
                        ],
                    ],
                ]),
            ],
            [
                'section_id' => 3,
                'name' => 'Badge Title',
                'slug' => 'badge-title',
                'type' => 'text',
                'default' => json_encode([
                    'text' => "OFFER DEALS",
                ]),
            ],
            [
                'section_id' => 3,
                'name' => 'Title',
                'slug' => 'title',
                'type' => 'text',
                'default' => json_encode([
                    'text' => "Flight Offer Deals",
                ]),
            ],
            [
                'section_id' => 3,
                'name' => 'More Button',
                'slug' => 'more-button',
                'type' => 'buttons',
                'default' => json_encode([
                    'label'=>'More',
                    'url'=>'/flight-offer-deals',
                ]),
            ],
            [
                'section_id' => 3,
                'name' => 'Primery Card',
                'slug' => 'primery-card',
                'type' => 'card',
                'default' => json_encode([
                    'image'=>[
                        'src'=>'https://via.placeholder.com/150',
                        'alt'=>'Primery Card',
                    ],
                    'title'=>'Dhaka to Dubai',
                    'date'=>[
                        'start'=>'2021-10-10',
                        'end'=>'2021-10-20',
                    ],
                    'type'=>'Economy',
                    'price'=>'$ 500',
                    'link'=>[
                        'label'=>'Book Now',
                        'url'=>'/book-now',
                    ],
                ]),
            ],
            [
                'section_id' => 3,
                'name' => 'Cards',
                'slug' => 'card',
                'type' => 'card',
                'default' => json_encode([
                    [
                        'image'=>[
                            'src'=>'https://via.placeholder.com/150',
                            'alt'=>'Primery Card',
                        ],
                        'title'=>'Dhaka to Dubai',
                        'date'=>[
                            'start'=>'2021-10-10',
                            'end'=>'2021-10-20',
                        ],
                        'type'=>'Economy',
                        'price'=>'$ 500',
                        'link'=>[
                            'label'=>'Book Now',
                            'url'=>'/book-now',
                        ],
                    ],
                    [
                        'image'=>[
                            'src'=>'https://via.placeholder.com/150',
                            'alt'=>'Primery Card',
                        ],
                        'title'=>'New York to California',
                        'date'=>[
                            'start'=>'2021-10-10',
                            'end'=>'2021-10-20',
                        ],
                        'type'=>'Economy',
                        'price'=>'$ 200',
                        'link'=>[
                            'label'=>'Book Now',
                            'url'=>'/book-now',
                        ],
                    ],
                ]),
            ]
        ];
    }
}
