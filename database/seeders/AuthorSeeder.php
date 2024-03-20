<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('author')->insert([
            [
                'first_name' => 'Artur',
                'last_name' => 'Malinowski',
                'place_of_birth' => 'Płock'
            ],
            [
                'first_name' => 'Katarzyna',
                'last_name' => 'Nowak',
                'place_of_birth' => 'Warszawa'
            ],
            [
                'first_name' => 'Elżbieta',
                'last_name' => 'Nowak',
                'place_of_birth' => 'Radom'
            ],
            [
                'first_name' => 'Krystyna',
                'last_name' => 'Nowakowska',
                'place_of_birth' => 'Iłża'
            ],
            [
                'first_name' => 'Karolina',
                'last_name' => 'Faidek',
                'place_of_birth' => 'Lublin'
            ],
            [
                'first_name' => 'Katarzyna',
                'last_name' => 'Bielecka',
                'place_of_birth' => 'Kowala'
            ],
            [
                'first_name' => 'Adam',
                'last_name' => 'Ziętek',
                'place_of_birth' => 'Warszawa'
            ],
            [
                'first_name' => 'Andrzej',
                'last_name' => 'Bielecki',
                'place_of_birth' => 'Lublin'
            ],
            [
                'first_name' => 'Karol',
                'last_name' => 'Dąb',
                'place_of_birth' => 'Starachowice'
            ],
            [
                'first_name' => 'Paweł',
                'last_name' => 'Faidek',
                'place_of_birth' => 'Radom'
            ],
            [
                'first_name' => 'Jacek',
                'last_name' => 'Nowak',
                'place_of_birth' => 'Płock'
            ],
            [
                'first_name' => 'Karolina',
                'last_name' => 'Adamczyk',
                'place_of_birth' => 'Warszawa'
            ],
            [
                'first_name' => 'Ewelina',
                'last_name' => 'Nowak',
                'place_of_birth' => 'Lublin'
            ],
            [
                'first_name' => 'Ewa',
                'last_name' => 'Socha',
                'place_of_birth' => 'Zwoleń'
            ],
            [
                'first_name' => 'Ala',
                'last_name' => 'Dąbrowska',
                'place_of_birth' => 'Kraków'
            ],
            [
                'first_name' => 'Ewa',
                'last_name' => 'Stępień',
                'place_of_birth' => 'Radom'
            ],
            [
                'first_name' => 'Karol',
                'last_name' => 'Ziętek',
                'place_of_birth' => 'Poznań'
            ],
            [
                'first_name' => 'Patryk',
                'last_name' => 'Sowa',
                'place_of_birth' => 'Katowice'
            ],
            [
                'first_name' => 'Karol',
                'last_name' => 'Sowa',
                'place_of_birth' => 'Lublin'
            ],
            [
                'first_name' => 'Michał',
                'last_name' => 'Pastuszka',
                'place_of_birth' => 'Radom'
            ]
        ]);
    }
}

