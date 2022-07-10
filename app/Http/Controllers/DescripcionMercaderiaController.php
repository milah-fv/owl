<?php

namespace App\Http\Controllers;

use App\Models\DescripcionMercaderia;
use Illuminate\Http\Request;

class DescripcionMercaderiaController extends Controller
{
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DescripcionMercaderia  $descripcionMercaderia
     * @return \Illuminate\Http\Response
     */
    public function show(DescripcionMercaderia $descripcionMercaderia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DescripcionMercaderia  $descripcionMercaderia
     * @return \Illuminate\Http\Response
     */
    public function edit(DescripcionMercaderia $descripcionMercaderia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DescripcionMercaderia  $descripcionMercaderia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DescripcionMercaderia $descripcionMercaderia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DescripcionMercaderia  $descripcionMercaderia
     * @return \Illuminate\Http\Response
     */
    public function destroy(DescripcionMercaderia $descripcionMercaderia)
    {
        //
    }
}
