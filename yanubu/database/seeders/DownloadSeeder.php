<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DownloadSeeder extends Seeder
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
                'file' => 'download1.pdf',
                'nama' => 'Download 1',
                'kategori' => 'Kategori 1',
            ],
            [
                'file' => 'download2.pdf',
                'nama' => 'Download 2',
                'kategori' => 'Kategori 2',
            ],
            [
                'file' => 'download3.pdf',
                'nama' => 'Download 3',
                'kategori' => 'Kategori 3',
            ],
            [
                'file' => 'download4.pdf',
                'nama' => 'Download 4',
                'kategori' => 'Kategori 4',
            ],
            [
                'file' => 'download5.pdf',
                'nama' => 'Download 5',
                'kategori' => 'Kategori 5',
            ],
            [
                'file' => 'download6.pdf',
                'nama' => 'Download 6',
                'kategori' => 'Kategori 6',
            ],
            [
                'file' => 'download7.pdf',
                'nama' => 'Download 7',
                'kategori' => 'Kategori 7',
            ],
            [
                'file' => 'download8.pdf',
                'nama' => 'Download 8',
                'kategori' => 'Kategori 8',
            ],
            [
                'file' => 'download9.pdf',
                'nama' => 'Download 9',
                'kategori' => 'Kategori 9',
            ],
            [
                'file' => 'download10.pdf',
                'nama' => 'Download 10',
                'kategori' => 'Kategori 10',
            ],
            [
                'file' => 'download11.pdf',
                'nama' => 'Download 11',
                'kategori' => 'Kategori 11',
            ],
        ];
        DB::table('download')->insert($post);
    }
}
