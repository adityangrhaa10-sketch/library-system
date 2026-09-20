<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $title = 'Daftar Buku';
        $description = 'Koleksi buku pada Sistem Informasi Perpustakaan.';
        return view('books.index', compact('title', 'description'));
    }

    public function show($id)
    {
        return 'ID Buku: ' . $id;
    }
}