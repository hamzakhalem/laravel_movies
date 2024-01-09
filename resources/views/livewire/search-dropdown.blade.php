<div>
    <div class="relative" style="">
        <input wire:model.live.debounce.500ms="search" type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1 pl-8 focus:outline-none 
            focus:shadow" placeholder="Search.."  >
    </div>
    <div class="absolute bg-gray-800 text-sm w-64 mt-4 rounded">
        <ul>
            @if ($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $result)
                        <li class="border-b border-gray-700">

                            <a
                                href="{{ route('movies.show', $result['id']) }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center transition ease-in-out duration-150"
                                @if ($loop->last) @keydown.tab="isOpen = false" @endif
                            >
                            @if ($result['poster_path'])
                                <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="poster" class="w-8">
                            @else
                                <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                            @endif
                            <span class="ml-4">{{ $result['title'] }}</span>
                        </a>
                        </li>
                    @endforeach

                </ul>
            @endif
        </ul>
    </div>
</div>
