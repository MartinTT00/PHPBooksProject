<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            [
                'id' => 1,
                'name' => 'Димитър Димов',
                'age' => 56,
                'countOfBooks' => 3,
                'image' => 'storage/authors/c38e67b94c82bdedd4b10e72bf338931.jpg'
            ] ,
            [
                'id' => 2,
                'name' => 'Христо Смирненски (Измирлиев)',
                'age' => 24,
                'countOfBooks' => 9,
                'image' => 'storage/authors/74b6aef7257f7441bf1dfc2ea993bd82.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Димитър Талев',
                'age' => 68,
                'countOfBooks' => 10,
                'image' => 'storage/authors/dcf10645796345a9535d157cf8be6d4c.jpg'
            ],
         
         ]);
    }
}
