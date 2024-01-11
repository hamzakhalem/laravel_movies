<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class MoviesViewModel extends ViewModel
{   
    public $popularmovies;
    public $nowplayingmovies;
    public $genres;
    public function __construct($popularmovies, $nowplayingmovies, $genres)
    {
        //
        $this->popularmovies = $popularmovies;   
        $this->nowplayingmovies = $nowplayingmovies;   
        $this->genres = $genres;   
    }


    public function popularmovies(){
        return $this->formatMovies($this->popularmovies);
    }

    public function nowplayingmovies(){
        return $this->formatMovies($this->nowplayingmovies);
    }
    

    public function formatMovies($movies){
        return collect($movies)->map(function($movie){
            return collect($movie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] ,
                'vote_average' => $movie['vote_average'] * 10 . '%',
                'release_date' => \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')
            ]);
        });
    }

    public function genres(){
        return collect($this->genres)->mapWithKeys(function($genre){
            return [$genre['id'] => $genre['name']];
        });   
    }

}
