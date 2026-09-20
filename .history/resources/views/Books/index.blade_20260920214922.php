<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $description }}</p>

    <ul>
        @foreach($books as $book)
            <li>{{ $book }}</li>
        @endforeach
    </ul>
    @if($stock > 0)
    <p>Stok tersedia: {{ $stock }}</p>
    @else
    <p>Stok habis.</p>
@endif
</body>
</html>