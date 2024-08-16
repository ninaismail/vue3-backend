<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [ 
                'id' => 1, 
                'title' => 'The Collector Private Residence', 
                'type_id' => 1,
                'completion_date' => '2023-06-15',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2020,
                'location' => 'Riyadh',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.',
                'banner' => url('/storage/images/innerhero/projectdetails.webp'),
                'thumbnail' => url('/storage/images/projects/portfolio/thumbnails/works1.webp'),
                'images' => json_encode([
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                ]),
                'client' => 'Smith & Co.',
                'slug' => 'modern-home-design',
                'category_id' => 1,
                'created_at' => now(), // Set created_at to current timestamp
                'updated_at' => now(), // Optionally set updated_at to current timestamp
            ],
            [ 
                'id' => 2, 
                'title' => 'Luxury Villa', 
                'type_id' => 2,
                'completion_date' => '2022-11-08',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2022,
                'location' => 'Riyadh',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.',
                'banner' => url('/storage/images/innerhero/projectdetails.webp'),
                'thumbnail' => url('/storage/images/projects/portfolio/thumbnails/works2.webp'),
                'images' => json_encode([
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                ]),
                'client' => 'Doe Enterprises',
                'slug' => 'luxury-villa',
                'category_id' => 1,
                'created_at' => now(), // Set created_at to current timestamp
                'updated_at' => now(), // Optionally set updated_at to current timestamp
            ],
            [ 
                'id' => 3, 
                'title' => 'Cozy Interior', 
                'type_id' => 3,
                'completion_date' => '2021-09-23',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2021,
                'location' => 'Riyadh',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.',
                'banner' => url('/storage/images/innerhero/projectdetails.webp'),
                'thumbnail' => url('/storage/images/projects/portfolio/thumbnails/works3.webp'),
                'images' => json_encode([
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                ]),
                'client' => 'Interior Designs LLC',
                'slug' => 'cozy-interior',
                'category_id' => 1,
                'created_at' => now(), // Set created_at to current timestamp
                'updated_at' => now(), // Optionally set updated_at to current timestamp
            ],
            [ 
                'id' => 4, 
                'title' => 'Urban Living Room', 
                'type_id' => 4,
                'completion_date' => '2020-05-17',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2020,
                'location' => 'Chicago, IL',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.',
                'banner' => url('/storage/images/innerhero/projectdetails.webp'),
                'thumbnail' => url('/storage/images/projects/portfolio/thumbnails/works4.webp'),
                'images' => json_encode([
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                ]),
                'client' => 'Urban Builders',
                'slug' => 'urban-living-room',
                'category_id' => 1,
                'created_at' => now(), // Set created_at to current timestamp
                'updated_at' => now(), // Optionally set updated_at to current timestamp
            ],
            [ 
                'id' => 5, 
                'title' => 'Sleek Office Design', 
                'type_id' => 3,
                'completion_date' => '2019-12-01',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2019,
                'location' => 'San Francisco, CA',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.',
                'banner' => url('/storage/images/innerhero/projectdetails.webp'),
                'thumbnail' => url('/storage/images/projects/portfolio/thumbnails/works5.webp'),
                'images' => json_encode([
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                ]),
                'client' => 'Tech Innovations',
                'slug' => 'sleek-office-design',
                'category_id' => 1,
                'created_at' => now(), // Set created_at to current timestamp
                'updated_at' => now(), // Optionally set updated_at to current timestamp
            ],
            [ 
                'id' => 6, 
                'title' => 'Eco-friendly Park', 
                'type_id' => 1,
                'completion_date' => '2018-07-30',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2018,
                'location' => 'New York, NY',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.',
                'banner' => url('/storage/images/innerhero/projectdetails.webp'),
                'thumbnail' => url('/storage/images/projects/portfolio/thumbnails/works6.webp'),
                'images' => json_encode([
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                ]),
                'client' => 'Green Earth Foundation',
                'slug' => 'eco-friendly-park',
                'category_id' => 1,
                'created_at' => now(), // Set created_at to current timestamp
                'updated_at' => now(), // Optionally set updated_at to current timestamp
            ],
            [
                'id' => 7,
                'title' => 'Modern Loft',
                'type_id' => 4,
                'completion_date' => '2021-04-20',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2021,
                'location' => 'Seattle, WA',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'banner' => url('/storage/images/innerhero/projectdetails.webp'),
                'thumbnail' => url('/storage/images/projects/portfolio/thumbnails/works1.webp'),
                'images' => json_encode([
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                ]),
                'client' => 'Loft Living Co.',
                'slug' => 'modern-loft',
                'category_id' => 1,
                'created_at' => now(), // Set created_at to current timestamp
                'updated_at' => now(), // Optionally set updated_at to current timestamp
            ],
            [
                'id' => 8,
                'title' => 'Seaside Retreat',
                'type_id' => 2,
                'completion_date' => '2022-07-12',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2022,
                'location' => 'Malibu, CA',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'banner' => url('/storage/images/innerhero/projectdetails.webp'),
                'thumbnail' => url('/storage/images/projects/portfolio/thumbnails/works2.webp'),
                'images' => json_encode([
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                ]),
                'client' => 'Beachside Estates',
                'slug' => 'seaside-retreat',
                'category_id' => 1,
                'created_at' => now(), // Set created_at to current timestamp
                'updated_at' => now(), // Optionally set updated_at to current timestamp
            ],
            [
                'id' => 9,
                'title' => 'Penthouse Suite',
                'type_id' => 2,
                'completion_date' => '2023-01-10',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2023,
                'location' => 'Dubai, UAE',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'banner' => url('/storage/images/innerhero/projectdetails.webp'),
                'thumbnail' => url('/storage/images/projects/portfolio/thumbnails/works3.webp'),
                'images' => json_encode([
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                    url('/storage/images/projects/portfolio/images/image.webp'),
                ]),
                'client' => 'Luxury Living Group',
                'slug' => 'penthouse-suite',
                'category_id' => 1,
                'created_at' => now(), // Set created_at to current timestamp
                'updated_at' => now(), // Optionally set updated_at to current timestamp
            ]        
        ];
        DB::table('portfolio_projects')->insert($projects);
    }
}