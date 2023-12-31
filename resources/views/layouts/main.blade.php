<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Land</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800 ">
        <div class="container mx-auto flex items-center justify-between px-4 py-6">
            <ul class="flex item-center">
                <li>
                    <a href="#" class="bold">
                        MovIeLandO
                    </a>
                </li>
                <li class="ml-16">
                    <a href="#" class="hover:text-gray-300">
                        Movies
                    </a>
                </li>
                <li class="ml-6">
                    <a href="#" class="hover:text-gray-300">
                        TV Shows
                    </a>
                </li>
                <li class="ml-6">
                    <a href="#" class="hover:text-gray-300">
                        Actors
                    </a>
                </li>
            </ul>
            <div class="flex item-center">
                <div class="relative">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1 pl-8 focus:outline-none 
                        focus:shadow-outline" placeholder="Search..">
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>