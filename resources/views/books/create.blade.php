@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h3>Tambah Buku Baru</h3>

    <form action="{{ route('books.store') }}" method="POST" style="max-width: 400px;">
        @csrf
 
        <div style="margin-bottom: 15px;">
            <label>Judul Buku:</label><br>
            <input type="text" name="title" value="{{ old('title') }}" style="width: 100%; padding: 8px;">
            @error('title')
                <span style="color: red; font-size: 13px;">{{ $message }}</span>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>Penulis:</label><br>
            <input type="text" name="author" value="{{ old('author') }}" style="width: 100%; padding: 8px;">
            @error('author')
                <span style="color: red; font-size: 13px;">{{ $message }}</span>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>Tahun Terbit:</label><br>
            <input type="number" name="year" value="{{ old('year') }}" style="width: 100%; padding: 8px;">
            @error('year')
                <span style="color: red; font-size: 13px;">{{ $message }}</span>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>Stok:</label><br>
            <input type="number" name="stock" value="{{ old('stock') }}" style="width: 100%; padding: 8px;">
            @error('stock')
                <span style="color: red; font-size: 13px;">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" style="padding: 8px 16px; background: #28a745; color: white; border: none; cursor: pointer;">Simpan</button>
        <a href="{{ route('books.index') }}" style="margin-left: 10px;">Batal</a>
    </form>
@endsection