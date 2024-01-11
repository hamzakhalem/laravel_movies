<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\ViewModels\MoviesViewModel;
class MoviesController extends Controller
{
    //
    public function index(){
        $popularmovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular')->json()['results'];
        
        $nowplayingmovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/now_playing')
            ->json()['results']; 

        $genres = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];

        $ourview = new MoviesViewModel($popularmovies, $nowplayingmovies, $genres); 
        return view('index', $ourview);
    }


    public function show($id){
        $movie = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')->json();

        $genres = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];

        $genres = collect($genres)->mapWithKeys(function($genre){
                return [$genre['id'] => $genre['name']];
            });
        return view('show',['movie'=> $movie, 'genres' => $genres]);
    }
}
