@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h3>Edit Data Buku</h3>

    <form action="{{ route('books.update', $book) }}" method="POST" style="max-width: 400px;">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 15px;">
            <label>Judul Buku:</label><br>
            <input type="text" name="title" value="{{ old('title', $book->title) }}" style="width: 100%; padding: 8px;">
            @error('title')
                <span style="color: red; font-size: 13px;">{{ $message }}</span>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>Penulis:</label><br>
            <input type="text" name="author" value="{{ old('author', $book->author) }}" style="width: 100%; padding: 8px;">
            @error('author')
                <span style="color: red; font-size: 13px;">{{ $message }}</span>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>Tahun Terbit:</label><br>
            <input type="number" name="year" value="{{ old('year', $book->year) }}" style="width: 100%; padding: 8px;">
            @error('year')
                <span style="color: red; font-size: 13px;">{{ $message }}</span>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>Stok:</label><br>
            <input type="number" name="stock" value="{{ old('stock', $book->stock) }}" style="width: 100%; padding: 8px;">
            @error('stock')
                <span style="color: red; font-size: 13px;">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" style="padding: 8px 16px; background: #007bff; color: white; border: none; cursor: pointer;">Update</button>
        <a href="{{ route('books.index') }}" style="margin-left: 10px;">Batal</a>
    </form>
@endsection