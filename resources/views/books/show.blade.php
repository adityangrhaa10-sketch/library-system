@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <h3>Detail Informasi Buku</h3>

    <p><strong>ID Buku:</strong> {{ $book->id }}</p>
    <p><strong>Judul Buku:</strong> {{ $book->judul }}</p>
    <p><strong>Penulis:</strong> {{ $book->penulis }}</p>
    <p><strong>Tahun Terbit:</strong> {{ $book->tahun_terbit }}</p>
    <p><strong>Stok Tersedia:</strong> {{ $book->stok }}</p>

    <br>
    <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
@endsection