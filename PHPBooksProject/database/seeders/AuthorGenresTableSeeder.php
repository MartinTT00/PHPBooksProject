<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorGenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('author_genres')->insert([
            [
                'id' => 1,
                'author_id' => 1,
                'genre_id' => 1
            ] ,
            [
                'id' => 2,
                'author_id' => 2,
                'genre_id' => 3
            ],
            [
                'id' => 3,
                'author_id' => 2,
                'genre_id' => 4
            ],
            [
                'id' => 4,
                'author_id' => 3,
                'genre_id' => 1
            ],
            [
                'id' => 5,
                'author_id' => 3,
                'genre_id' => 2
            ]
         
         ]);
    }
}
