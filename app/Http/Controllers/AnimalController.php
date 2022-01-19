<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
// use App\User;
use App\Animals;

Class AnimalController extends Controller {

    public function showAnimals(){
        $animals = Animals::all();
        
        return view('animals')->with('animals',$animals);
    }

    public function addAnimals(){
        $animals = Animals::all();
        return view('animal.add')->with('animals',$animals);
    }

    public function saveAnimal(Request $request){
        // dd($request->all());
        // dd($request->file('image_src'))->isValid();
        $animal = Animals::create([
            'name' => $request->name,
            'type' => $request->type,
            'img_src' => '#',
            'link' => '#'
        ]);
        // dd($request->file('image_src')->isValid());
        if($request->hasFile('image_src')){
            $file= $request->file('image_src');
            $name=str_replace(' ','_',$request->name).'.'.$file->getClientOriginalExtension();
            try {
                Storage::disk('public')->putFileAs('Images/',$file,$name);
            }
            catch (\Exception $e){
                dd($e->getMessage());
            }
            $animal->img_src = 'Images/'.$name;
            $animal->save();
            
        }
       
        return redirect(route('animals'));
            
    }
    
}






