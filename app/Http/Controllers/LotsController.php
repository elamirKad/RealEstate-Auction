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
        return view('posts.show')->with('lot', $lot);
    }

    public function main(){
        $test = [
            'rrr' => 'RRR',
            'eee' => 'EEE',
            'ttt' => 'TTT'
        ];
        return view('realestate.main')->with('test', $test);
    }
}
