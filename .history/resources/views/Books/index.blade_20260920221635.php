@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>
    <p>{{ $description }}</p>

    {{-- Pengecekan Informasi Stok --}}
    <p>
        <strong>Status Stok: </strong>
        @if($stock > 0)
            Buku tersedia.
        @else
            Buku sedang habis.
        @endif
    </p>

    <ul>
        @foreach($books as $book)
            <li>{{ $book }}</li>
        @endforeach
    </ul>
@endsection