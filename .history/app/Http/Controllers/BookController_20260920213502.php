<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    // Hanya ada SATU fungsi index()
    public function index()
    {
        $title = 'Daftar Buku';
        return view('books.index', compact('title'));
    }

    public function show($id)
    {
        return 'ID Buku: ' . $id;
    }
}