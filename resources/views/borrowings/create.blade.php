@extends('layouts.app')

@section('title', 'Tambah Peminjaman')

@section('content')
    <h2>Form Transaksi Peminjaman Buku</h2>

    @if($errors->any())
        <div class="alert-error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('borrowings.store') }}" method="POST">
        @csrf
        <div style="margin-bottom: 10px;">
            <label>Pilih Anggota:</label><br>
            <select name="member_id" required>
                <option value="">-- Pilih Anggota --</option>
                @foreach($members as $member)
                    <option value="{{ $member->id }}">{{ $member->member_code }} - {{ $member->name }}</option>
                @endforeach
            </select>
        </div>

        <div style="margin-bottom: 10px;">
            <label>Pilih Buku (Tersedia):</label><br>
            <select name="book_id" required>
                <option value="">-- Pilih Buku --</option>
                @foreach($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }} (Stok: {{ $book->stock }})</option>
                @endforeach
            </select>
        </div>

        <div style="margin-bottom: 15px;">
            <label>Jumlah Pinjam:</label><br>
            <input type="number" name="quantity" value="1" min="1" required>
        </div>

        <button type="submit">Simpan Transaksi Peminjaman</button>
        <a href="{{ route('borrowings.index') }}">Batal</a>
    </form>
@endsection