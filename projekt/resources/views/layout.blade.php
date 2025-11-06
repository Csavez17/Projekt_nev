<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kritikus Tömeg</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <header>
        <img src="{{ asset('KMK_logo1.png') }}" alt="KMK-logo" />
        <h1>Kritikus tömeg</h1>
        <nav>
            <ul>
                <li><a href="{{route('questions.index')}}">Kérdések</a></li>
                <li><a href="{{route('questions.create')}}">Új szavazás</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')  
    </main>
    <footer>
        <p>&copy; 2025 Kritikus Tömeg</p>
    </footer>
        
</body>
</html>