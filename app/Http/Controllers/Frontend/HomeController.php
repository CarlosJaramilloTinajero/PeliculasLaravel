<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\categoria;
use App\Models\pelicula;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class HomeController extends Controller
{
    public function index()
    {
        $categorias = categoria::with('peliculas')->take(7)->get();
        $peliculas = pelicula::with('category')->get();
        $relatedMovies = self::getMoviesByCategories(self::getCategories($categorias));
        $opacityBoxShadows = '.6';

        return view('frontend.home', ['opacityBoxShadows' => $opacityBoxShadows, 'categorias' => $categorias, 'peliculas' => $peliculas, 'relatedMovies' => $relatedMovies]);
    }

    public static function getMoviesByCategories(array|Collection $categories, $maxMovies = 14): array|null
    {
        $byCategory = intval(ceil($maxMovies / count($categories)));
        $movies = [];

        foreach ($categories as $value) {
            $aux = $movies;
            $movies = $value->peliculas->take($byCategory)->map(function ($movie) use ($value) {
                $movie->categoryColor = $value->Color;
                return $movie;
            })->toArray();

            foreach ($aux as $item) {
                array_push($movies, $item);
            }
        }
        return $movies;
    }

    public static function getCategories(Collection $allCategories, $maxCategories = 7): array|null
    {
        $categories = [];
        if (auth()->check()) {
            $user = User::with('movies')->find(auth()->id());
            if (count($user->movies) > 0) {
                foreach ($user->movies as $list) {
                    if (count($categories) < $maxCategories) {
                        $category = $list->movie->category;
                        $categories[$category->id] = $category;
                    } else {
                        break;
                    }
                }
            }
        }

        if (count($categories) <= 1) {
            foreach ($allCategories as $category) {
                if (count($categories) < $maxCategories) {
                    $categories[$category->id] = $category;
                } else {
                    break;
                }
            }
        }

        return $categories;
    }
}
