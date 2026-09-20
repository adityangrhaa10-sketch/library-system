<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Library System')</title>
</head>
<body>

    <header>
        <h1>Library System</h1>
        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>
            <a href="/books">Books</a> | 
            <a href="/categories">Categories</a> | 
            <a href="/members">Members</a>
        </p>
    </footer>

</body>
</html>