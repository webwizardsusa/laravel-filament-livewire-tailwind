<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet"/>

        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/custom.css" />
        <!-- AlpineJS -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" ></script>

        <!-- Lazyload CDN -->
        <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.7.0/dist/lazyload.min.js"></script>

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png" />
        <link rel="manifest" href="images/favicons/site.webmanifest" />
        <link rel="mask-icon" href="images/favicons/safari-pinned-tab.svg" color="#b91c1c" />
        <meta name="msapplication-TileColor" content="#f1f1f1" />
        <meta name="theme-color" content="#ffffff" />
        
        <!-- Tailwind CSS -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/src/tailwind.css') }}">
        
        @livewireStyles
    </head>
    <body>
        @include('partials.header') <!-- Extract header into a partial -->
        {{ $slot }}
        @include('partials.footer') <!-- Extract footer into a partial -->
        @livewireScripts
    </body>
</html>
