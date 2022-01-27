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
        
        // Saving the data 

        $animal = Animals::create([
            'name' => $request->name,
            'type' => $request->type,
            'img_src' => '#',
            'link' => '#'
        ]);

        // Saving the image 
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
            $animal->img_src = '/storage/Images/'.$name;
            $animal->save();
            
        }
        // redirect to animals page 
        return redirect(route('animals'));
            
    }

    public function viewAnimal($id){
        $animal = Animals::find($id);
        return view('animal.show')->with('animal',$animal);
    }
    
}






