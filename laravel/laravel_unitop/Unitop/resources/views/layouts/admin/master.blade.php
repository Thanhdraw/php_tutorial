<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Dashboard</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Kết hợp Vite cho CSS và JS -->
</head>

<body class="text-gray-800 bg-gray-100">

    <div class="flex wrapper">
        <!-- Sidebar -->
        <aside class="w-64 p-5 text-white bg-gray-800">
            @include('layouts.admin.patials.sidebar')
        </aside>

        <!-- Main Content -->
        <div class="flex-1">
            <!-- Header -->
            @include('layouts.admin.patials.header')

            <!-- Content Wrapper -->
            <div class="p-4 content-wrapper">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            <!-- Overlay (Hiện khi có hoạt động nào đó đang diễn ra) -->
            <div class="fixed inset-0 items-center justify-center bg-black bg-opacity-50 overlay">

            </div>

            <!-- Footer -->
            @include('layouts.admin.patials.footer')
        </div>


    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/admin/script.js') }}"></script>
    @stack('scripts')
</body>

</html>