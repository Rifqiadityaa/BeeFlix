<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'Name' => 'Drama'
        ]);

        DB::table('genres')->insert([
            'Name' => 'Kids'
        ]);

        DB::table('genres')->insert([
            'Name' => 'TV Show'
        ]);
    }
}
