<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CinemaFilm;
class CinemaFilmController extends Controller
{
    public function index()
    {
        $cinema_films = CinemaFilm::leftJoin('cinemas', 'cinema_films.cinema_id', '=', 'cinemas.id')
                                    ->leftJoin('films', 'cinema_films.film_id', '=', 'films.id')
                                    ->select('cinema_films.*','cinemas.title AS cinema_title','films.title AS film_title')
                                    ->get();
        
        return response()->json([
            'success' => true,
            'data' => $cinema_films
        ]);
    }

    public function show($cinema_id = null)
    {
       
        $cinema_films = CinemaFilm::where('cinema_id', intval($cinema_id))
                                    ->leftJoin('cinemas', 'cinema_films.cinema_id', '=', 'cinemas.id')
                                    ->leftJoin('films', 'cinema_films.film_id', '=', 'films.id')
                                    ->select('cinema_films.*','cinemas.title AS cinema_title','films.title AS film_title')
                                    ->get();
        
        return response()->json([
            'success' => true,
            'cinema_id' => $cinema_id,
            'data' => $cinema_films
        ]);
    }
}
