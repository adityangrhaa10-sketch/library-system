@extends('layouts.app')

@section('title', 'Dashboard Perpustakaan')

@section('content')
    <h2>Dashboard Sistem Informasi Perpustakaan</h2>
    <p>Ringkasan informasi data perpustakaan secara real-time:</p>

    <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-top: 15px;">
        <div style="border: 1px solid #ccc; padding: 15px; width: 180px;">
            <h4>Total Kategori</h4>
            <p style="font-size: 24px; font-weight: bold;">{{ $totalCategories }}</p>
        </div>
        <div style="border: 1px solid #ccc; padding: 15px; width: 180px;">
            <h4>Total Judul Buku</h4>
            <p style="font-size: 24px; font-weight: bold;">{{ $totalBooks }}</p>
        </div>
        <div style="border: 1px solid #ccc; padding: 15px; width: 180px;">
            <h4>Total Anggota</h4>
            <p style="font-size: 24px; font-weight: bold;">{{ $totalMembers }}</p>
        </div>
        <div style="border: 1px solid #ccc; padding: 15px; width: 180px;">
            <h4>Total Peminjaman</h4>
            <p style="font-size: 24px; font-weight: bold;">{{ $totalBorrowings }}</p>
        </div>
        <div style="border: 1px solid #ccc; padding: 15px; width: 180px; background: #fff8e1;">
            <h4>Sedang Dipinjam</h4>
            <p style="font-size: 24px; font-weight: bold;">{{ $activeBorrowings }}</p>
        </div>
    </div>
@endsection