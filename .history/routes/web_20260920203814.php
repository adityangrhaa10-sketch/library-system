<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Cukup gunakan route closure ini
Route::get('/books', function () {
    return 'Daftar Buku';
});