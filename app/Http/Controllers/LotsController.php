<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lot;

class LotsController extends Controller
{

    public function index(){
        return view('home');
    }
    
    public function offers(){
        $lots = Lot::all();
        return view('realestate.index')->with('lots', $lots);
    }

    public function show($id)
    {
        $lot = Lot::find($id);
        return view('lots.show')->with('lot', $lot);
    }

    public function main(){
        $test = [
            'rrr' => 'RRR',
            'eee' => 'EEE',
            'ttt' => 'TTT'
        ];
        return view('realestate.main')->with('test', $test);
    }

    public function create(){
        return view('lots.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'address' => 'required',
            'price' => 'required',
            //'cover_image' => 'image|nullable|max:1999'
        ]);

        //Handle file upload
        /*if($request->hasFile('cover_image')){
            //Get File Name With Extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }*/


        //Create Lot
        $lot = new Lot;
        $lot->name = $request->input('title');
        $lot->description = $request->input('body');
        $lot->address = $request->input('address');
        $lot->price = $request->input('price');
        $lot->user_id = auth()->user()->id;
        //$lot->cover_image = $fileNameToStore;
        $lot->save();
        return redirect('/offers')->with('success', 'Lot Created');
    }
}
