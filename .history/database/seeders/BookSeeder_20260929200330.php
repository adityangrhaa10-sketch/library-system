<?php

namespace Database\Seeders;

use Dflydev\DotAccessData\Data;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
Book::create([
    'judul' => 'Pemrograman PHP untuk Pemula',
    'penulis' => 'Aditya Nugraha',
    'tahun_terbit' => 2015,
    'stok' => 10
]);

Book::create([
    'judul' => 'Algoritma dan Struktur Data',
    'penulis' => 'Nugraha Aditya,
    'tahun_terbit' => 2017,
    'stok' => 8
]);

Book::create([
    'judul' => 'Basis Data',
    'penulis' => 'Ahmad Hidayat',
    'tahun_terbit' => 2019,
    'stok' => 7
]);

Book::create([
    'judul' => 'Matematika Diskrit',
    'penulis' => 'Muhammad Shahzada',
    'tahun_terbit' => 2009,
    'stok' => 6
]);

Book::create([
    'judul' => 'Big Data',
    'penulis' => 'Rama Nugraha',
    'tahun_terbit' => 2014,
    'stok' => 5
]);
    }
}
