@extends('layouts.app')

@section('title', 'Data Kategori')

@section('content')
    <h2>Kelola Kategori Buku</h2>

    <form action="{{ route('categories.store') }}" method="POST" style="margin-bottom: 15px;">
        @csrf
        <input type="text" name="name" placeholder="Nama kategori baru..." required>
        <button type="submit">+ Tambah Kategori</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kategori</th>
                <th>Jumlah Buku</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->books_count }} buku</td>
                <td>
                    <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Hapus kategori ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection