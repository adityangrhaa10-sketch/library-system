@extends('layouts.app')

@section('content')
    <h2>Daftar Buku</h2>

    @foreach ($books as $book)
        <div>
            <h3>{{ $book->judul }}</h3>
            <ul>
                <li>Penulis: {{ $book->penulis }}</li>
                <li>Tahun Terbit: {{ $book->tahun_terbit }}</li>
                <li>Stok: {{ $book->stok }}</li>
            </ul>
        </div>
        <hr>
    @endforeach
@endsection