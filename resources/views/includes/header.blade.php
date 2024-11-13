<header class="bg-blue-600 text-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo Section -->
        <div class="text-2xl font-semibold">
            <a href="#" class="text-white hover:text-gray-200">EduBlog</a>
        </div>

        <!-- Navigation Menu -->
        <nav class="hidden md:flex space-x-6">
            <a href="{{ route('homepage') }}" class="hover:text-gray-200">Home</a>
            <a href="#" class="hover:text-gray-200">Categories</a>
            <a href="#" class="hover:text-gray-200">Courses</a>
            <a href="#" class="hover:text-gray-200">About Us</a>
            <a href="#" class="hover:text-gray-200">Contact</a>
        </nav>

        <!-- Search Bar and Auth Buttons -->
        @guest
        <div class="flex items-center space-x-4">
            <a href="{{ route('signup') }}" class=" text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5">Login</a>
        </div>
        @endguest

        @auth
        <div class="flex gap-2 items-center">
            <div class="flex items-center space-x-4 p-2 bg-gray-100 rounded-lg shadow">
                <!-- Profile Image -->
                <img src="https://via.placeholder.com/40" alt="User Profile" class="w-10 h-10 rounded-full object-cover">
              
                <!-- User Name -->
                <div>
                  <p class="text-sm font-semibold text-gray-700">{{ auth()->user()->name }}</p>
                  <p class="text-xs text-gray-500">{{ auth()->user()->email }}</p>
                </div>
            </div>
            <div class="flex">
                <a href="{{ route('logout') }}" class="text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5">
                    Logout
                </a>
            </div>
        </div>
        @endauth
    </div>


</header>
