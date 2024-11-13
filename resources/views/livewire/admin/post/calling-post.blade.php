<div class="flex flex-1 flex-col px-5 py-2">
    <div class="flex items-center justify-between px-3  mb-3">
        <h2 class="text-2xl font-semibold">Manage posts ({{ count($posts) }})</h2>
        <input type="text" wire:model.live="searchTerm"
            class="px-3 py-2 rounded-full border border-gray-400 focus:outline-none" placeholder="Search here.....">
    </div>
    @if (session('status'))
    <div class="w-full px-5 py-3 text-white bg-green-600">
        {{ session('status') }}
    </div>
@endif
    <div class="w-full overflow-x-auto">
        <table class="w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Topic</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Content</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($posts as $post)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $post->id }}</td>
                        <td class="px-6 py-4  text-sm text-gray-900">{{ $post->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $post->topic->topic_name}}</td>
                        <td class="px-6 py-4  text-sm text-gray-900 line-clamp-5 mb-2">{{ $post->content}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900  gap-2 items-center justify-center">
                            <button class="px-3 py-1 border border-green-600 rounded-full">Edit</button>
                            <button wire:click="deletePost({{ $post->id }})" class="px-3 py-1 border border-red-600 rounded-full">Delete</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="p-3 text-center border" colspan="5">Post not found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
</div>