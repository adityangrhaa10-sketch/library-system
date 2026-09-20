<?php
namespace App\Http\Controllers;
class BookController extends Controller
{
 public function index()
 {
 return 'Daftar Buku';
 }
}

public function show($id)
{
 return 'ID Buku: ' . $id;
}

Route::get('/books/{id}', [BookController::class, 'show']);