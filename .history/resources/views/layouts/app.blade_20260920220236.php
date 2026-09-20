<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    
    <title>
        @yield('title')
    </title>
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
        <p>Library System</p>
        </footer>

    </body>
    </html>

    <nav>
        <a href="/books">Books</a> |
        <a href="/categories">Categories</a> |
        <a href="/members">Members</a>
</nav>
<hr>
Sehingga layout memiliki:
<header>
 <h1>Library System</h1>
 <nav>
 <a href="/books">Books</a> |
 <a href="/categories">Categories</a> |
 <a href="/members">Members</a>
 </nav>
 <hr>
</header>