# Laravel Movies

A movie, TV show and actor browser built with Laravel and Livewire. All the data comes live from [The Movie Database (TMDB) API](https://developer.themoviedb.org/).

## Features

- **Movies:** popular and now-playing movies with genres, rating and release date
- **Movie page:** overview, crew, cast, images and trailer
- **TV shows:** popular and top-rated shows, and a page for each show
- **Actors:** popular actors with infinite scroll, and a page for each actor with their known-for credits
- **Live search:** a Livewire search dropdown that finds movies as you type
- View models (`spatie/laravel-view-models`) keep the formatting out of the controllers and Blade views
- Tailwind CSS layout

## Built with

- PHP 8.1, Laravel 10
- Livewire 3
- spatie/laravel-view-models
- Tailwind CSS, Vite
- TMDB API

## Run it locally

You need PHP 8.1+, Composer, Node.js and a free TMDB API read access token.

```bash
git clone https://github.com/hamzakhalem/laravel_movies.git
cd laravel_movies
composer install
npm install
npm run build
cp .env.example .env
php artisan key:generate
```

Add your TMDB token to `.env`:

```
TMDB_TOKEN=your-tmdb-read-access-token
```

Then start the server:

```bash
php artisan serve
```

Open http://127.0.0.1:8000.

## Project structure

```
app/Http/Controllers/   Movies, TV and actors controllers (TMDB calls)
app/ViewModels/         Data formatting for each page
app/Livewire/           Search dropdown
resources/views/        Blade views for movies, tv, actors
```
