<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cinema;
class CinemaController extends Controller
{
    public function index()
    {
        
        $cinemas = Cinema::all();
 
        return response()->json([
            'success' => true,
            'data' => $cinemas
        ]);
    }

    public function show($city_id = null)
    {
        if(is_null($city_id)) {
            $cinemas = Cinema::all();
        }
        else {
            $cinemas = Cinema::where('city_id', intval($city_id))->get();
        }
 
        return response()->json([
            'success' => true,
            'city_id' => $city_id,
            'data' => $cinemas
        ]);
    }
}
