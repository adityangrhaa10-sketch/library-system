<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('books.index');
    }

    public function show($id)
    {
        return 'ID Buku: ' . $id;
    }

    public function index()
{
 $title = 'Daftar Buku';
 return view('books.index', compact('title'));
}
}