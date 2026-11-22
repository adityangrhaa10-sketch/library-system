<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Informasi Perpustakaan')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        nav { background: #f4f4f4; padding: 12px; margin-bottom: 20px; border: 1px solid #ddd; display: flex; justify-content: space-between; align-items: center; }
        nav a { margin-right: 15px; text-decoration: none; color: #333; font-weight: bold; }
        nav a:hover { color: #0056b3; }
        .alert-success { background: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; border: 1px solid #c3e6cb; }
        .alert-error { background: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 15px; border: 1px solid #f5c6cb; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #eee; }
    </style>
</head>
<body>
    @auth
    <nav>
        <div>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('categories.index') }}">Kategori</a>
            <a href="{{ route('books.index') }}">Buku</a>
            <a href="{{ route('members.index') }}">Anggota</a>
            <a href="{{ route('borrowings.index') }}">Peminjaman</a>
            @can('manage-users')
                <a href="{{ route('users.index') }}" style="color: #b30000;">Kelola Pengguna</a>
            @endcan
        </div>
        <div>
            <span style="margin-right: 10px;">Halo, <strong>{{ auth()->user()->name }}</strong> ({{ strtoupper(auth()->user()->role) }})</span>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </nav>
    @endauth

    @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert-error">{{ session('error') }}</div>
    @endif

    @yield('content')
</body>
</html>