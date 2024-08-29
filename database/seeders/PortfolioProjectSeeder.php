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
                'title' => 'The Art Collector Private Residence',
                'category' => 'Private Residence',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2022,
                'location' => 'Riyadh',
                'description' => 'One of the first assignments for us is to set the inspiration for the project; we invest a tremendous amount of time seeking inspiration from our client’s lifestyle and personal tastes. Aware of our client’s interest in fine art, we have selected masterpieces from the most prestigious galleries in the world. The warm and textured wooden high walls has created the perfect background for these art pieces. This project with fortunate high ceilings was transformed into a hidden museum in a private home.',
                'banner' => url('/images/projects/portfolio/the_collector_private_residence/banners/banner1.webp'),
                'thumbnail' => url('/images/projects/portfolio/the_collector_private_residence/thumbnails/works1.webp'),
                'images' => json_encode([
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 7.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 113.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 11.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 9.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 114.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 121.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 116.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 117.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 118.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 119.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 120.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 12.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 123.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 124.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 125.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 126.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 14.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 16.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 130.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 129.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 13.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 127.png'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 15.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 10.webp'),
                ]),
                'client' => 'Private',
                'slug' => 'the-art-collector-private-residence',
                'type_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],            
            [
                'id'=>2,
                'title' => 'Al Rawda Reception Villa',
                'category' => 'Family Home',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2020,
                'location' => 'Riyadh',
                'description' => 'This gorgeous 1270 m² project in Riyadh is the family reception villa that makes part of an extensive private complex. It is a beautiful example of a luxury contemporary home, infused with Islamic influences that resonate with its vibrant heritage. Original orientalism paintings, crafted antiques, Islamic patterns and intricate noble materials accentuate the identity of the place.',
                'banner' => url('/images/projects/portfolio/al_rawda_reception_villa/banners/banner4.webp'),
                'thumbnail' => url('/images/projects/portfolio/al_rawda_reception_villa/thumbnails/works2.webp'),
                'images' => json_encode([
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 17.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 194.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 131.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 132.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 18.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 133.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 25.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 136.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 19.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 135.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 195.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 196.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 197.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 198.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 199.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 21.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 24.png'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 20.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 22.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 137.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 138.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 139.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 140.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 141.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 142.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 143.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 144.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 145.webp'),
                ]),
                'client' => 'Private',
                'slug' => 'al-rawda-reception-villa',
                'type_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'=>3,
                'title' => 'Al Ghadir Villa',
                'category' => 'Family Home',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2019,
                'location' => 'Riyadh',
                'description' => 'The exclusive interior design of this spacious project that impresses with the elegance and splendor of the timeless furniture pieces is the reception area of this villa. The focal point of this project is a double height space, where a crystal light installation from floor to ceiling is stretching out from floor to ceiling. This piece is called the “Crystal Biosphere”.',
                'banner' => url('/images/projects/portfolio/al_ghadir_villa/banners/banner3.webp'),
                'thumbnail' => url('/images/projects/portfolio/al_ghadir_villa/thumbnails/works3.webp'),
                'images' => json_encode([
                    url('/images/projects/portfolio/al_ghadir_villa/images/Rectangle 27.webp'),
                    url('/images/projects/portfolio/al_ghadir_villa/images/Rectangle 28.webp'),
                    url('/images/projects/portfolio/al_ghadir_villa/images/Rectangle 30.webp'),
                    url('/images/projects/portfolio/al_ghadir_villa/images/Rectangle 29.webp'),
                    url('/images/projects/portfolio/al_ghadir_villa/images/Rectangle 147.webp'),
                    url('/images/projects/portfolio/al_ghadir_villa/images/Rectangle 32.webp'),
                    url('/images/projects/portfolio/al_ghadir_villa/images/Rectangle 31.webp'),
                    url('/images/projects/portfolio/al_ghadir_villa/images/Rectangle 148.webp'),
                    url('/images/projects/portfolio/al_ghadir_villa/images/Rectangle 149.webp'),
                    url('/images/projects/portfolio/al_ghadir_villa/images/Rectangle 150.webp'),
                    url('/images/projects/portfolio/al_ghadir_villa/images/Rectangle 34.webp'),
                    url('/images/projects/portfolio/al_ghadir_villa/images/Rectangle 35.webp'),
                    url('/images/projects/portfolio/al_ghadir_villa/images/Rectangle 37.webp'),
                    url('/images/projects/portfolio/al_ghadir_villa/images/Rectangle 38.webp'),
                    url('/images/projects/portfolio/al_ghadir_villa/images/Rectangle 39.webp'),
                    url('/images/projects/portfolio/al_ghadir_villa/images/Rectangle 40.webp'),
                    url('/images/projects/portfolio/al_ghadir_villa/images/Rectangle 41.webp'),
                    url('/images/projects/portfolio/al_ghadir_villa/images/Rectangle 42.webp'),
                ]),
                'client' => 'Private',
                'slug' => 'al-ghadir-villa',
                'type_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'=>4,
                'title' => 'Al Rawda Private Residence',
                'category' => 'Family Home',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2021,
                'location' => 'Riyadh',
                'description' => 'This luxury private suite combines exquisite, complex detail work with statement prints and muted walls for a modern Asian inspired aesthetic. Three different wallpapers by “De Gournay” are the catchiest elements in this project. Once again, we went in search of the top furniture brands and unique pieces from different European Galleries. A rich color palette is used throughout, giving a sense of depth to the contemporary space; while accent colors and gold hues add a warm splash of color into the design.',
                'banner' => url('/images/projects/portfolio/al_rawda_private_residence/banners/banner2.jpg'),
                'thumbnail' => url('/images/projects/portfolio/al_rawda_private_residence/thumbnails/works4.webp'),
                'images' => json_encode([
                    url('/images/projects/portfolio/al_rawda_private_residence/images/Rectangle 43.webp'),
                    url('/images/projects/portfolio/al_rawda_private_residence/images/Rectangle 40.webp'),
                    url('/images/projects/portfolio/al_rawda_private_residence/images/Rectangle 45.webp'),
                    url('/images/projects/portfolio/al_rawda_private_residence/images/Rectangle 160.png'),
                    url('/images/projects/portfolio/al_rawda_private_residence/images/Rectangle 41.webp'),
                    url('/images/projects/portfolio/al_rawda_private_residence/images/Rectangle 42.png'),
                    url('/images/projects/portfolio/al_rawda_private_residence/images/Rectangle 161.webp'),
                    url('/images/projects/portfolio/al_rawda_private_residence/images/Rectangle 49.webp'),
                    url('/images/projects/portfolio/al_rawda_private_residence/images/Rectangle 46.webp'),
                    url('/images/projects/portfolio/al_rawda_private_residence/images/Rectangle 162.webp'),
                    url('/images/projects/portfolio/al_rawda_private_residence/images/Rectangle 44.webp'),
                    url('/images/projects/portfolio/al_rawda_private_residence/images/Rectangle 47.webp'),
                    url('/images/projects/portfolio/al_rawda_private_residence/images/Rectangle 164.webp'),
                    url('/images/projects/portfolio/al_rawda_private_residence/images/Rectangle 165.webp'),
                    url('/images/projects/portfolio/al_rawda_private_residence/images/Rectangle 166.webp'),
                    url('/images/projects/portfolio/al_rawda_private_residence/images/Rectangle 163.webp'),
                ]),
                'client' => 'Private',
                'slug' => 'al-rawda-private-residence',
                'type_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'=>5,
                'title' => 'The Sisters Villa',
                'category' => 'Design',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2018,
                'location' => 'Riyadh',
                'description' => "From the first meeting the three sisters had a clear vision in mind: a stylish place that challenges the norms of residential design. The handsome style is a perfect blend of Luxury Contemporary and Urban Chic where plain walls and smart fabrics set the mood of the space. They are all tied together with one-of-a-kind furniture pieces and statement artworks. The ensemble aligns perfectly with the homeowner’s vision, taste and lifestyle. Have a look!",
                'banner' => url('/images/projects/portfolio/the_sisters_villa/banners/banner5.webp'),
                'thumbnail' => url('/images/projects/portfolio/the_sisters_villa/thumbnails/works5.webp'),
                'images' => json_encode([
                    url('/images/projects/portfolio/the_sisters_villa/images/Rectangle 50.webp'),
                    url('/images/projects/portfolio/the_sisters_villa/images/Rectangle 51.webp'),
                    url('/images/projects/portfolio/the_sisters_villa/images/Rectangle 53.webp'),
                    url('/images/projects/portfolio/the_sisters_villa/images/Rectangle 54.webp'),
                    url('/images/projects/portfolio/the_sisters_villa/images/Rectangle 56.webp'),
                    url('/images/projects/portfolio/the_sisters_villa/images/Rectangle 168.webp'),
                    url('/images/projects/portfolio/the_sisters_villa/images/Rectangle 59.webp'),
                    url('/images/projects/portfolio/the_sisters_villa/images/Rectangle 169.png'),
                    url('/images/projects/portfolio/the_sisters_villa/images/Rectangle 55.png'),
                    url('/images/projects/portfolio/the_sisters_villa/images/Rectangle 170.webp'),
                    url('/images/projects/portfolio/the_sisters_villa/images/Rectangle 57.webp'),
                    url('/images/projects/portfolio/the_sisters_villa/images/Rectangle 60.webp'),
                    url('/images/projects/portfolio/the_sisters_villa/images/Rectangle 171.webp'),
                    url('/images/projects/portfolio/the_sisters_villa/images/Rectangle 58.webp'),
                    url('/images/projects/portfolio/the_sisters_villa/images/Rectangle 172.webp'),
                    url('/images/projects/portfolio/the_sisters_villa/images/Rectangle 173.webp'),
                ]),
                'client' => 'Private',
                'slug' => 'the-sisters-villa',
                'type_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'=>6,
                'title' => 'Jenadriah Ranch',
                'category' => 'Pool House',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2022,
                'location' => 'Riyadh',
                'description' => 'Layered Textures, earthy tones, hints of sleek patterns and crochet accents with a bold natural wood are just what you need for achieving a Boho-Chic look. The focal point is a wooden backdrop versus expansive glass walls overlooking the pool and its green surrounding. This pool house is a free-standing building in the middle of an extensive green area; This ranch is located in Jenadriah, a suburb of Riyadh city.',
                'banner' => url('/images/projects/portfolio/jenadriah_ranch/banners/banner6.webp'),
                'thumbnail' => url('/images/projects/portfolio/jenadriah_ranch/thumbnails/works6.webp'),
                'images' => json_encode([
                    url('/images/projects/portfolio/jenadriah_ranch/images/Rectangle 62.webp'),
                    url('/images/projects/portfolio/jenadriah_ranch/images/Rectangle 63.webp'),
                    url('/images/projects/portfolio/jenadriah_ranch/images/Rectangle 65.webp'),
                    url('/images/projects/portfolio/jenadriah_ranch/images/Rectangle 64.webp'),
                    url('/images/projects/portfolio/jenadriah_ranch/images/Rectangle 178.png'),
                    url('/images/projects/portfolio/jenadriah_ranch/images/Rectangle 66.webp'),
                    url('/images/projects/portfolio/jenadriah_ranch/images/Rectangle 176.png'),
                    url('/images/projects/portfolio/jenadriah_ranch/images/Rectangle 67.png'),
                    url('/images/projects/portfolio/jenadriah_ranch/images/Rectangle 174.webp'),
                    url('/images/projects/portfolio/jenadriah_ranch/images/Rectangle 177.webp'),
                ]),
                'client' => 'Private',
                'slug' => 'jenadriah-ranch',
                'type_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('portfolio_projects')->insert($projects);
    }
}