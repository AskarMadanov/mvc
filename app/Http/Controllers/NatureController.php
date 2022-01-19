<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nature;
use Storage;
class NatureController extends Controller

{
    //
    public function showNature(){
        $nature = Nature::all();
        return view('nature')->with('natures',$nature);
    }

    public function showAdd(){
        return view('nature.add');
    }

    public function saveNature(Request $request){
        $nature = Nature::create([
            'name' => $request->name,
            'type' => $request->type,
            'img_src' => '#',
            'link' => '#'
        ]);
        if($request->hasFile('image')){
            $file= $request->file('image');
            $name=str_replace(' ','_',$request->name).'.'.$file->getClientOriginalExtension();
            try {
                Storage::disk('public')->putFileAs('Images/',$file,$name);
            }
            catch (\Exception $e){
                dd($e->getMessage());
            }
            $nature->img_src = 'storage/Images/'.$name;
            $nature->save();
            
        }
        return redirect(route('nature'));

    }
}


