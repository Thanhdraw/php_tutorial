<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Dashboard</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased text-gray-800 bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 text-white bg-gray-800 shadow-lg">
            <div class="flex flex-col h-full">
                <div class="px-6 py-4 border-b border-gray-700">
                    <h3 class="text-2xl font-bold text-center text-white">E-Commerce</h3>
                </div>

                @include('layouts.admin.patials.sidebar')

                <div class="px-4 py-4 border-t border-gray-700">
                    <button
                        class="w-full px-4 py-2 text-sm font-medium text-white transition duration-200 bg-red-600 rounded-lg hover:bg-red-700">
                        Logout
                    </button>
                </div>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow-md">
                <div class="flex items-center justify-between px-6 py-4 mx-auto">
                    <div class="flex items-center">
                        <button class="mr-4 text-gray-500 hover:text-gray-600">
                            <i class="text-xl fas fa-bars"></i>
                        </button>
                        <h1 class="text-xl font-semibold text-gray-800">@yield('page-title')</h1>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <input type="text" placeholder="Search..."
                                class="px-4 py-2 text-sm text-gray-700 bg-gray-100 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <div class="relative">
                            <button class="text-gray-500 hover:text-gray-700">
                                <i class="text-xl fas fa-bell"></i>
                            </button>
                        </div>

                        @include('layouts.admin.patials.avatar')
                    </div>
                </div>
            </header>

            <!-- Content Wrapper -->
            <main class="flex-1 p-6 overflow-x-hidden overflow-y-auto bg-gray-100">
                <div class="container mx-auto">
                    @yield('content')
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-white shadow-md">
                <div class="px-6 py-4 mx-auto text-sm text-center text-gray-600">
                    © 2024 E-Commerce Admin Dashboard. All rights reserved.
                </div>
            </footer>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/admin/script.js') }}"></script>
    @stack('scripts')
</body>

</html>