<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'id' => 1,
                'name' => 'Тютюн',
                'yearOfPublishment' => 1951,
                'author_id' => 1,
                'genre_id' => 1
            ] ,
            [
                'id' => 2,
                'name' => 'Зимни вечери',
                'yearOfPublishment' => 1923,
                'author_id' => 2,
                'genre_id' => 4
            ],
            [
                'id' => 3,
                'name' => 'Железният светилник',
                'yearOfPublishment' => 1952,
                'author_id' => 3,
                'genre_id' => 1
            ],
            [
                'id' => 4,
                'name' => 'Нямате думата!',
                'yearOfPublishment' => 1922,
                'author_id' => 2,
                'genre_id' => 3
            ],
         
         ]);
    }
}
