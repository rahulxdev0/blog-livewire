@extends('layout')

@section('content')
    <!-- Filter Page Container -->
    <div class="container mx-auto px-6 py-12">
        <!-- Heading -->
        <h1 class="text-4xl font-bold text-gray-800 mb-8">Filter Blog Posts</h1>

        <!-- Filter Section -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Filters Sidebar -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Filter By</h2>

                <!-- Categories Filter -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Categories</h3>
                    <ul class="space-y-2">
                        <li>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" />
                                <span class="ml-2 text-gray-700">Web Development</span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" />
                                <span class="ml-2 text-gray-700">Design</span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" />
                                <span class="ml-2 text-gray-700">JavaScript</span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" />
                                <span class="ml-2 text-gray-700">CSS</span>
                            </label>
                        </li>
                    </ul>
                </div>

                <!-- Tags Filter -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Tags</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-gray-200 text-gray-700 px-4 py-1 rounded-full cursor-pointer">HTML</span>
                        <span class="bg-gray-200 text-gray-700 px-4 py-1 rounded-full cursor-pointer">CSS</span>
                        <span class="bg-gray-200 text-gray-700 px-4 py-1 rounded-full cursor-pointer">JavaScript</span>
                        <span class="bg-gray-200 text-gray-700 px-4 py-1 rounded-full cursor-pointer">React</span>
                    </div>
                </div>

                <!-- Date Filter -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Published Date</h3>
                    <input type="date" class="w-full p-2 border border-gray-300 rounded-md" />
                </div>

                <!-- Apply Filters Button -->
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Apply Filters</button>
            </div>

            <!-- Blog Posts Section -->
            <div class="lg:col-span-3">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Blog Post Card -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img class="w-full h-40 object-cover" src="https://picsum.photos/300/150" alt="Blog Post">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800 hover:text-blue-600">
                                <a href="#">Understanding CSS Grid</a>
                            </h3>
                            <p class="mt-2 text-gray-600">
                                A deep dive into how CSS Grid works to create responsive layouts.
                            </p>
                        </div>
                    </div>

                    <!-- Blog Post Card -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img class="w-full h-40 object-cover" src="https://picsum.photos/300/150" alt="Blog Post">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800 hover:text-blue-600">
                                <a href="#">Mastering JavaScript for Web Development</a>
                            </h3>
                            <p class="mt-2 text-gray-600">
                                Learn the advanced concepts of JavaScript to build dynamic websites.
                            </p>
                        </div>
                    </div>

                    <!-- Blog Post Card -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img class="w-full h-40 object-cover" src="https://picsum.photos/300/150" alt="Blog Post">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800 hover:text-blue-600">
                                <a href="#">Design Principles for Web Developers</a>
                            </h3>
                            <p class="mt-2 text-gray-600">
                                A guide to understanding core design principles for a better user experience.
                            </p>
                        </div>
                    </div>

                    <!-- Add more blog post cards as necessary -->
                </div>
            </div>
        </div>
    </div>
@endsection
