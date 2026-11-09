<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Company Profile')</title>
        <!-- Link CSS -->
    </head>
    <body>
        <!-- Nav Bar -->
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
        </nav>

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer>
            <p>&copy; 2026 ATMI Recycle Studio. All rights reserved.</p>
        </footer>

    </body>
</html>