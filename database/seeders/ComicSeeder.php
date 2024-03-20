<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comic')->insert([
            [
                'title' => 'Spider-Man',
                'price' => 5.99,
                'author_id' => 1,
                'series' => 'The Amazing Spider-Man'
            ],
            [
                'title' => 'Batman',
                'price' => 4.99,
                'author_id' => 2,
                'series' => 'Batman: Detective Comics'
            ],
            [
                'title' => 'Superman',
                'price' => 6.99,
                'author_id' => 3,
                'series' => 'Action Comics'
            ],
            [
                'title' => 'X-Men',
                'price' => 5.99,
                'author_id' => 4,
                'series' => 'Uncanny X-Men'
            ],
            [
                'title' => 'The Avengers',
                'price' => 6.99,
                'author_id' => 5,
                'series' => 'The Avengers'
            ],

            [
                'title' => 'Wonder Woman',
                'price' => 4.99,
                'author_id' => 6,
                'series' => 'Wonder Woman'
            ],
            [
                'title' => 'The Flash',
                'price' => 5.99,
                'author_id' => 7,
                'series' => 'The Flash: The Fastest Man Alive'
            ],
            [
                'title' => 'Thor',
                'price' => 6.99,
                'author_id' => 8,
                'series' => 'Thor: God of Thunder'
            ],
            [
                'title' => 'Captain America',
                'price' => 5.99,
                'author_id' => 9,
                'series' => 'Captain America'
            ],
            [
                'title' => 'Green Lantern',
                'price' => 4.99,
                'author_id' => 10,
                'series' => 'Green Lantern'
            ],
            [
                'title' => 'Spider-Man 2',
                'price' => 6.99,
                'author_id' => 1,
                'series' => 'The Amazing Spider-Man'
            ],
            [
                'title' => 'Batman 2',
                'price' => 5.99,
                'author_id' => 2,
                'series' => 'Batman: Detective Comics'
            ],
            [
                'title' => 'Superman 2',
                'price' => 7.99,
                'author_id' => 3,
                'series' => 'Action Comics'
            ],
            [
                'title' => 'X-Men 2',
                'price' => 6.99,
                'author_id' => 4,
                'series' => 'Uncanny X-Men'
            ],
            [
                'title' => 'The Avengers 2',
                'price' => 7.99,
                'author_id' => 5,
                'series' => 'The Avengers'
            ],

            [
                'title' => 'Wonder Woman 2',
                'price' => 5.99,
                'author_id' => 6,
                'series' => 'Wonder Woman'
            ],
            [
                'title' => 'The Flash 2',
                'price' => 6.99,
                'author_id' => 7,
                'series' => 'The Flash: The Fastest Man Alive'
            ],
            [
                'title' => 'Thor 2',
                'price' => 7.99,
                'author_id' => 8,
                'series' => 'Thor: God of Thunder'
            ],
            [
                'title' => 'Captain America 2',
                'price' => 6.99,
                'author_id' => 9,
                'series' => 'Captain America'
            ],
            [
                'title' => 'Green Lantern 2',
                'price' => 5.99,
                'author_id' => 10,
                'series' => 'Green Lantern'
            ],
            [
                'title' => 'Spider-Man 3',
                'price' => 6.99,
                'author_id' => 1,
                'series' => 'The Amazing Spider-Man'
            ],
            [
                'title' => 'Batman 3',
                'price' => 5.99,
                'author_id' => 2,
                'series' => 'Batman: Detective Comics'
            ],
            [
                'title' => 'Superman 3',
                'price' => 7.99,
                'author_id' => 3,
                'series' => 'Action Comics'
            ],
            [
                'title' => 'X-Men 3',
                'price' => 6.99,
                'author_id' => 4,
                'series' => 'Uncanny X-Men'
            ],
            [
                'title' => 'The Avengers 3',
                'price' => 7.99,
                'author_id' => 5,
                'series' => 'The Avengers'
            ],

            [
                'title' => 'Wonder Woman 3',
                'price' => 5.99,
                'author_id' => 6,
                'series' => 'Wonder Woman'
            ],
            [
                'title' => 'The Flash 3',
                'price' => 6.99,
                'author_id' => 7,
                'series' => 'The Flash: The Fastest Man Alive'
            ],
            [
                'title' => 'Thor 3',
                'price' => 7.99,
                'author_id' => 8,
                'series' => 'Thor: God of Thunder'
            ],
            [
                'title' => 'Captain America 3',
                'price' => 6.99,
                'author_id' => 9,
                'series' => 'Captain America'
            ],
            [
                'title' => 'Green Lantern 3',
                'price' => 5.99,
                'author_id' => 10,
                'series' => 'Green Lantern'
            ]

        ]);
    }
}