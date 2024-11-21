<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Theme</title>

    <!-- Link to your CSS files -->
    {{-- <link rel="stylesheet" href="{{ asset('css/theme.css') }}"> --}}

    @livewireStyles
</head>
<body>
    <header>
        <!-- Your theme's header here -->
        <nav>
            <!-- Navigation links -->
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Your theme's footer here -->
    </footer>

    <!-- Link to your JS files -->
    {{-- <script src="{{ asset('js/theme.js') }}"></script> --}}

    @livewireScripts
</body>
</html>
