<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['title' => 'Pemrograman PHP', 'author' => 'Andi Wijaya', 'year' => 2021],
            ['title' => 'Laravel untuk Pemula', 'author' => 'Budi Santoso', 'year' => 2022],
            ['title' => 'Basis Data Relasional', 'author' => 'Candra Kirana', 'year' => 2020],
            ['title' => 'Algoritma & Struktur Data', 'author' => 'Deni Setiawan', 'year' => 2019],
            ['title' => 'Pemrograman Berorientasi Objek', 'author' => 'Eka Putra', 'year' => 2023],
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}