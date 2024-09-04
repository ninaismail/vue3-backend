<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['title' => 'Portfolio', 'slug' => 'portfolio'],
            ['title' => 'Collaborations', 'slug' => 'collaborations'],
        ];
        // Insert categories into the database
        foreach ($types as $type) {
            Type::create($type);
        }
    }
}
