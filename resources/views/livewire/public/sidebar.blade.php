<div class="flex h-screen w-full">
    <!-- Category Sidebar -->
    <div class="bg-white shadow-lg p-6 w-full">
        <!-- Sidebar Header -->
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Categories</h2>

        <!-- Category List -->
        <ul>
            @foreach ($topics as $topic)
                <li class="mb-4">
                    <a href="#" class="text-gray-600 px-3 py-3 bg-slate-100 hover:bg-blue-50 hover:text-blue-600 transition duration-300 ease-in-out flex items-center text-lg font-semibold rounded-lg shadow-sm">
                        <span class="mr-2">{{ $topic->topic_name }}</span>
                        <!-- Arrow SVG Icon -->
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-600 ml-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8.707 16.707a1 1 0 01-1.414-1.414L11.586 11 7.293 6.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5z"/>
                        </svg>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
