<?php

use Illuminate\Support\Facades\Route;

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