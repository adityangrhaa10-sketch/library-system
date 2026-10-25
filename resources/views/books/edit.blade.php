@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h3>Edit Data Buku</h3>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <p>
            <label>Judul Buku:</label><br>
            <input type="text" name="title" value="{{ old('title', $book->title) }}" required>
            @error('title') <br><small style="color:red;">{{ $message }}</small> @enderror
        </p>
        <p>
            <label>Penulis:</label><br>
            <input type="text" name="author" value="{{ old('author', $book->author) }}" required>
            @error('author') <br><small style="color:red;">{{ $message }}</small> @enderror
        </p>
        <p>
            <label>Kategori:</label><br>
            <select name="category_id" required>
                <option value="">Pilih kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id', $book->category_id) == $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id') <br><small style="color:red;">{{ $message }}</small> @enderror
        </p>
        <p>
            <label>Tahun Terbit:</label><br>
            <input type="number" name="year" value="{{ old('year', $book->year) }}" required>
            @error('year') <br><small style="color:red;">{{ $message }}</small> @enderror
        </p>
        <p>
            <label>Stok:</label><br>
            <input type="number" name="stock" value="{{ old('stock', $book->stock) }}" required>
            @error('stock') <br><small style="color:red;">{{ $message }}</small> @enderror
        </p>
        <button type="submit">Update</button>
        <a href="{{ route('books.index') }}">Batal</a>
    </form>
@endsection