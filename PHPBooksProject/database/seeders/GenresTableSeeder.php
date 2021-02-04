<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('genres')->insert([
           [
               'id' => 1,
               'name' => 'Роман'
           ] ,
           [
               'id' => 2,
               'name' => 'Разказ'
           ],
           [
               'id' => 3,
               'name' => 'Фейлетон'
           ],
           [
               'id' => 4,
               'name' => 'Стихотворение'
           ]
        
        ]);
    }
}
