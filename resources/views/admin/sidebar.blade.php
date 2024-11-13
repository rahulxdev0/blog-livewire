<!-- Sidebar -->
<aside class="h-full bg-gray-800 shadow-lg">
    <nav class=" px-2 py-5">
        <a href="{{ route('dashboard') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700 transition-colors">
            <span class="text-lg font-medium text-white">Dashboard</span>
        </a>
        <a href="{{ route('topics') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700 transition-colors">
            <span class="text-lg font-medium text-white">Topics</span>
        </a>
        <a href="{{ route('post') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700 transition-colors">
            <span class="text-lg font-medium text-white">Manage posts</span>
        </a>
        <a href="{{ route('create-post') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700 transition-colors">
            <span class="text-lg font-medium text-white">Insert Post</span>
        </a>
        <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700 transition-colors">
            <span class="text-lg font-medium text-white">Reports</span>
        </a>
    </nav>
</aside>