<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'E-Commerce')</title>
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body>


    <main>
        @yield('content') <!-- Nội dung từng trang -->
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} E-Commerce</p>
    </footer>
</body>

</html>