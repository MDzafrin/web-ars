<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Company Profile')</title>

        <!-- Link CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Link Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <!-- Nav Bar -->
        <nav class="navbar">
            <a href="/home">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </nav>

        
        
         @yield('content')
        

        <!-- Footer -->
        <footer>
            <p>&copy; 2026 ATMI Recycle Studio. All rights reserved.</p>
        </footer>

    </body>
</html>