<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

::get('/books', [BookConRoutetroller::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', function () {
    return 'Daftar Buku';
});

Route::get('/categories', function () {
    return 'Daftar Kategori';
});

Route::get('/members', function () {
    return 'Daftar Member';
});