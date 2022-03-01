<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CinemaFilm;
use App\Models\CinemaTicket;
class CinemaTicketController extends Controller
{
    public function index()
    {
        $cinema_tickets = CinemaTicket::leftJoin('cinema_films', 'cinema_tickets.cinema_film_id', '=', 'cinema_films.id')
                                    ->leftJoin('cinemas', 'cinema_films.cinema_id', '=', 'cinemas.id')
                                    ->leftJoin('films', 'cinema_films.film_id', '=', 'films.id')
                                    ->select('cinemas.title AS cinema_title','films.title AS film_title','cinema_tickets.seat_number','cinema_films.show_time')
                                    ->where('user_id', auth()->user()->id)
                                    ->get();
        
        return response()->json([
            'success' => true,
            'data' => $cinema_tickets
        ]);
    }

    public function show($cinema_film_id)
    {
        $base_tickets = range(1, 50);
        $sold_tickets = CinemaTicket::select('seat_number')
                                    ->where('cinema_film_id', $cinema_film_id)
                                    ->pluck('seat_number')->toArray();
        $unsold_tickets = array_values(array_diff($base_tickets,$sold_tickets));
        
        return response()->json([
            'success' => true,
            'data' => $unsold_tickets

        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'cinema_film_id' => 'required',
            'seat_number' => 'required'
        ]);

        $cinema_film = CinemaFilm::where('id', $request->cinema_film_id)
                                    ->first();

        if(!isset($cinema_film->id)){
            return response()->json([
                'success' => false,
                'msg' => 'cinema_film_id is invalid'
            ]);
        }

        if(!is_int($request->seat_number) || $request->seat_number > 50 || $request->seat_number < 1){
            return response()->json([
                'success' => false,
                'msg' => 'Seat number must be between 1 an 50'
            ]);
        }

        $requested_ticket = CinemaTicket::where('cinema_film_id', $request->cinema_film_id)
                                        ->where('seat_number', $request->seat_number)
                                        ->first();
        
        if(isset($requested_ticket->id)){
            return response()->json([
                'success' => false,
                'msg' => 'This seat already sold before'
            ]);
        }

        $ticket = new CinemaTicket;
        $ticket->user_id = auth()->user()->id;
        $ticket->cinema_film_id = $request->cinema_film_id;
        $ticket->seat_number = $request->seat_number;
        $ticket->save();
 
        return response()->json([
            'success' => true,
            'msg' => 'Purchase completed successfully',
            'data' => $ticket
        ]);
    }
}
