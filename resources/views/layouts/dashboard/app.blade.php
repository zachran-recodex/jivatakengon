<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <style>
        .user-indicator {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body class="font-sans antialiased">
        @include('layouts.dashboard.nav')

        @include('layouts.dashboard.sidebar')

        <main class="p-8 sm:ml-64 min-h-screen bg-gray-100 dark:bg-gray-800">
            {{ $slot }}
        </main>

        <div class="user-indicator capitalize">
            @if(Auth::user()->hasRole('user'))
                {{ Auth::user()->name }}
            @else
                Role: {{ Auth::user()->getRoleNames()->first() }}
            @endif
        </div>
    </body>
</html>
