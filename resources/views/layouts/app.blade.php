<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'LogiTrack' }} | Dashboard</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 dark:bg-gray-900">

    <div class="min-h-screen xl:flex">
        @include('layouts.sidebar')

        <div class="flex-1 xl:ml-[290px]">
            
            @include('layouts.app-header')

            <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6 lg:p-8">
                @yield('content')
            </div>
            
        </div>
    </div>

</body>

@stack('scripts')

</html>