<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Exception;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /* 
    * esse request pode ter url, várias coisas e já está sendo importado por padrão aqui no: use Illuminate\Http\Request;
    */
    public function index()
    {
        // ordenando as series em ordem alfabética
        // $series = Serie::query()->orderBy('nome')->get();
        $series = Serie::all();

        return view('series.index')->with('series', $series);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'nome' => 'required',
            'episodios' => 'integer',
            'classificacao_indicativa' => 'integer'
        ]);

        Serie::create([
            'nome' => $request->nome,
            'episodios' => $request->episodios,
            'classificacao_indicativa' => $request->clasificacao_indicativa
        ]);

        // ! outra forma de fazer o código acima
        // $nomeSerie = $request->input('nome');
        // $serie = new Serie();
        // $serie->nome = $nomeSerie;
        // $serie->save();
        return redirect()->route('series.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
