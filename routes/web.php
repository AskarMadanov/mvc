<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/fav', function(){
    return view('hello');
});

Route::get('/cat', function(){
    return view('cat');
});

Route::get('/cat/dog', function(){
    return view('dog');
});


// Route::get('/getAnimal','App/Http/Controller/AnimalController@fetchanimal');

Route::get('/animals','AnimalController@showAnimals')->name('animals');

// localhost/animals/add
Route::get('/animals/add','AnimalController@addAnimals')->name('animal.add');
Route::post('animals/add','AnimalController@saveAnimal')->name('animal.add');
Route::get('/animals/{id}','AnimalController@viewAnimal')->name('viewAnimal');
// localhost/animal/{id}
//id==add


Route::get('/natures','NatureController@showNature')->name('nature');
Route::get('/natures/add','NatureController@showAdd')->name('nature.add');
Route::post('/natures/add', 'NatureController@saveNature')->name('nature.add');





# list all the movies 
Route::get('/movies','MovieController@showMovies')->name('movie');
# Add movies 
Route::get('/movie/add','MovieController@addMovie')->name('movie.add');
Route::post('/movie/add','MovieController@saveMovie')->name('movie.add');
# show a movie
Route::get('/movies/${id}','MovieController@saveMovie');
#Delete a movies 
Route::delete('/movies/${id}','MovieController@saveMovie');


