<div class="relative">
    <!-- Profile Dropdown Trigger -->
    <button id="profileDropdownTrigger" class="flex items-center focus:outline-none">
        <img src="https://via.placeholder.com/40" alt="Profile" class="object-cover w-10 h-10 rounded-full">
        <span class="ml-2 text-sm font-medium text-gray-700">Admin Name</span>
        <i class="ml-2 text-xs text-gray-500 fas fa-chevron-down"></i>
    </button>

    <!-- Dropdown Menu -->
    <div id="profileDropdownMenu"
        class="absolute right-0 hidden w-48 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg">
        <div class="py-1">
            <a href="#" class="flex items-center block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                <i class="mr-3 fas fa-user"></i>
                Profile
            </a>
            <a href="#" class="flex items-center block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                <i class="mr-3 fas fa-cog"></i>
                Settings
            </a>
            <hr class="my-1 border-gray-200">
            <a href="#" class="flex items-center block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                <i class="mr-3 fas fa-sign-out-alt"></i>
                Logout
            </a>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dropdownTrigger = document.getElementById('profileDropdownTrigger');
        const dropdownMenu = document.getElementById('profileDropdownMenu');

        // Toggle dropdown
        dropdownTrigger.addEventListener('click', function (e) {
            e.stopPropagation();
            dropdownMenu.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function () {
            dropdownMenu.classList.add('hidden');
        });

        // Prevent dropdown from closing when clicking inside
        dropdownMenu.addEventListener('click', function (e) {
            e.stopPropagation();
        });
    });
</script>