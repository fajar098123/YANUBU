<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
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
                'judul' => 'Judul Artikel 1',
                'thumbnail' => 'thumbnail1.jpg',
                'content' => 'Content Artikel 1',
                'author' => 'Author 1',
            ],
            [
                'judul' => 'Judul Artikel 2',
                'thumbnail' => 'thumbnail2.jpg',
                'content' => 'Content Artikel 2',
                'author' => 'Author 2',
            ],
            [
                'judul' => 'Judul Artikel 3',
                'thumbnail' => 'thumbnail3.jpg',
                'content' => 'Content Artikel 3',
                'author' => 'Author 3',
            ],
            [
                'judul' => 'Judul Artikel 4',
                'thumbnail' => 'thumbnail4.jpg',
                'content' => 'Content Artikel 4',
                'author' => 'Author 4',
            ],
            [
                'judul' => 'Judul Artikel 5',
                'thumbnail' => 'thumbnail5.jpg',
                'content' => 'Content Artikel 5',
                'author' => 'Author 5',
            ],
            [
                'judul' => 'Judul Artikel 6',
                'thumbnail' => 'thumbnail6.jpg',
                'content' => 'Content Artikel 6',
                'author' => 'Author 6',
            ],
            [
                'judul' => 'Judul Artikel 7',
                'thumbnail' => 'thumbnail7.jpg',
                'content' => 'Content Artikel 7',
                'author' => 'Author 7',
            ],
            [
                'judul' => 'Judul Artikel 8',
                'thumbnail' => 'thumbnail8.jpg',
                'content' => 'Content Artikel 8',
                'author' => 'Author 8',
            ],
            [
                'judul' => 'Judul Artikel 9',
                'thumbnail' => 'thumbnail9.jpg',
                'content' => 'Content Artikel 9',
                'author' => 'Author 9',
            ],
        ];
        DB::table('artikel')->insert($post);
    }
}
