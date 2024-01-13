<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\ViewModels\ActorsViewModel;

class ActorsController extends Controller
{
    //
    public function index($page = 1){
        $popularActors = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/person/popular?page='.$page)
            ->json()['results'];
        $viewModel = new ActorsViewModel($popularActors, $page);
        return view("actors.index", $viewModel);
    }
}
