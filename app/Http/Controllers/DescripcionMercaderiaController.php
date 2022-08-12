<?php

namespace App\Http\Controllers;

use App\Models\DescripcionMercaderia;
use Illuminate\Http\Request;

class DescripcionMercaderiaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getDescripcionMercaderia(){
        $p = DescripcionMercaderia::all();
        return response()->json($p);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descripcion_mercaderia = DescripcionMercaderia::all();
        return view('descripcion_mercaderia.index',[
            'descripcion_mercaderia' => $descripcion_mercaderia
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('descripcion_mercaderia.create');
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
            'descmerc_descripcion_mercaderia' => 'required|max:250',
            'descmerc_fraccion_arancelaria' => 'required|max:20',
        ],
        [   
            'descmerc_descripcion_mercaderia.required' => 'La descripcion es requerida',
            'descmerc_descripcion_mercaderia.max' => 'El maximo de caracteres es 250',
            'descmerc_fraccion_arancelaria.required' => 'La fracción arancelaria es requerida',
            'descmerc_fraccion_arancelaria.max' => 'El maximo de caracteres es 20',
        ]);

        
        $descripcion_mercaderia = DescripcionMercaderia::create([
            'descripcion_mercaderia' => $request->descmerc_descripcion_mercaderia,
            'fraccion_arancelaria' => $request->descmerc_fraccion_arancelaria,
        ]);
        toast('Mercadería registrada correctamente!','success');
        return redirect('/descmercaderia');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DescripcionMercaderia  $descripcionMercaderia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DescripcionMercaderia  $descripcionMercaderia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $descripcion_mercaderia = DescripcionMercaderia::findOrFail($id);
        return view('descripcion_mercaderia.edit', compact('descripcion_mercaderia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DescripcionMercaderia  $DescripcionMercaderiaController                  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $descripcion_mercaderia = DescripcionMercaderia::findOrFail($id);
        $this->validate($request, [
            'descmerc_descripcion_mercaderia' => 'required|max:250',
            'descmerc_fraccion_arancelaria' => 'required|max:20',
        ],
        [   
            'descmerc_descripcion_mercaderia.required' => 'La descripcion es requerida',
            'descmerc_descripcion_mercaderia.max' => 'El maximo de caracteres es 250',
            'descmerc_fraccion_arancelaria.required' => 'La fracción arancelaria es requerida',
            'descmerc_fraccion_arancelaria.max' => 'El maximo de caracteres es 20',
        ]);

        $descripcion_mercaderia->descripcion_mercaderia = $request->descmerc_descripcion_mercaderia;
        $descripcion_mercaderia->fraccion_arancelaria = $request->descmerc_fraccion_arancelaria;
        $descripcion_mercaderia->save();
        toast('Mercadería actualizada correctamente!','success');
        return redirect('/descmercaderia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DescripcionMercaderia  $descripcionMercaderia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $descripcion_mercaderia = DescripcionMercaderia::findOrFail($id);
        DescripcionMercaderia::destroy($id);
        return redirect('/descmercaderia');
    }
}
