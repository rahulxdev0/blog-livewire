<div>
    <div class="flex items-center justify-between px-3  mb-3">
        <h2 class="text-2xl font-semibold">Manage Topics</h2>
        <input type="text" wire:model.live="search"
            class="px-3 py-2 rounded-full border border-gray-400 focus:outline-none" placeholder="Search here.....">
    </div>
    <!-- List of Topics -->
    @foreach ($topics as $topic)
        <div class="flex justify-between bg-gray-100 p-4 rounded-md mb-4 shadow-sm">
            <div class="">
                <h3 class="text-lg font-bold"><span class="mr-1">{{ $topic->id }}.</span>{{ $topic->topic_name }}</h3>
                <p class="text-gray-600 mt-2">{{ $topic->topic_description }}</p>
            </div>
            <div class="flex gap-1 items-center justify-center">
                <button wire:confirm="Are you sure you want to delete this topic?" wire:click="deleteTopic({{ $topic->id }})" class="px-4 py-1 rounded-full border border-orange-600">Delete</button>
                <button type="submit" class="px-4 py-1 rounded-full border border-green-600">Edit</button>
            </div>
        </div>
    @endforeach
</div>
