<div class="flex flex-col space-y-5 py-4">
    @forelse ($posts as $post)
        <!-- Blog Post Card -->
        <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden flex">
            <!-- Featured Image -->
            <img class="w-1/3 h-auto object-cover" src="{{ asset('storage/images/'.$post->featured_image) }}" alt="Blog Image">

            <!-- Post Content -->
            <div class="w-2/3 p-4">
                <!-- Blog Title -->
                <h2 class="text-3xl font-bold text-gray-800 hover:text-blue-600 transition duration-300 ease-in-out">
                    <a href="#" class="line-clamp-1">{{ $post->title }}</a>
                </h2>

                <!-- Author & Date -->
                <div class="flex items-center text-sm text-gray-500 mt-2">
                    <img class="w-10 h-10 object-cover rounded-full mr-3" src="https://picsum.photos/40" alt="Author Image">
                    <div>
                        <p class="font-semibold">John Doe</p>
                        <p>September 19, 2024</p>
                    </div>
                </div>

                <!-- Blog Description -->
                <p class="mt-2 text-gray-600 line-clamp-2">
                    {{ $post->content }}
                </p>

                <!-- Read More Button -->
                <div class="mt-3">
                    <a href="{{ route('viewpage', $post->id) }}" class="inline-block px-5 py-3 text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-lg transition duration-300 ease-in-out">
                        Read More →
                    </a>
                </div>
            </div>
        </div>
    @empty
        <p>Post not found.</p>
    @endforelse
</div>
