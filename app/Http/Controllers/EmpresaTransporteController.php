<?php

namespace App\Http\Controllers;

use App\Models\EmpresaTransporte;
use Illuminate\Http\Request;

class EmpresaTransporteController extends Controller
{
    public function getEmpresa(){
        $p = EmpresaTransporte::all();
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
    public function show(EmpresaTransporte $empresaTransporte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmpresaTransporte  $empresaRecolectora
     * @return \Illuminate\Http\Response
     */
    public function edit(EmpresaTransporte $empresaTransporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmpresaTransporte  $empresaTransporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmpresaTransporte $empresaTransporte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmpresaTransporte  $empresaTransporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmpresaTransporte $empresaTransporte)
    {
        //
    }


}
