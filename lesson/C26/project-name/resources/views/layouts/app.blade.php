<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Laravel App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('css/app.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .active {
            color: #417cb6;
            text-decoration: underline;
        }
    </style>
</head>
@include('layouts.header')

<body class="flex flex-col h-screen">
<main class="flex-1 flex flex-col items-center justify-center">
    <div class="max-w-md w-full bg-white shadow-md rounded">

        @yield('content')
    </div>
</main>
</body>


</html>
<div class="table-footer-group">
    @include('layouts.footer')
</div>




