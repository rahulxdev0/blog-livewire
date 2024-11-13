@extends("admin.adminlayout")


@section('content')

<div class="min-h-screen flex bg-gray-900 text-white">
    <!-- Main Content -->
    <div class="flex-1 flex flex-col">

        <!-- Dashboard Stats -->
        <main class="flex-1 p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Stat Card -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-bold">Total Users</h2>
                        <p class="text-2xl mt-2">1,234</p>
                    </div>
                    <div class="text-gray-500">
                        <svg class="h-12 w-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2h5M8 10a4 4 0 118 0 4 4 0 01-8 0z" />
                        </svg>
                    </div>
                </div>

                <!-- Stat Card -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-bold">Active Sessions</h2>
                        <p class="text-2xl mt-2">345</p>
                    </div>
                    <div class="text-gray-500">
                        <svg class="h-12 w-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4H8v4H7v-5h6v5zm0-7h-3V7h3v2z" />
                        </svg>
                    </div>
                </div>

                <!-- Stat Card -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-bold">New Orders</h2>
                        <p class="text-2xl mt-2">67</p>
                    </div>
                    <div class="text-gray-500">
                        <svg class="h-12 w-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h18v18H3V3zm6 4v8h6V7H9z" />
                        </svg>
                    </div>
                </div>

                <!-- Stat Card -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-bold">Revenue</h2>
                        <p class="text-2xl mt-2">$23,567</p>
                    </div>
                    <div class="text-gray-500">
                        <svg class="h-12 w-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.5-2-4-2-6 0m6 0c1.5-2 4-2 6 0m-6 0c-1.5-2-4-2-6 0m6 0c1.5-2 4-2 6 0m-6 0v8m0 0l-3-3m3 3l3-3" />
                        </svg>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


@endsection