<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>Daftar Buku</h1>
<ul>
 @foreach($books as $book)
 <li>{{ $book }}</li>
 @endforeach
</ul>
    <p>{{ $description }}</p>
</body>
</html>