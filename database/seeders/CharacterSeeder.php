<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
                'name' => 'Gaston',
                'designer_id' => 1,
                'publication_year' => 2000,
                'wcf'=> 'Gaston',
            ],
            [
                'name' => 'Astétix',
                'designer_id' => 2,
                'publication_year' => 2000,
                'wcf'=> 'Astétix et Obélix',
            ],
            [
                'name' => 'Tintin',
                'designer_id' => 3,
                'publication_year' => 2000,
                'wcf'=> 'Tintin',
            ],
        ]);
    }
}
