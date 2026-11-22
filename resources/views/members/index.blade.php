@extends('layouts.app')

@section('title', 'Data Anggota')

@section('content')
    <h2>Kelola Anggota Perpustakaan</h2>

    @if($errors->any())
        <div class="alert-error">{{ $errors->first() }}</div>
    @endif

    <form action="{{ route('members.store') }}" method="POST" style="margin-bottom: 15px;">
        @csrf
        <input type="text" name="member_code" placeholder="Kode Anggota (mis: M-001)" required>
        <input type="text" name="name" placeholder="Nama Lengkap" required>
        <input type="text" name="phone" placeholder="No. HP">
        <input type="text" name="address" placeholder="Alamat">
        <button type="submit">+ Tambah Anggota</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama Anggota</th>
                <th>No. HP</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $member)
            <tr>
                <td>{{ $member->member_code }}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->phone ?? '-' }}</td>
                <td>{{ $member->address ?? '-' }}</td>
                <td>
                    <form action="{{ route('members.destroy', $member) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Hapus anggota ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection