<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Serie;

class SeriesController extends Controller
{
    public function index(Request $request){
        $series = Serie::all();

        return view('series.index',[
            'series' => $series
            //compact('serie') - Poderia utilizar essa função que retornaria esse mesmo array
        ]);
    }

    public function create(){
        return view('series.create');
    }

    public function store(Request $request){
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        return redirect('/series');
    }
}
