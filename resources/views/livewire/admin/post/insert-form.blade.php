<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md mt-10">
    <form wire:submit.prevent="store" class="space-y-6">
        <!-- Title -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" wire:model="title" class="mt-1 block w-full rounded-md border px-3 py-2 border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter title">
            @error('title') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Content -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Content</label>
            <textarea wire:model="content" rows="5" class="mt-1 block border px-3 py-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter content"></textarea>
            @error('content') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Topic -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Topic</label>
            <select wire:model="topic_id" class="mt-1 block w-full rounded-md border px-3 py-2 border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                <option value="">Select a topic</option>
                <!-- Assuming topics are passed from the controller -->
                @foreach($topics as $topic)
                    <option value="{{ $topic->id }}">{{ $topic->topic_name }}</option>
                @endforeach
            </select>
            @error('topic_id') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Featured Image -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Featured Image</label>
            <input type="file" wire:model="featured_image" class="mt-1 block w-full rounded-md border px-3 py-2 border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Image URL">
            @error('featured_image') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        @if ($featured_image)
            <img src="{{ $featured_image->temporaryUrl() }}" alt="">
        @endif

        <!-- Submit Button -->
        <div>
            <button type="submit" class="w-full px-4 py-2 bg-indigo-600 text-white rounded-md shadow hover:bg-indigo-700">Submit</button>
        </div>

        @if (session()->has('message'))
            <div class="mt-4 text-green-600">{{ session('message') }}</div>
        @endif
    </form>
    {{-- <h1>aa gya bhai</h1> --}}
</div>
