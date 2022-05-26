<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            [
                'foto' => 'galeri1.jpg',
                'caption' => 'Foto 1',
            ],
            [
                'foto' => 'galeri2.jpg',
                'caption' => 'Foto 2',
            ],
            [
                'foto' => 'galeri3.jpg',
                'caption' => 'Foto 3',
            ],
            [
                'foto' => 'galeri4.jpg',
                'caption' => 'Foto 4',
            ],
            [
                'foto' => 'galeri5.jpg',
                'caption' => 'Foto 5',
            ],
            [
                'foto' => 'galeri6.jpg',
                'caption' => 'Foto 6',
            ],
            [
                'foto' => 'galeri7.jpg',
                'caption' => 'Foto 7',
            ],
            [
                'foto' => 'galeri8.jpg',
                'caption' => 'Foto 8',
            ],
            [
                'foto' => 'galeri9.jpg',
                'caption' => 'Foto 9',
            ],
            [
                'foto' => 'galeri10.jpg',
                'caption' => 'Foto 10',
            ],
            [
                'foto' => 'galeri11.jpg',
                'caption' => 'Foto 11',
            ],
            [
                'foto' => 'galeri12.jpg',
                'caption' => 'Foto 12',
            ],
            [
                'foto' => 'galeri13.jpg',
                'caption' => 'Foto 13',
            ],
            [
                'foto' => 'galeri14.jpg',
                'caption' => 'Foto 14',
            ],
            [
                'foto' => 'galeri15.jpg',
                'caption' => 'Foto 15',
            ],
            [
                'foto' => 'galeri16.jpg',
                'caption' => 'Foto 16',
            ],
        ];
        DB::table('galeri')->insert($post);
    }
}
