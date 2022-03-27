<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
Use Alert;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Serie::all();
        return view('serie.index',[
            'series' => $series
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('serie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'serie' => 'required|max:5|unique:series,serie',
        ],
        [   
            'serie.required' => 'La serie es requerido',
            'serie.max' => 'El maximo de caracteres es 5',
            'serie.unique' => 'Esta serie ya está registrada',
        ]);
        $serie = Serie::create([
            'serie' => $request->serie,
        ]);
        toast('Serie registrada correctamente!','success');
        return redirect('/serie');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function show(Serie $serie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serie = Serie::findOrFail($id);
        return view('serie.edit', compact('serie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $serie = Serie::findOrFail($id);
        $this->validate($request, [
            'serie' => 'required|max:5|unique:series,serie,'.$serie->id,
        ],
        [   
            'serie.required' => 'La serie es requerido',
            'serie.max' => 'El maximo de caracteres es 5',
            'serie.unique' => 'Esta serie ya está registrada',
        ]);

        $serie->serie = $request->serie;
        $serie->save();
        toast('Serie actualizada correctamente!','success');
        return redirect('/serie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serie = Serie::findOrFail($id);
        Serie::destroy($id);
        return redirect('/serie');
    }
}
