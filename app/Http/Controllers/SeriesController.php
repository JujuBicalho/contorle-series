<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index() {

        $series = Serie::all();

        return view('series.index', compact('series'));
    }

    public function adicionar() {
        return view("series.adicionar");
    }

    public function store(Request $request)
    {
        $serie = Serie::adicionar($request->all());

        echo "Seriado com id ($serie->id} criado: {serie->nome}";
    }

}
