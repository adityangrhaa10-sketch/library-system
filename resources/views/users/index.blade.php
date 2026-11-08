@extends('layouts.app')

@section('title', 'Kelola Pengguna')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h3>Daftar Pengguna Sistem (Khusus Admin)</h3>
        <a href="{{ route('books.index') }}">← Kembali ke Daftar Buku</a>
    </div>
    <br>

    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><strong>{{ strtoupper($user->role) }}</strong></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection