<body class="bg-gray-100">
    <div class="w-64 h-screen p-4 text-white bg-gray-800">
        <h2 class="mb-4 text-xl font-bold">Sidebar</h2>

        <div class="space-y-2">
            <!-- Dropdown 1 -->
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open"
                    class="flex items-center justify-between w-full px-3 py-2 text-left rounded hover:bg-gray-700">
                    Học tập
                    <svg x-show="!open" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <svg x-show="open" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div x-show="open" class="pl-4 mt-2 space-y-2">
                    <a href="/category" class="block px-3 py-2 rounded hover:bg-gray-700">Category</a>
                    <a href="#" class="block px-3 py-2 rounded hover:bg-gray-700">Phòng ban</a>
                    <a href="#" class="block px-3 py-2 rounded hover:bg-gray-700">Chức vụ</a>
                </div>
            </div>

            <!-- Dropdown 2 -->
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open"
                    class="flex items-center justify-between w-full px-3 py-2 text-left rounded hover:bg-gray-700">
                    Relationship ORM
                    <svg x-show="!open" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <svg x-show="open" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div x-show="open" class="pl-4 mt-2 space-y-2">
                    <a href="#" class="block px-3 py-2 rounded hover:bg-gray-700">one to one</a>
                    <a href="#" class="block px-3 py-2 rounded hover:bg-gray-700">one to many</a>
                    <a href="/manytomany" class="block px-3 py-2 rounded hover:bg-gray-700">many to many</a>
                </div>
            </div>
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open"
                    class="flex items-center justify-between w-full px-3 py-2 text-left rounded hover:bg-gray-700">
                    Query Builder
                    <svg x-show="!open" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <svg x-show="open" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div x-show="open" class="pl-4 mt-2 space-y-2">
                    <a href="/QB" class="block px-3 py-2 rounded hover:bg-gray-700">Các thao tác cơ bản</a>
                    <a href="QB/join" class="block px-3 py-2 rounded hover:bg-gray-700">Thao tác nâng cao</a>
                    <a href="QB/update" class="block px-3 py-2 rounded hover:bg-gray-700">cap nhat du lieu</a>
                    <a href="QB/delete" class="block px-3 py-2 rounded hover:bg-gray-700">xoa du lieu</a>
                    <a href="QB/orderBy" class="block px-3 py-2 rounded hover:bg-gray-700">Thao tác nâng cao</a>
                </div>
            </div>
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open"
                    class="flex items-center justify-between w-full px-3 py-2 text-left rounded hover:bg-gray-700">
                    Authentication
                    <svg x-show="!open" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <svg x-show="open" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div x-show="open" class="pl-4 mt-2 space-y-2">
                    <a href="{{route('auth.login')}}" class="block px-3 py-2 rounded hover:bg-gray-700">Login</a>
                    <a href="{{route('register')}}" class="block px-3 py-2 rounded hover:bg-gray-700">SignUp</a>
                    <a href="#" class="block px-3 py-2 rounded hover:bg-gray-700">Forgot Password</a>
                </div>
            </div>
            <!-- Single menu item -->
            <a href="/" class="block px-3 py-2 rounded hover:bg-gray-700">Trang chủ</a>
        </div>
    </div>

    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>