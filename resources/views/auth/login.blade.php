<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Library System</title>
</head>
<body>
    <h2>Login Sistem Perpustakaan</h2>

    @if ($errors->any())
        <div style="color: red;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <p>
            <label for="email">Email Address:</label><br>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </p>
        <p>
            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password" required>
        </p>
        <button type="submit">Login</button>
    </form>
</body>
</html>