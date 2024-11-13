<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | {{ env('APP_NAME') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('admin.header')

    <div class="flex flex-1">
        <div class="w-[20%] h-screen">
            @include('admin.sidebar')
        </div>
        <div class="w-[80%]">
            @section('content')

            @show
        </div>
    </div>
    
</body>
</html>


<!-- Script to toggle the user dropdown -->
<script>
    const profileButton = document.querySelector('.relative button');
    const dropdownMenu = document.querySelector('.relative .hidden');

    profileButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
    });
</script>