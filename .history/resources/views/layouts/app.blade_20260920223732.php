<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Library System')</title>
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Library System</h1>
        <hr>
    </header>

    <!-- Navigasi -->
    <nav>
        <a href="/dashboard">Dashboard</a> | 
        <a href="/books">Books</a> | 
        <a href="/categories">Categories</a> | 
        <a href="/members">Members</a>
        <hr>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>&copy; 2026 Library System - Praktikum Web Framework</p>
    </footer>

</body>
</html>