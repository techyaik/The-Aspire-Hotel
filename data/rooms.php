<?php
$roomsData = [
    'standard-double' => [
        'name' => 'Standard Double Room',
        'price' => '₹3,500',
        'description' => 'One queen bed with storage. Perfect for a comfortable and efficient stay.',
        'size' => '22 M²',
        'beds' => '1 Queen Bed',
        'guests' => '2 Adults',
        'view' => 'City View',
        'gallery' => [
            ['url' => './assets/images/room_standard_coll.png', 'title' => 'Standard Double Main'],
            ['url' => './assets/images/royale_room_gallery.png', 'title' => 'Cozy Interior'],
        ],
        'roomAmenities' => [
            ['name' => 'Free High-speed Wi-Fi', 'icon' => 'wifi-high'],
            ['name' => 'Smart LED TV', 'icon' => 'television'],
            ['name' => 'Air Conditioning', 'icon' => 'thermometer-hot'],
            ['name' => 'Daily Housekeeping', 'icon' => 'check-circle'],
        ],
        'hotelAmenities' => [
            ['name' => '24/7 Security', 'icon' => 'shield'],
            ['name' => 'Free Parking', 'icon' => 'truck'],
            ['name' => 'Laundry Service', 'icon' => 'washing-machine'],
        ],
    ],

    'double-single' => [
        'name' => 'Double Single Bedroom',
        'price' => '₹4,000',
        'description' => 'Two single beds in a room for family and corporate guest. Versatile and convenient.',
        'size' => '24 M²',
        'beds' => '2 Single Beds',
        'guests' => '2 Adults',
        'view' => 'Street View',
        'gallery' => [
            ['url' => './assets/images/room_royale_2.png', 'title' => 'Double Single Main'],
            ['url' => './assets/images/washroom_gallery.png', 'title' => 'Modern Washroom'],
        ],
        'roomAmenities' => [
            ['name' => 'Free High-speed Wi-Fi', 'icon' => 'wifi-high'],
            ['name' => 'Smart LED TV', 'icon' => 'television'],
            ['name' => 'Air Conditioning', 'icon' => 'thermometer-hot'],
            ['name' => 'Work Desk', 'icon' => 'desktop'],
        ],
        'hotelAmenities' => [
            ['name' => 'Business Center', 'icon' => 'briefcase'],
            ['name' => '24/7 Security', 'icon' => 'shield'],
        ],
    ],

    'deluxe-double' => [
        'name' => 'Deluxe Double Room',
        'price' => '₹5,500',
        'description' => 'Spacious room with king size bed. Designed for those who appreciate extra space and luxury.',
        'size' => '32 M²',
        'beds' => '1 King Bed',
        'guests' => '2 Adults',
        'view' => 'City View',
        'gallery' => [
            ['url' => './assets/images/room_deluxe_coll.png', 'title' => 'Deluxe Double Main'],
            ['url' => './assets/images/premium_room_gallery.png', 'title' => 'Elegant Decor'],
        ],
        'roomAmenities' => [
            ['name' => 'Free High-speed Wi-Fi', 'icon' => 'wifi-high'],
            ['name' => 'Smart LED TV', 'icon' => 'television'],
            ['name' => 'Mini-bar', 'icon' => 'coffee'],
            ['name' => 'Air Conditioning', 'icon' => 'thermometer-hot'],
            ['name' => 'Luxury Toiletry Set', 'icon' => 'sparkle'],
        ],
        'hotelAmenities' => [
            ['name' => 'Grand Restaurant', 'icon' => 'fork-knife'],
            ['name' => 'Fitness Center', 'icon' => 'barbell'],
            ['name' => 'Free Parking', 'icon' => 'truck'],
        ],
    ],

    'deluxe-family' => [
        'name' => 'Deluxe Family Room',
        'price' => '₹6,500',
        'description' => 'Spacious room with one queen size and one single bed. Ideal for small families seeking comfort.',
        'size' => '38 M²',
        'beds' => '1 Queen Bed + 1 Single Bed',
        'guests' => '3 Adults',
        'view' => 'City View',
        'gallery' => [
            ['url' => './assets/images/hero_1.png', 'title' => 'Deluxe Family Main'],
            ['url' => './assets/images/room_premium_2.png', 'title' => 'Spacious Area'],
        ],
        'roomAmenities' => [
            ['name' => 'Free High-speed Wi-Fi', 'icon' => 'wifi-high'],
            ['name' => 'Smart LED TV', 'icon' => 'television'],
            ['name' => 'Mini-bar & Coffee Station', 'icon' => 'coffee'],
            ['name' => 'Air Conditioning', 'icon' => 'thermometer-hot'],
        ],
        'hotelAmenities' => [
            ['name' => 'Grand Restaurant', 'icon' => 'fork-knife'],
            ['name' => 'Travel Desk', 'icon' => 'map-pin'],
            ['name' => '24/7 Security', 'icon' => 'shield'],
        ],
    ],

    'royale-deluxe-double' => [
        'name' => 'Royale Deluxe Double Room',
        'price' => '₹8,500',
        'description' => 'Floor to ceiling glass with excellent city view. One king bed. Experience ultimate luxury and skyline vistas.',
        'size' => '45 M²',
        'beds' => '1 King Bed',
        'guests' => '2 Adults',
        'view' => 'Skyline View (Floor-to-ceiling)',
        'gallery' => [
            ['url' => './assets/images/room_suite_coll.png', 'title' => 'Royale Deluxe Main'],
            ['url' => './assets/images/deluxe_room_gallery.png', 'title' => 'Panoramic View'],
        ],
        'roomAmenities' => [
            ['name' => 'Free Ultra-high-speed Wi-Fi', 'icon' => 'wifi-high'],
            ['name' => 'Home Theater System', 'icon' => 'television'],
            ['name' => 'Smart Room Automation', 'icon' => 'thermometer-hot'],
            ['name' => 'Luxury Bathrobes', 'icon' => 'sparkle'],
        ],
        'hotelAmenities' => [
            ['name' => 'Rooftop Pool & Bar', 'icon' => 'drop'],
            ['name' => 'Spa & Wellness', 'icon' => 'heart'],
            ['name' => 'VIP Check-in', 'icon' => 'shield-check'],
        ],
    ],

    'royale-deluxe-family' => [
        'name' => 'Royale Deluxe Family Room',
        'price' => '₹10,500',
        'description' => 'Floor to ceiling glass with excellent city view. One queen bed and one single bed for memorable stay of your family.',
        'size' => '52 M²',
        'beds' => '1 Queen Bed + 1 Single Bed',
        'guests' => '3 Adults',
        'view' => 'Skyline View (Floor-to-ceiling)',
        'gallery' => [
            ['url' => './assets/images/room_deluxe.png', 'title' => 'Royale Family Main'],
            ['url' => './assets/images/room_deluxe_2.png', 'title' => 'Luxury Suite'],
        ],
        'roomAmenities' => [
            ['name' => 'Free Ultra-high-speed Wi-Fi', 'icon' => 'wifi-high'],
            ['name' => '55-inch Smart TV', 'icon' => 'television'],
            ['name' => 'Nespresso Coffee Machine', 'icon' => 'coffee'],
            ['name' => 'Separate Living Area', 'icon' => 'layout'],
        ],
        'hotelAmenities' => [
            ['name' => 'Rooftop Pool & Bar', 'icon' => 'drop'],
            ['name' => 'Private Tour Guide', 'icon' => 'map-trifold'],
            ['name' => 'Executive Lounge', 'icon' => 'coffee'],
        ],
    ],
];
