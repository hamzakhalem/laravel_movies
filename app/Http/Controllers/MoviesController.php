<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    //
    public function index(){
        $popularmovies = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/popular')->json()['results'];
        
        $genres = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];
        $genres = collect($genres)->mapWithKeys(function($genre){
            return [$genre['id'] => $genre['name']];
        });
        return view('index', [
            'popularmovies' => $popularmovies,
            'genres' => $genres,
        ]);
    }
}
