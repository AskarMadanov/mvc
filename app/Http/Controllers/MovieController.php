<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\User;
use App\Movie;

class MovieController extends Controller 
    
{
    public function showMovies(){
        $movies = Movie::all();
        return view('movie')->with('movies',$movies);
    }
}

