<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('book')->insert([
            [
                'title' => 'Harry Potter',
                'price' => 50,
                'author_id' => 1,
                'genre' => 'Fantasy'
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'price' => 20,
                'author_id' => 2,
                'genre' => 'Literary Fiction'
            ],
            [
                'title' => '1984',
                'price' => 15,
                'author_id' => 3,
                'genre' => 'Dystopian'
            ],
            [
                'title' => 'The Great Gatsby',
                'price' => 25,
                'author_id' => 4,
                'genre' => 'Literary Fiction'
            ],
            [
                'title' => 'Pride and Prejudice',
                'price' => 18,
                'author_id' => 5,
                'genre' => 'Romance'
            ],

            [
                'title' => 'Lord of the Rings',
                'price' => 40,
                'author_id' => 6,
                'genre' => 'Fantasy'
            ],
            [
                'title' => 'The Catcher in the Rye',
                'price' => 22,
                'author_id' => 7,
                'genre' => 'Literary Fiction'
            ],
            [
                'title' => 'A Song of Ice and Fire',
                'price' => 45,
                'author_id' => 8,
                'genre' => 'Fantasy'
            ],
            [
                'title' => 'The Hunger Games',
                'price' => 30,
                'author_id' => 9,
                'genre' => 'Young Adult'
            ],
            [
                'title' => 'The Da Vinci Code',
                'price' => 27,
                'author_id' => 10,
                'genre' => 'Mystery'
            ],
            [
                'title' => 'Harry Potter 2',
                'price' => 60,
                'author_id' => 1,
                'genre' => 'Fantasy'
            ],
            [
                'title' => 'To Kill a Mockingbird 2',
                'price' => 20,
                'author_id' => 2,
                'genre' => 'Literary Fiction'
            ],
            [
                'title' => '1985',
                'price' => 25,
                'author_id' => 3,
                'genre' => 'Dystopian'
            ],
            [
                'title' => 'The Great Gatsby 2',
                'price' => 35,
                'author_id' => 4,
                'genre' => 'Literary Fiction'
            ],
            [
                'title' => 'Pride and Prejudice 2',
                'price' => 38,
                'author_id' => 5,
                'genre' => 'Romance'
            ],

            [
                'title' => 'Lord of the Rings 2',
                'price' => 50,
                'author_id' => 6,
                'genre' => 'Fantasy'
            ],
            [
                'title' => 'The Catcher in the Rye 2',
                'price' => 32,
                'author_id' => 7,
                'genre' => 'Literary Fiction'
            ],
            [
                'title' => 'A Song of Ice and Fire 2',
                'price' => 55,
                'author_id' => 8,
                'genre' => 'Fantasy'
            ],
            [
                'title' => 'The Hunger Games 2',
                'price' => 40,
                'author_id' => 9,
                'genre' => 'Young Adult'
            ],
            [
                'title' => 'The Da Vinci Code 2',
                'price' => 57,
                'author_id' => 10,
                'genre' => 'Mystery'
            ],
            [
                'title' => 'Harry Potter 3',
                'price' => 66,
                'author_id' => 1,
                'genre' => 'Fantasy'
            ],
            [
                'title' => 'To Kill a Mockingbird 3',
                'price' => 30,
                'author_id' => 2,
                'genre' => 'Literary Fiction'
            ],
            [
                'title' => '1995',
                'price' => 35,
                'author_id' => 3,
                'genre' => 'Dystopian'
            ],
            [
                'title' => 'The Great Gatsby 3',
                'price' => 45,
                'author_id' => 4,
                'genre' => 'Literary Fiction'
            ],
            [
                'title' => 'Pride and Prejudice 3',
                'price' => 48,
                'author_id' => 5,
                'genre' => 'Romance'
            ],

            [
                'title' => 'Lord of the Rings 3',
                'price' => 60,
                'author_id' => 6,
                'genre' => 'Fantasy'
            ],
            [
                'title' => 'The Catcher in the Rye 3',
                'price' => 42,
                'author_id' => 7,
                'genre' => 'Literary Fiction'
            ],
            [
                'title' => 'A Song of Ice and Fire 3',
                'price' => 57,
                'author_id' => 8,
                'genre' => 'Fantasy'
            ],
            [
                'title' => 'The Hunger Games 3',
                'price' => 44,
                'author_id' => 9,
                'genre' => 'Young Adult'
            ],
            [
                'title' => 'The Da Vinci Code 3',
                'price' => 59,
                'author_id' => 10,
                'genre' => 'Mystery'
            ]
        ]);
    }
}