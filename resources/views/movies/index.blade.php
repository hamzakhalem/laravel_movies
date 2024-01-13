@extends('layouts.main')
@section('content')
<div class="container mx-auto px-8 pt-16">
    <div class="popular-movies">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            Popular movies
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
            @foreach ($popularmovies as $item)
                <x-movie-card :item='$item' :genres='$genres' />
            @endforeach
            
            
            
        </div>
    </div>
    <div class="now-playing-movies mt-20">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            Now Playing Movies
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
            @foreach ($nowplayingmovies as $item)
                <x-movie-card :item='$item' :genres='$genres' />
            @endforeach
            
            
            
        </div>
    </div>
</div>
@endsection