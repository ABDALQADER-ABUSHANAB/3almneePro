<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', '3almnee') }}</title>
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('build/assets/images/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('build/assets/images/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('build/assets/images/favicon-16x16.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('build/assets/images/favicon.ico')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{asset('build/assets/images/android-chrome-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="512x512" href="{{asset('build/assets/images/android-chrome-512x512.png')}}">
        <link rel="manifest" href="{{asset('build/assets/images/site.webmanifest')}}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-sky-100 dark:bg-gray-900">
            <div>
                <a href="/">
                    <img src="{{asset('build/assets/images/logo.png')}}" alt="Logo">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
