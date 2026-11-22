@extends('layouts.app')

@section('title', 'Transaksi Peminjaman')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h2>Daftar Transaksi Peminjaman & Pengembalian</h2>
        <a href="{{ route('borrowings.create') }}"><button>+ Buat Peminjaman Baru</button></a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Peminjam (Anggota)</th>
                <th>Buku & Jumlah</th>
                <th>Tgl Pinjam</th>
                <th>Jatuh Tempo</th>
                <th>Tgl Kembali</th>
                <th>Petugas</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($borrowings as $borrowing)
            <tr>
                <td>{{ $borrowing->id }}</td>
                <td>{{ $borrowing->member->name }} ({{ $borrowing->member->member_code }})</td>
                <td>
                    @foreach($borrowing->details as $detail)
                        {{ $detail->book->title }} (<strong>{{ $detail->quantity }} eks</strong>)<br>
                    @endforeach
                </td>
                <td>{{ $borrowing->borrowing_date }}</td>
                <td>{{ $borrowing->due_date }}</td>
                <td>{{ $borrowing->return_date ?? '-' }}</td>
                <td>{{ $borrowing->user->name }}</td>
                <td>
                    @if($borrowing->status === 'borrowed')
                        <span style="color: #b35900; font-weight: bold;">BORROWED</span>
                    @else
                        <span style="color: #155724; font-weight: bold;">RETURNED</span>
                    @endif
                </td>
                <td>
                    @if($borrowing->status === 'borrowed')
                        <form action="{{ route('borrowings.return', $borrowing) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" onclick="return confirm('Proses pengembalian buku ini?')">Kembalikan Buku</button>
                        </form>
                    @else
                        Selesai
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection