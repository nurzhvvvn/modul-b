<?php

namespace Database\Seeders;

use App;
use App\Models\Categories;
use App\Models\User;
use App\Models\adverts;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PharIo\Version\AndVersionConstraintGroup;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Ethan Brooks',
            'phone' => '+1 202 555 0143',
            'email' => 'ethan@example.com',
            'password' => 'ethan_123',
            'role' => 'user'
        ]);
        User::create([
            'name' => 'Olivia Carter',
            'phone' => '+44 7700 900321',
            'email' => 'olivia@example.com',
            'password' => 'olivia_123',
            'role' => 'moderator'
        ]);
        User::create([
            'name' => 'Mason Hill',
            'phone' => '+61 412 345 678',
            'email' => 'mason@example.com',
            'password' => 'mason_123',
            'role' => 'user'
        ]);
        User::create([
            'name' => 'Ava Thompson',
            'phone' => '+49 1512 3456789',
            'email' => 'ava@example.com',
            'password' => 'ava_123',
            'role' => 'moderator'
        ]);
        User::create([
            'name' => 'Liam Wright',
            'phone' => '+33 6 12 34 56 78',
            'email' => 'liam@example.com',
            'password' => 'liam_123',
            'role' => 'user'
        ]);
        User::create([
            'name' => 'Sophia Mitchell',
            'phone' => '+7 777 123 45 67',
            'email' => 'sophia@example.com',
            'password' => 'sophia_123',
            'role' => 'moderator'
        ]);
        User::create([
            'name' => 'Noah Adams',
            'phone' => '+34 600 700 800',
            'email' => 'noah@example.com',
            'password' => 'noah_123',
            'role' => 'user'
        ]);
        User::create([
            'name' => 'Emma Clark',
            'phone' => '+39 347 123 4567',
            'email' => 'emma@example.com',
            'password' => 'emma_123',
            'role' => 'moderator'
        ]);

        
        Categories::create([
            'name' => 'Real Estate'
        ]);
        Categories::create([
            'name' => 'Vehicles'
        ]);
        Categories::create([
            'name' => 'Jobs'
        ]);
        Categories::create([
            'name' => 'Services'
        ]);
        Categories::create([
            'name' => 'Electronics'
        ]);
        Categories::create([
            'name' => 'Personal Items'
        ]);
        Categories::create([
            'name' => 'Hobbies & Leisure'
        ]);
        Categories::create([
            'name' => 'Animals & Pets'
        ]);
        Categories::create([
            'name' => 'Home & Garden'
        ]);
        Categories::create([
            'name' => 'Business & Equipment'
        ]);

        Adverts::create([
            'title' => 'Modern Apartment in City Center',
            'text' => 'Spacious 2-bedroom apartment with great view.',
            'status' => 'published',
            'price' => '1200',
            'views_count' => '256',
            'category' => 'C1',
            'author' => 'ethan@example.com',
            'photos' => '[\"advert-1.jpg\",\"advert-2.jpg\"]',
            'paid_services' => '[\"top\",\"vip\"]'
        ]);
        Adverts::create([
            'title' => 'Cozy Suburban House',
            'text' => 'Quiet area, 3 bedrooms, renovated kitchen.',
            'status' => 'declined',
            'price' => '980',
            'views_count' => '143',
            'category' => 'C1',
            'author' => 'emma@example.com',
            'photos' => '[\"advert-1.jpg\",\"advert-2.jpg\",\"advert-3.jpg\"]',
            'paid_services' => '[]'
        ]);
        Adverts::create([
            'title' => 'Downtown Studio',
            'text' => 'Perfect for students, fully furnished.',
            'status' => 'moderation',
            'price' => '650',
            'views_count' => '77',
            'category' => 'C1',
            'author' => 'elijah@example.com',
            'photos' => '[\"advert-1.jpg\",\"advert-2.jpg\"]',
            'paid_services' => '[\"top\"]'
        ]);
        Adverts::create([
            'title' => 'Country Cottage',
            'text' => 'Wooden cottage near the lake.',
            'status' => 'published',
            'price' => '1500',
            'views_count' => '301',
            'category' => 'C1',
            'author' => 'benjamin@example.com',
            'photos' => '[\"advert-1.jpg\",\"advert-2.jpg\",\"advert-3.jpg\"]',
            'paid_services' => '[\"vip\"]'
        ]);
        Adverts::create([
            'title' => 'Beachfront Villa',
            'text' => 'Luxury villa with private beach access.',
            'status' => 'published',
            'price' => '3500',
            'views_count' => '512',
            'category' => 'C1',
            'author' => 'charlotte@example.com',
            'photos' => '[\"advert-1.jpg\",\"advert-2.jpg\",\"advert-3.jpg\",\"advert-4.jpg\"]',
            'paid_services' => '[\"top\",\"vip\"]'
        ]);
        Adverts::create([
            'title' => 'Used Toyota Corolla 2018',
            'text' => 'Well-maintained, single owner.',
            'status' => 'published',
            'price' => '8500',
            'views_count' => '712',
            'category' => 'C2',
            'author' => 'mason@example.com',
            'photos' => '[\"advert-1.jpg\",\"advert-2.jpg\"]',
            'paid_services' => '[]'
        ]);
        Adverts::create([
            'title' => 'BMW X5 2016',
            'text' => 'Excellent condition, full service history.',
            'status' => 'moderation',
            'price' => '23000',
            'views_count' => '89',
            'category' => 'C2',
            'author' => 'lucas@example.com',
            'photos' => '[\"advert-1.jpg\",\"advert-2.jpg\",\"advert-3.jpg\"]',
            'paid_services' => '[\"vip\"]'
        ]);
        Adverts::create([
            'title' => 'Electric Scooter',
            'text' => 'Lightweight model with 25km range.',
            'status' => 'declined',
            'price' => '280',
            'views_count' => '33',
            'category' => 'C2',
            'author' => 'noah@example.com',
            'photos' => '[\"advert-1.jpg\",\"advert-2.jpg\"]',
            'paid_services' => '[\"top\"]'
        ]);
        Adverts::create([
            'title' => 'Yamaha Motorcycle',
            'text' => 'Perfect for city and touring rides.',
            'status' => 'published',
            'price' => '4100',
            'views_count' => '267',
            'category' => 'C2',
            'author' => 'ethan@example.com',
            'photos' => '[\"advert-1.jpg\",\"advert-2.jpg\",\"advert-3.jpg\"]',
            'paid_services' => '[]'
        ]);
        Adverts::create([
            'title' => 'Ford F-150',
            'text' => 'Powerful pickup truck with low mileage.',
            'status' => 'published',
            'price' => '18500',
            'views_count' => '344',
            'category' => 'C2',
            'author' => 'james@example.com',
            'photos' => '[\"advert-1.jpg\",\"advert-2.jpg\",\"advert-3.jpg\",\"advert-4.jpg\"]',
            'paid_services' => '[\"top\",\"vip\"]'
        ]);
    }
}
