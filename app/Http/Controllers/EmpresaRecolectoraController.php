<?php

namespace App\Http\Controllers;

use App\Models\EmpresaRecolectora;
use Illuminate\Http\Request;

class EmpresaRecolectoraController extends Controller
{
    public function getEmpresa(){
        $p = EmpresaRecolectora::all();
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
     * @param  \App\Models\EmpresaRecolectora  $empresaRecolectora
     * @return \Illuminate\Http\Response
     */
    public function show(EmpresaRecolectora $empresaRecolectora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmpresaRecolectora  $empresaRecolectora
     * @return \Illuminate\Http\Response
     */
    public function edit(EmpresaRecolectora $empresaRecolectora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmpresaRecolectora  $empresaRecolectora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmpresaRecolectora $empresaRecolectora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmpresaRecolectora  $empresaRecolectora
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmpresaRecolectora $empresaRecolectora)
    {
        //
    }


}
