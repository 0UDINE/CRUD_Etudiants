<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FiliereTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filieres')->insert([
            [
                'id' => 2,
                'titre' => "DEVOWFS",
                'description' => "Développement digitaloption web full stack"
            ],
            [
                'id' => 3,
                'titre' => "DEVOAM",
                'description' => "Développement digitaloption applications mobiles"
            ],
            [
                'id' => 4,
                'titre' => "DEVORVRA",
                'description' => "Développement digitaloption réalité virtuelle/réalité augmentée"
            ],
            [
                'id' => 5,
                'titre' => Str::random(20),
                'description' => Str::random(50)
            ]
        ]);
    }
}