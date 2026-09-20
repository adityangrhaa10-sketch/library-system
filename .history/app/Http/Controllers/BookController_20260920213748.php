<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $title = 'Daftar Buku';
        return view('books.index', compact('title', 'description'));
    }

    public function show($id)
    {
        return 'ID Buku: ' . $id;
    }
}