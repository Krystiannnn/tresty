<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class Short_story_collectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('short_story_collection')->insert([
            [
                'title' => 'Dubliners',
                'price' => 12.99,
                'author_id' => 11,
                'theme' => 'Life in Dublin'
            ],
            [
                'title' => 'The Martian Chronicles',
                'price' => 14.99,
                'author_id' => 12,
                'theme' => 'Mars Colonization'
            ],
            [
                'title' => 'Nine Stories',
                'price' => 10.99,
                'author_id' => 13,
                'theme' => 'Various'
            ],
            [
                'title' => 'Tales of the Jazz Age',
                'price' => 11.99,
                'author_id' => 14,
                'theme' => 'Roaring Twenties'
            ],
            [
                'title' => 'Fragile Things',
                'price' => 13.99,
                'author_id' => 15,
                'theme' => 'Fantasy'
            ],

            [
                'title' => 'The Illustrated Man',
                'price' => 12.99,
                'author_id' => 16,
                'theme' => 'Science Fiction'
            ],
            [
                'title' => 'The Elephant Vanishes',
                'price' => 11.99,
                'author_id' => 17,
                'theme' => 'Various'
            ],
            [
                'title' => 'What We Talk About When We Talk About Love',
                'price' => 10.99,
                'author_id' => 18,
                'theme' => 'Love and Relationships'
            ],
            [
                'title' => 'Interpreter of Maladies',
                'price' => 12.99,
                'author_id' => 19,
                'theme' => 'Cultural Conflicts'
            ],
            [
                'title' => 'Exhalation: Stories',
                'price' => 14.99,
                'author_id' => 18,
                'theme' => 'Science Fiction'
            ],
            [
                'title' => 'Dubliners 2',
                'price' => 13.99,
                'author_id' => 11,
                'theme' => 'Life in Dublin'
            ],
            [
                'title' => 'The Martian Chronicles 2',
                'price' => 15.99,
                'author_id' => 12,
                'theme' => 'Mars Colonization'
            ],
            [
                'title' => 'Nine Stories 2',
                'price' => 11.99,
                'author_id' => 13,
                'theme' => 'Various'
            ],
            [
                'title' => 'Tales of the Jazz Age 2',
                'price' => 12.99,
                'author_id' => 14,
                'theme' => 'Roaring Twenties'
            ],
            [
                'title' => 'Fragile Things 2',
                'price' => 14.99,
                'author_id' => 15,
                'theme' => 'Fantasy'
            ],

            [
                'title' => 'The Illustrated Man 2',
                'price' => 13.99,
                'author_id' => 16,
                'theme' => 'Science Fiction'
            ],
            [
                'title' => 'The Elephant Vanishes 2',
                'price' => 12.99,
                'author_id' => 17,
                'theme' => 'Various'
            ],
            [
                'title' => 'What We Talk About When We Talk About Love 2',
                'price' => 11.99,
                'author_id' => 18,
                'theme' => 'Love and Relationships'
            ],
            [
                'title' => 'Interpreter of Maladies 2',
                'price' => 13.99,
                'author_id' => 19,
                'theme' => 'Cultural Conflicts'
            ],
            [
                'title' => 'Exhalation: Stories 2',
                'price' => 14.99,
                'author_id' => 18,
                'theme' => 'Science Fiction'
            ]
        ]);
    }
}