<!DOCTYPE html>
<html x-data="{ darkMode: false }" 
      x-init="darkMode = localStorage.getItem('darkMode') === 'true'; 
              $watch('darkMode', val => localStorage.setItem('darkMode', val))" 
      :class="{ 'dark': darkMode }" 
      lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hệ Thống Học Tập AK</title>
  
  <!-- Removed duplicate script tags -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
  <script>
    function toggleDarkMode() {
      const html = document.documentElement;
      html.classList.toggle('dark');
      localStorage.setItem('darkMode', html.classList.contains('dark'));
    }
    tailwind.config = {
      darkMode: 'class'
    }
    document.addEventListener('DOMContentLoaded', () => {
      const savedMode = localStorage.getItem('darkMode');
      if (savedMode === 'true') {
        document.documentElement.classList.add('dark');
      }
    });
  </script>
</head>

<body class="text-gray-900 transition-colors duration-300 bg-gray-100 dark:bg-gray-900 dark:text-gray-100">
  <div class="fixed top-4 right-4">
    <label class="flex items-center cursor-pointer">
      <div class="relative">
        <input type="checkbox" class="sr-only" x-model="darkMode" />
        <div class="w-10 h-4 bg-gray-400 rounded-full shadow-inner"></div>
        <div class="absolute w-6 h-6 transition bg-white rounded-full shadow dot -left-1 -top-1" :class="darkMode ? 'transform translate-x-full bg-blue-500' : 'bg-gray-300'"></div>
      </div>
      <div class="ml-3 text-gray-700 dark:text-gray-300">
        <span x-text="darkMode ? 'Dark Mode' : 'Light Mode'"></span>
      </div>
    </label>
  </div>

  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <div class="w-64 p-6 bg-white shadow-md dark:bg-gray-800">
      <div class="mb-10 text-center">
        <img class="h-24 mx-auto mb-4 rounded-full w-30" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxqEOBB_zQRIYACT3EoyGiaIQ9mjLYDdjjEQ&s" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxqEOBB_zQRIYACT3EoyGiaIQ9mjLYDdjjEQ&s" class="mx-auto mb-4 rounded-full">
        <h1 class="text-xl font-bold text-blue-600 dark:text-blue-400 hover:text-blue-700">thanhDev Learning</h1>
      </div>

      <nav>
        <ul class="space-y-4">
          <li class="group">
            <a href="#" class="flex items-center p-3 text-gray-700 transition duration-300 rounded-lg dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-gray-700">
              <i class="mr-3 text-blue-500 fas fa-home dark:text-blue-400 group-hover:text-blue-600"></i>
              Trang Chủ
            </a>
          </li>
          <li class="group">
            <a href="#" class="flex items-center p-3 text-gray-700 transition duration-300 rounded-lg dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-gray-700">
              <i class="mr-3 text-green-500 fas fa-graduation-cap dark:text-green-400 group-hover:text-green-600"></i>
              Khóa Học
            </a>
          </li>
          <li class="group">
            <button onclick="toggleDarkMode()" class="flex items-center w-full p-3 text-gray-700 transition duration-300 rounded-lg dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-gray-700">
              <i class="mr-3 text-purple-500 fas fa-moon dark:text-purple-400"></i>
              Chế Độ Tối
            </button>
          </li>
        </ul>
      </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-8 bg-gray-50 dark:bg-gray-700">
      <header class="flex items-center justify-between mb-8">
        <div>
          <h2 class="text-3xl font-semibold text-gray-800 dark:text-gray-200">Bảng Điều Khiển</h2>
          <p class="text-gray-500 dark:text-gray-400">Tổng quan các khóa học</p>
        </div>

        <div class="flex items-center space-x-4">
          <div class="relative">
            <button class="text-gray-600 dark:text-gray-300 hover:text-blue-600">
              <i class="text-xl fas fa-bell"></i>
              <span class="absolute flex items-center justify-center w-5 h-5 text-xs text-white bg-red-500 rounded-full -top-2 -right-2">3</span>
            </button>
          </div>
          <div class="flex items-center space-x-2">
            <img src="/api/placeholder/40/40" alt="User" class="rounded-full">
            <span class="font-medium text-gray-800 dark:text-gray-200">Nguyễn Văn A</span>
          </div>
        </div>
      </header>

      <!-- Course Blocks -->
      <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
        <div class="p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
          <div class="flex items-center justify-between mb-4">
            <i class="text-3xl text-blue-600 fas fa-code dark:text-blue-400"></i>
            <span class="font-bold text-green-600">75%</span>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-gray-800 dark:text-gray-200">Lập Trình Web Laravel + MySQL</h3>
          <p class="mb-4 text-gray-600 dark:text-gray-400">Giảng viên: Nguyễn Văn A</p>
          <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 75%"></div>
          </div>
        </div>

        <div class="p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
          <div class="flex items-center justify-between mb-4">
            <i class="text-3xl text-green-600 fas fa-database dark:text-green-400"></i>
            <span class="font-bold text-green-600">45%</span>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-gray-800 dark:text-gray-200">React + React Native & Laravel Fullstack</h3>
          <p class="mb-4 text-gray-600 dark:text-gray-400">Giảng viên: Trần Thị B</p>
          <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
            <div class="bg-green-600 h-2.5 rounded-full" style="width: 45%"></div>
          </div>
        </div>

        <div class="p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
          <div class="flex items-center justify-between mb-4">
            <i class="text-3xl text-purple-600 fas fa-paint-brush dark:text-purple-400"></i>
            <span class="font-bold text-green-600">60%</span>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-gray-800 dark:text-gray-200">Thiết Kế UX/UI</h3>
          <p class="mb-4 text-gray-600 dark:text-gray-400">Tình trạng: Spending</p>
          <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
            <div class="bg-purple-600 h-2.5 rounded-full" style="width: 60%"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>