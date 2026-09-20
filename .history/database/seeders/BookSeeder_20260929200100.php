<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
    'judul' => 'Laskar Pelangi',
    'penulis' => 'Andrea Hirata',
    'tahun_terbit' => 2005,
    'stok' => 10
]);

Book::create([
    'judul' => 'Bumi Manusia',
    'penulis' => 'Pramoedya Ananta Toer',
    'tahun_terbit' => 1980,
    'stok' => 8
]);

Book::create([
    'judul' => 'Negeri 5 Menara',
    'penulis' => 'Ahmad Fuadi',
    'tahun_terbit' => 2009,
    'stok' => 7
]);

Book::create([
    'judul' => 'Perahu Kertas',
    'penulis' => 'Dee Lestari',
    'tahun_terbit' => 2009,
    'stok' => 6
]);

Book::create([
    'judul' => 'Dilan 1990',
    'penulis' => 'Pidi Baiq',
    'tahun_terbit' => 2014,
    'stok' => 5
]);
    }
}
