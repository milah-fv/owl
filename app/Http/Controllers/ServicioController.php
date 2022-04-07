<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;
use App\Models\Servicio;
use App\Models\Serie;
use App\Models\Recoleccion;
use App\Models\EntregaInicio;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('servicio.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $series = Serie::all();
        return view('servicio.create', [
            'series' => $series,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //echo($request->fecha_servicio);
        $servicio = Servicio::create([
            'fecha' => $request->fecha_servicio,
            'serie_id' => $request->series,
            'exportador_id' => $request->id_exportador,
            'agente_exportacion_id' => $request->id_ag_ad_exportacion,
        ]);
        $meServicio = Servicio::find($servicio->id);

        $recoleccion = new Recoleccion;
        $recoleccion->fecha = $request->fecha_recoleccion;
        $recoleccion->hora = $request->hora_recoleccion;
        $recoleccion->tipo_transporte = $request->tipo_transporte_recoleccion;
        $recoleccion->emp_recolectora_id = $request->id_emp_recolectora;
        //$recoleccion->direccion = $request->dirección_recoleccion;
        $meServicio->recolecciones()->save($recoleccion);

        $entregaInicio = new EntregaInicio;
        $entregaInicio->fecha = $request->fecha_entrega_inicio;
        $entregaInicio->hora = $request->hora_entrega_inicio;
        $entregaInicio->tipo_transporte = $request->tipo_transporte_entrega;
        $entregaInicio->lugar_carga = $request->lugar_carga_entrega;
        $entregaInicio->emp_carga_id = $request->id_emp_carga;
        $meServicio->cargas()->save($entregaInicio);






        toast('Servicio registrado correctamente!','success');
        return redirect('/servicios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {
        //
    }
}
