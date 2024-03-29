<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Land</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.min.js" integrity="sha512-Atu8sttM7mNNMon28+GHxLdz4Xo2APm1WVHwiLW9gW4bmHpHc/E2IbXrj98SmefTmbqbUTOztKl5PDPiu0LD/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite('resources/css/app.css')
    @livewireStyles
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
                    <a href="{{ route("movies.index") }}" class="hover:text-gray-300">
                        Movies
                    </a>
                </li>
                <li class="ml-6">
                    <a href="{{ route('tv.index') }}" class="hover:text-gray-300">
                        TV Shows
                    </a>
                </li>
                <li class="ml-6">
                    <a href="{{ route("actors.index") }}" class="hover:text-gray-300">
                        Actors
                    </a>
                </li>
            </ul>
            <div class="flex item-center">
                <livewire:search-dropdown /> 
                <div class="ml-4">
                    <a href="#">
                        <img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
   
    @livewireScripts
    
    @yield('scripts')
</body>
</html>