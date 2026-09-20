<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
u

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index']);

Route::get('/categories', function () {
    return 'Daftar Kategori';
});

Route::get('/members', function () {
    return 'Daftar Member';
});