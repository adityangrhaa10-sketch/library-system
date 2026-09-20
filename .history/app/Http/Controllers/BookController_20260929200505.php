<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['title' => 'Pemrograman PHP', 'author' => 'Aditya Nugraha', 'year' => 2021],
            ['title' => 'Laravel untuk Pemula', 'author' => 'Muhammad Shahzada', 'year' => 2022],
            ['title' => 'Basis Data Relasional', 'author' => 'Trinanda Karandi', 'year' => 2020],
            ['title' => 'Algoritma & Struktur Data', 'author' => 'Rama Nugraha', 'year' => 2019],
            ['title' => 'Pemrograman Berorientasi Objek', 'author' => 'Ahmad Hidayat', 'year' => 2023],
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}