@extends('admin.adminlayout')


@section('content')

<div class="min-h-screen bg-gray-100 flex p-5 gap-5">
    <!-- Topics List Section -->
    <div class="w-2/3 bg-white shadow-md rounded-lg p-6 ">
        
        <livewire:admin.topic.calling-topic/>
    </div>

    <!-- Input Form Section -->
    <div class="w-1/3 bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold mb-4">Add / Edit Topic</h2>
        
        <livewire:admin.topic.insert-topic/>
        
    </div>
</div>


@endsection