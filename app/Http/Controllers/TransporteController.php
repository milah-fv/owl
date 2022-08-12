<?php

namespace App\Http\Controllers;

use App\Models\Transporte;
use Illuminate\Http\Request;
Use Alert;

class TransporteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getTransporte(){
        $p = Transporte::all();
        return response()->json($p);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transportes = Transporte::all();
        return view('transporte.index',[
            'transportes' => $transportes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transporte.create');
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
            'transporte_operador' => 'required|max:200',
            'transporte_placas_tracto' => 'required|max:20',
            'transporte_licencia' => 'required|max:20',
            'transporte_caat' => 'required|max:10',
            'transporte_nro_eco' => 'required|max:20',
            'transporte_capacidad' => 'required|max:30',
            'transporte_placa_cajas' => 'required|max:20',
            'transporte_transporte_afianzador' => 'required|max:100',
            'transporte_codigo_aduanero' => 'required|max:20',
        ],
        [   
            'transporte_operador.required' => 'El operador es requerido',
            'transporte_operador.max' => 'El maximo de caracteres es 200',
            'transporte_placas_tracto.required' => 'Las placas tracto son requeridas',
            'transporte_placas_tracto.max' => 'El maximo de caracteres es 20',
            'transporte_licencia.required' => 'La licencia es requerida',
            'transporte_licencia.max' => 'El maximo de caracteres es 20',
            'transporte_caat.required' => 'El CAAT es requerido.',
            'transporte_caat.max' => 'El maximo de caracteres es 10',
            'transporte_nro_eco.required' => 'N° ECO es requerido.',
            'transporte_nro_eco.max' => 'El maximo de caracteres es 20',
            'transporte_capacidad.required' => 'La capacidad es requerida.',
            'transporte_capacidad.max' => 'El maximo de caracteres es 30',
            'transporte_placa_cajas.required' => 'La placa cajas es requerida.',
            'transporte_placa_cajas.max' => 'El maximo de caracteres es 20',
            'transporte_transporte_afianzador.required' => 'El transporte afianzador es requerido.',
            'transporte_transporte_afianzador.max' => 'El maximo de caracteres es 100',
            'transporte_codigo_aduanero.required' => 'El codigo aduanero es requerido.',
            'transporte_codigo_aduanero.max' => 'El maximo de caracteres es 20',
        ]);

        
        $empresa = Transporte::create([
            'operador' => $request->transporte_operador,
            'placas_tracto' => $request->transporte_placas_tracto,
            'licencia' => $request->transporte_licencia,
            'caat' => $request->transporte_caat,
            'nro_eco' => $request->transporte_nro_eco,
            'capacidad' => $request->transporte_capacidad,
            'placa_cajas' => $request->transporte_placa_cajas,
            'transporte_afianzador' => $request->transporte_transporte_afianzador,
            'codigo_aduanero' => $request->transporte_codigo_aduanero,
        ]);
        toast('Transporte registrado correctamente!','success');
        return redirect('/transporte');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transporte = Transporte::findOrFail($id);
        return view('transporte.edit', compact('transporte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transporte = Transporte::findOrFail($id);
        $this->validate($request, [
            'transporte_operador' => 'required|max:200',
            'transporte_placas_tracto' => 'required|max:20',
            'transporte_licencia' => 'required|max:20',
            'transporte_caat' => 'required|max:10',
            'transporte_nro_eco' => 'required|max:20',
            'transporte_capacidad' => 'required|max:30',
            'transporte_placa_cajas' => 'required|max:20',
            'transporte_transporte_afianzador' => 'required|max:100',
            'transporte_codigo_aduanero' => 'required|max:20',
        ],
        [   
            'transporte_operador.required' => 'El operador es requerido',
            'transporte_operador.max' => 'El maximo de caracteres es 200',
            'transporte_placas_tracto.required' => 'Las placas tracto son requeridas',
            'transporte_placas_tracto.max' => 'El maximo de caracteres es 20',
            'transporte_licencia.required' => 'La licencia es requerida',
            'transporte_licencia.max' => 'El maximo de caracteres es 20',
            'transporte_caat.required' => 'El CAAT es requerido.',
            'transporte_caat.max' => 'El maximo de caracteres es 10',
            'transporte_nro_eco.required' => 'N° ECO es requerido.',
            'transporte_nro_eco.max' => 'El maximo de caracteres es 20',
            'transporte_capacidad.required' => 'La capacidad es requerida.',
            'transporte_capacidad.max' => 'El maximo de caracteres es 30',
            'transporte_placa_cajas.required' => 'La placa cajas es requerida.',
            'transporte_placa_cajas.max' => 'El maximo de caracteres es 20',
            'transporte_transporte_afianzador.required' => 'El transporte afianzador es requerido.',
            'transporte_transporte_afianzador.max' => 'El maximo de caracteres es 100',
            'transporte_codigo_aduanero.required' => 'El codigo aduanero es requerido.',
            'transporte_codigo_aduanero.max' => 'El maximo de caracteres es 20',
        ]);

        $transporte->operador = $request->transporte_operador;
        $transporte->placas_tracto = $request->transporte_placas_tracto;
        $transporte->licencia = $request->transporte_licencia;
        $transporte->caat = $request->transporte_caat;
        $transporte->nro_eco = $request->transporte_nro_eco;
        $transporte->capacidad = $request->transporte_capacidad;
        $transporte->placa_cajas = $request->transporte_placa_cajas;
        $transporte->transporte_afianzador = $request->transporte_transporte_afianzador;
        $transporte->codigo_aduanero = $request->transporte_codigo_aduanero;
        $transporte->save();
        toast('Transporte actualizado correctamente!','success');
        return redirect('/transporte');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transporte = Transporte::findOrFail($id);
        Transporte::destroy($id);
        return redirect('/transporte');
    }
}
