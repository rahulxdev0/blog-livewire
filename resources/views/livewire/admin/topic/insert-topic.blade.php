<div>
    <!-- Input Form -->
    <form wire:submit.prevent="save" method="post">
        <!-- Topic Title Field -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2" for="title">Topic Title</label>
            <input type="text" id="title" wire:model="topic_name"
                class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                placeholder="Enter topic title">
        </div>

        <!-- Topic Description Field -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2" for="description">Topic Description</label>
            <textarea id="description"  wire:model="topic_description" rows="4"
                class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                placeholder="Enter topic description"></textarea>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors">
                Save Topic
            </button>
        </div>
    </form>
</div>
