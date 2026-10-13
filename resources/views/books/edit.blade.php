@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h3>Edit Data Buku</h3>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <p>
            <label>Judul Buku:</label><br>
            <input type="text" name="title" value="{{ $book->judul }}" required>
        </p>
        <p>
            <label>Penulis:</label><br>
            <input type="text" name="author" value="{{ $book->penulis }}" required>
        </p>
        <p>
            <label>Tahun Terbit:</label><br>
            <input type="number" name="year" value="{{ $book->tahun_terbit }}" required>
        </p>
        <p>
            <label>Stok:</label><br>
            <input type="number" name="stock" value="{{ $book->stok }}" required>
        </p>
        <button type="submit">Update</button>
        <a href="{{ route('books.index') }}">Batal</a>
    </form>
@endsection