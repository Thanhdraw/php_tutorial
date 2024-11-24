<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'E-Commerce')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="text-gray-800 bg-gray-100">

    <!-- Header -->
    @include('layouts.user.patials.header')

    <!-- Main Layout -->
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        @include('layouts.user.patials.sidebar')

        <!-- Main Content -->
        <main class="flex-1 p-6 bg-white rounded-lg shadow-lg">
            <div class="container mx-auto">
                @yield('content')
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="py-4 text-white bg-gray-800">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} E-Commerce. All rights reserved.</p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="{{ asset('js/user.js') }}"></script>
</body>

</html>