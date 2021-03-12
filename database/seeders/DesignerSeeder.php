<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designers')->insert([
            [
                'name' => 'Kenzi Loneliness',
                'nationality' => 'French',
                'birthYear' => 2001,
            ],
            [
                'name' => 'Sebastien Sadness',
                'nationality' => 'French',
                'birthYear' => 2001,
            ],
            [
                'name' => 'Pom Sorrow',
                'nationality' => 'French',
                'birthYear' => 2001,
            ]
        ]);
    }
}
