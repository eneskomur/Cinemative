<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\CinemaFilmController;
use App\Http\Controllers\CinemaTicketController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function () {
    Route::resource('cities', CityController::class);
    Route::resource('cinemas', CinemaController::class);
    Route::resource('cinema_films', CinemaFilmController::class);
    Route::resource('cinema_tickets', CinemaTicketController::class);
});
