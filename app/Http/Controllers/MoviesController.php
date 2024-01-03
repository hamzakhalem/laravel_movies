<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    //
    public function index(){
        $popularmovies = Http::get('https://api.themoviedb.org/3/movie/popular')->json();
        dd($popularmovies);
        return view('index');
    }
}
