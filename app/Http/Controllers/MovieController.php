<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\User;
use App\Movie;
use Storage;

class MovieController extends Controller 
    
{
    public function showMovies(){
        $movies = Movie::all();
        return view('movie')->with('movies',$movies);
    }

    public function addMovie(){
        return view('movie.add');
    }
    
    public function saveMovie(Request $request){
        //save data 
        //return redirect /movie
        $movie = Movie::create([
            'name' => $request->name,
            'description' => $request->type,
            'img_src' => '#',
            'link' => '#'
        ]);
        
        if($request->hasFile('image_src')){
            $file= $request->file('image_src');
            $name=str_replace(' ','_',$request->name).'.'.$file->getClientOriginalExtension();
            try {
                Storage::disk('public')->putFileAs('Images/',$file,$name);
            }
            catch (\Exception $e){
                dd($e->getMessage());
            }
            $movie->img_src = 'storage/Images/'.$name;
            $movie->save();
        }
        return redirect(route('movie')); 
        
    }
}