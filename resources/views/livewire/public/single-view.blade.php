<!-- Grid layout for Blog Post and Related Posts -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-7">
    <!-- Single Blog Post Section -->
    <div class="lg:col-span-2 bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Featured Image -->
        <img class="w-full h-64 object-cover" src="https://picsum.photos/800/400" alt="Blog Image">

        <!-- Blog Content -->
        <div class="p-8">
            <!-- Post Title -->
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                {{ $post->title }}
            </h1>

            <!-- Author & Date -->
            <div class="flex items-center text-sm text-gray-500 mb-6">
                <img class="w-10 h-10 object-cover rounded-full mr-4" src="{{ asset('storage/images/'.$post->featured_image) }}" alt="Author Image">
                <div>
                    <p class="font-semibold">{{ $post->id }}</p>
                    <p>Published on {{ $post->created_at }}</p>
                </div>
            </div>

            <!-- Blog Body -->
            <div class="text-gray-700 leading-relaxed">
                <p class="mb-4">
                    {{ $post->content }}
                </p>

                <!-- Add more paragraphs or sections as necessary -->
            </div>
        </div>
    </div>

    <!-- Related Posts Section -->
    <div class="bg-slate-50 shadow-md rounded-lg p-3">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Related Posts</h2>

        <!-- Related Post Card -->
        @foreach ($related_posts as $item)
            <a href="{{ route('viewpage', $item->id) }}" class="mb-6">
                <div class="flex bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="flex w-full items-center justify-center p-2">
                        <img class="h-full" src="https://picsum.photos/300/150" alt="Related Post">
                    </div>
                    <div class="px-2">
                        <h3 class="text-xl font-semibold text-gray-800 hover:text-blue-600">
                            <a href="#">10 Tips to Master CSS in 2024</a>
                        </h3>
                        <p class=" text-gray-600 line-clamp-1">
                            CSS is a powerful tool for styling your website. Learn how to leverage it effectively with
                            these tips.
                        </p>
                        <a href="#"
                            class="mt-1 mb-1 inline-block text-blue-600 hover:underline font-semibold">Read More →</a>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
