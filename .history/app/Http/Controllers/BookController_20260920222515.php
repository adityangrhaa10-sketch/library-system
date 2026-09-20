<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
{
    $title = 'Daftar Buku';
    $description = 'Koleksi buku pada Sistem Informasi Perpustakaan.';
    $books = [
        'Pemrograman PHP',
            'Laravel untuk Pemula',
            'Basis Data Relasional',
            'Algoritma dan Struktur Data',
            'Pemrograman Berorientasi Objek',
            'Jaringan Komputer Dasar',
            'Rekayasa Perangkat Lunak',
            'Keamanan Siber dan Sistem'
    ];
    $stock = 7;

    return view('books.index', compact('title', 'description', 'books', 'stock'));
}
}