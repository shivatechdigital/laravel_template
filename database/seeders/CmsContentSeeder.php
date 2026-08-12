<?php

namespace Database\Seeders;

use App\Models\ContentBlock;
use App\Models\GalleryItem;
use App\Models\MembershipPlan;
use App\Models\PricingPlan;
use App\Models\Service;
use App\Models\SocialLink;
use App\Models\TeamMember;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CmsContentSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Hair Services',
                'description' => 'Professional haircut, styling, coloring and treatment solutions.',
                'sort_order' => 1,
                'sub_services' => [
                    'Women\'s, men\'s & kids\' haircuts',
                    'Hair trims & layers',
                    'Blowouts & event styling',
                    'Hair coloring (full color, highlights, balayage, ombre, root touch-up)',
                    'Creative coloring',
                    'Hair treatments (deep conditioning, keratin, hair spa, scalp treatments)',
                    'Hair straightening/rebonding',
                    'Hair extensions (clip-in, tape-in, fusion)',
                ],
            ],
            [
                'title' => 'Makeup Services',
                'description' => 'Everyday to bridal makeup services with skin-specific product selection.',
                'sort_order' => 2,
                'sub_services' => [
                    'Party makeup',
                    'Bridal makeup',
                    'Engagement makeup',
                    'HD/airbrush makeup',
                ],
            ],
            [
                'title' => 'Skin & Spa Services',
                'description' => 'Rejuvenation and relaxation services for glowing skin and stress relief.',
                'sort_order' => 3,
                'sub_services' => [
                    'Facial clean-up',
                    'Hydra facial',
                    'Body polish',
                    'Relaxation spa',
                ],
            ],
        ];

        foreach ($services as $item) {
            Service::updateOrCreate(
                ['title' => $item['title']],
                [
                    'slug' => Str::slug($item['title']) . '-seed',
                    'description' => $item['description'],
                    'sub_services' => $item['sub_services'],
                    'is_active' => true,
                    'sort_order' => $item['sort_order'],
                ]
            );
        }

        $plans = [
            [
                'name' => 'Hair Services',
                'description' => 'Complete hair care menu with transparent sub-service rates.',
                'sort_order' => 1,
                'sub_service_prices' => [
                    ['name' => 'Women Haircut', 'price' => 799, 'description' => 'Includes consultation + finish'],
                    ['name' => 'Men Haircut', 'price' => 399, 'description' => 'Clean cut and styling'],
                    ['name' => 'Hair Trim', 'price' => 299, 'description' => 'Length maintenance'],
                    ['name' => 'Keratin Treatment', 'price' => 3500, 'description' => 'Starts from'],
                ],
            ],
            [
                'name' => 'Makeup Services',
                'description' => 'Occasion-based makeup pricing.',
                'sort_order' => 2,
                'sub_service_prices' => [
                    ['name' => 'Party Makeup', 'price' => 1999, 'description' => null],
                    ['name' => 'Engagement Makeup', 'price' => 3499, 'description' => null],
                    ['name' => 'Bridal Makeup', 'price' => 7999, 'description' => 'Package starts from'],
                ],
            ],
        ];

        foreach ($plans as $item) {
            PricingPlan::updateOrCreate(
                ['name' => $item['name']],
                [
                    'description' => $item['description'],
                    'sub_service_prices' => $item['sub_service_prices'],
                    'is_active' => true,
                    'sort_order' => $item['sort_order'],
                ]
            );
        }

        $membershipPlans = [
            [
                'name' => 'Silver Glow',
                'description' => 'Great for monthly self-care with special member rates.',
                'price' => 2999,
                'discount_type' => 'flat',
                'discount_value' => 500,
                'final_price' => 2499,
                'expiry_days' => 30,
                'sort_order' => 1,
            ],
            [
                'name' => 'Gold Care',
                'description' => 'Premium plan for regular styling and skin routines.',
                'price' => 6999,
                'discount_type' => 'percentage',
                'discount_value' => 20,
                'final_price' => 5599.20,
                'expiry_days' => 90,
                'sort_order' => 2,
            ],
            [
                'name' => 'Platinum Luxe',
                'description' => 'Best value for frequent salon visitors and bridal prep.',
                'price' => 12999,
                'discount_type' => 'percentage',
                'discount_value' => 25,
                'final_price' => 9749.25,
                'expiry_days' => 180,
                'sort_order' => 3,
            ],
        ];

        foreach ($membershipPlans as $item) {
            MembershipPlan::updateOrCreate(
                ['name' => $item['name']],
                [
                    'slug' => Str::slug($item['name']) . '-seed',
                    'description' => $item['description'],
                    'price' => $item['price'],
                    'discount_type' => $item['discount_type'],
                    'discount_value' => $item['discount_value'],
                    'final_price' => $item['final_price'],
                    'expiry_days' => $item['expiry_days'],
                    'is_active' => true,
                    'sort_order' => $item['sort_order'],
                ]
            );
        }

        $gallery = [
            ['title' => 'Hair Makeover', 'type' => 'image', 'description' => 'Color transformation session result', 'sort_order' => 1],
            ['title' => 'Bridal Studio Reel', 'type' => 'video', 'video_url' => 'https://www.youtube.com/watch?v=rICXf0UH7Cg', 'description' => 'Behind the scenes bridal prep', 'sort_order' => 2],
            ['title' => 'Nail Art Premium', 'type' => 'image', 'description' => 'Luxury nail extension finish', 'sort_order' => 3],
        ];

        foreach ($gallery as $item) {
            GalleryItem::updateOrCreate(
                ['title' => $item['title']],
                [
                    'type' => $item['type'],
                    'video_url' => $item['video_url'] ?? null,
                    'description' => $item['description'] ?? null,
                    'is_active' => true,
                    'sort_order' => $item['sort_order'],
                ]
            );
        }

        $teamMembers = [
            ['name' => 'Ann Smith', 'designation' => 'Hair Stylist', 'bio' => 'Specialist in modern cuts and styling.', 'show_on_home' => true, 'home_priority' => 4, 'sort_order' => 1],
            ['name' => 'Jennifer Hall', 'designation' => 'Cosmetologist', 'bio' => 'Skin care and glow treatment expert.', 'show_on_home' => true, 'home_priority' => 3, 'sort_order' => 2],
            ['name' => 'Roxie Burton', 'designation' => 'Makeup Artist', 'bio' => 'Bridal and event look specialist.', 'show_on_home' => true, 'home_priority' => 2, 'sort_order' => 3],
            ['name' => 'Evelyn Martinez', 'designation' => 'Nail Artist', 'bio' => 'Luxury nail extensions and nail art.', 'show_on_home' => true, 'home_priority' => 1, 'sort_order' => 4],
            ['name' => 'Diane Mateo', 'designation' => 'Fashion Designer', 'bio' => 'Creative trends and occasion styling consultant.', 'show_on_home' => false, 'home_priority' => 0, 'sort_order' => 5],
        ];

        foreach ($teamMembers as $item) {
            TeamMember::updateOrCreate(
                ['name' => $item['name']],
                [
                    'designation' => $item['designation'],
                    'bio' => $item['bio'],
                    'show_on_home' => $item['show_on_home'],
                    'home_priority' => $item['home_priority'],
                    'is_active' => true,
                    'sort_order' => $item['sort_order'],
                ]
            );
        }

        $blocks = [
            [
                'key' => 'home_why_choose',
                'title' => 'Why Our Clients Choose Us',
                'subtitle' => 'We are the leading beauty salon delivering premium beauty and wellness care.',
                'content' => 'Update this section from admin content blocks to match your brand voice.',
                'data' => [
                    'bullets' => [
                        'Personalized beauty consultation before every session',
                        'Modern hygiene-first setup and certified specialists',
                        'Flexible packages for regular and bridal clients',
                        'Premium branded products for skin and hair safety',
                        'Easy booking and responsive support team',
                    ],
                ],
            ],
            [
                'key' => 'home_team',
                'title' => 'Our Professional Team',
                'subtitle' => 'Meet our expert artists and beauty specialists.',
                'content' => null,
                'data' => [
                    'members' => [
                        ['name' => 'Ann Smith', 'role' => 'Hair Stylist', 'description' => 'Specialist in modern cuts and styling.', 'image' => 'beauty_salon/images/our-team/pic1.jpg'],
                        ['name' => 'Jennifer Hall', 'role' => 'Cosmetologist', 'description' => 'Skin care and glow treatment expert.', 'image' => 'beauty_salon/images/our-team/pic2.jpg'],
                        ['name' => 'Roxie Burton', 'role' => 'Makeup Artist', 'description' => 'Bridal and event look specialist.', 'image' => 'beauty_salon/images/our-team/pic3.jpg'],
                        ['name' => 'Evelyn Martinez', 'role' => 'Nail Artist', 'description' => 'Luxury nail extensions and nail art.', 'image' => 'beauty_salon/images/our-team/pic4.jpg'],
                    ],
                ],
            ],
            [
                'key' => 'about_intro',
                'title' => 'Welcome to Beauty Zone - Your Premier Beauty Destination',
                'subtitle' => 'ABOUT BEAUTY ZONE',
                'content' => 'At Beauty Zone, we believe beauty starts with confidence and care. Our salon combines comfort, modern techniques, and skilled professionals to deliver memorable results.',
                'data' => [
                    'paragraph_2' => 'From skin rituals to hair transformations and bridal glam, each service is tailored to your style and skin profile for the best outcome.',
                    'phone' => '001 1234 6789',
                    'experience' => '10+',
                    'since' => '2014',
                    'image' => 'beauty_salon/images/about/img1.jpg',
                ],
            ],
            [
                'key' => 'about_mission_cards',
                'title' => 'Our Mission & Vision',
                'subtitle' => null,
                'content' => null,
                'data' => [
                    'cards' => [
                        ['title' => 'Our Mission', 'description' => 'Deliver exceptional beauty and wellness services that elevate confidence in a welcoming environment.'],
                        ['title' => 'Our Vision', 'description' => 'Be the most trusted beauty destination known for consistency, innovation, and personalization.'],
                        ['title' => 'Our Values', 'description' => 'Quality, hygiene, transparency, and customer happiness shape every service we provide.'],
                    ],
                ],
            ],
            [
                'key' => 'contact_info',
                'title' => 'Quick Contact',
                'subtitle' => 'If you have any questions simply use the following contact details.',
                'content' => null,
                'data' => [
                    'address' => '97 C Block Panki Kanpur',
                    'phone' => '+91 7007294764',
                    'email' => 'info@example.com',
                    'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.3825624477!2d75.65046970649679!3d26.88544791796718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1500819483219',
                ],
            ],
        ];

        foreach ($blocks as $block) {
            ContentBlock::updateOrCreate(
                ['key' => $block['key']],
                [
                    'title' => $block['title'],
                    'subtitle' => $block['subtitle'],
                    'content' => $block['content'],
                    'data' => $block['data'],
                    'is_active' => true,
                ]
            );
        }

        $socialLinks = [
            ['platform' => 'facebook', 'label' => 'Facebook', 'url' => 'https://www.facebook.com/', 'icon_class' => 'fa fa-facebook', 'css_class' => 'facebook', 'sort_order' => 1],
            ['platform' => 'instagram', 'label' => 'Instagram', 'url' => 'https://www.instagram.com/', 'icon_class' => 'fa fa-instagram', 'css_class' => 'instagram', 'sort_order' => 2],
            ['platform' => 'twitter', 'label' => 'Twitter', 'url' => 'https://twitter.com/', 'icon_class' => 'fa fa-twitter', 'css_class' => 'twitter', 'sort_order' => 3],
            ['platform' => 'linkedin', 'label' => 'Linkedin', 'url' => 'https://www.linkedin.com/', 'icon_class' => 'fa fa-linkedin', 'css_class' => 'linkedin', 'sort_order' => 4],
            ['platform' => 'youtube', 'label' => 'Youtube', 'url' => 'https://www.youtube.com/', 'icon_class' => 'fa fa-youtube-play', 'css_class' => 'youtube', 'sort_order' => 5],
            ['platform' => 'google-plus', 'label' => 'Google Plus', 'url' => 'https://www.google.com/', 'icon_class' => 'fa fa-google-plus', 'css_class' => 'google-plus', 'sort_order' => 6],
        ];

        foreach ($socialLinks as $item) {
            SocialLink::updateOrCreate(
                ['platform' => $item['platform']],
                [
                    'label' => $item['label'],
                    'url' => $item['url'],
                    'icon_class' => $item['icon_class'],
                    'css_class' => $item['css_class'],
                    'open_new_tab' => true,
                    'is_active' => true,
                    'sort_order' => $item['sort_order'],
                ]
            );
        }
    }
}
