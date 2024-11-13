<!-- Header -->
<header class="flex items-center justify-between bg-gray-800 py-2 px-[5%]">
    <div class="">
        <a href="#" class="text-3xl font-bold text-white hover:text-blue-400">Admin Panel</a>
    </div>
    <div class="flex items-center space-x-4">
        <!-- Search -->
        <div class="relative text-gray-400">
            <input type="text" class="bg-gray-700 h-10 px-5 pr-10 rounded-full text-sm focus:outline-none"
                placeholder="Search...">
        </div>

        <!-- User Dropdown -->
        <div class="relative">
            <button
                class="flex items-center bg-gray-700 hover:bg-gray-600 rounded-full px-4 py-2 focus:outline-none">
                <img class="w-8 h-8 rounded-full" src="https://picsum.photos/50" alt="User Avatar">
                <span class="ml-2">Admin</span>
            </button>
            <!-- Dropdown (hidden by default) -->
            <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 text-gray-800 z-20">
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
            </div>
        </div>
    </div>
</header>