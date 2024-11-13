<div class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Welcome Back</h2>
        <p class="text-gray-600 mb-6">Please log in to your account</p>

        <!-- Login Form -->
        <form action="" method="POST" class="space-y-6">
            @csrf
            <!-- Email Input -->
            <div>
                <label for="email" class="block text-gray-700 text-sm font-medium mb-1">Email</label>
                <input type="email" id="email" name="email" class="w-full p-3 rounded-lg shadow-md focus:ring-2 focus:ring-blue-500 focus:outline-none border border-gray-300" placeholder="Enter your email">
                @error('email')
                    <p class="text-sm font-semibold text-blue-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Input -->
            <div>
                <label for="password" class="block text-gray-700 text-sm font-medium mb-1">Password</label>
                <input type="password" id="password" name="password" class="w-full p-3 rounded-lg shadow-md focus:ring-2 focus:ring-blue-500 focus:outline-none border border-gray-300" placeholder="Enter your password">
                @error('password')
                    <p class="text-sm font-semibold text-blue-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Login Button -->
            <button type="submit" class="w-full bg-gradient-to-r from-[#7a1000] to-[#03012c] text-white py-3 rounded-lg font-semibold hover:shadow-lg transition duration-300">Login</button>

            <!-- Divider -->
            <div class="flex justify-center items-center space-x-2 my-4">
                <span class="w-1/5 border-b border-gray-300"></span>
                <span class="text-gray-500 text-sm">or</span>
                <span class="w-1/5 border-b border-gray-300"></span>
            </div>

            <!-- Register Button -->
            <a href="{{ url('auth/google') }}" class="flex items-center justify-center w-full border border-gray-300 py-3 rounded-lg font-semibold text-gray-700 hover:bg-gray-100 transition duration-300"><span class="ml-1">
                <img src="{{ asset('google.webp') }}" alt="" class="h-7 w-7">
            </span>Google</a>
        </form>
    </div>

</div>
