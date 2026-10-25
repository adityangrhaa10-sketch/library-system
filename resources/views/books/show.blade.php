@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <h3>Detail Informasi Buku</h3>

    <p><strong>ID Buku:</strong> {{ $book->id }}</p>
    <p><strong>Judul Buku:</strong> {{ $book->title }}</p>
    <p><strong>Penulis:</strong> {{ $book->author }}</p>
    <p><strong>Kategori:</strong> {{ $book->category?->name ?? 'Belum ada kategori' }}</p>
    <p><strong>Tahun Terbit:</strong> {{ $book->year }}</p>
    <p><strong>Stok Tersedia:</strong> {{ $book->stock }}</p>

    <br>
    <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
@endsection