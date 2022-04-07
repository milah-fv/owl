<?php

namespace App\Http\Controllers;

use App\Models\AgenteAduanalExportacion;
use Illuminate\Http\Request;

class AgenteAduanalExportacionController extends Controller
{
    public function getEmpresa(){
        $p = AgenteAduanalExportacion::all();
        return response()->json($p);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agentes_ad_exportacion = AgenteAduanalExportacion::all();
        return view('agente_ad_exportacion.index',[
            'agentes_ad_exportacion' => $agentes_ad_exportacion
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agente_ad_exportacion.create');
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
            'nombre' => 'required|max:100',
            'nit' => 'required|max:20',
            //'nit' => 'unique:agente_ad_exportacion,nit',
            'domicilio' => 'required|max:200',
            'contacto' => 'required|max:200',
            'telefono' => 'required|max:50',
        ],
        [   
            'nombre.required' => 'El nombre es requerido',
            'nombre.max' => 'El maximo de caracteres es 100',
            'nit.required' => 'El NIT es requerido',
            'nit.max' => 'El maximo de caracteres es 20',
            //'nit.unique' => 'Este NIT ya está registrado',
            'domicilio.required' => 'El domicilio es requerido',
            'domicilio.max' => 'El maximo de caracteres es 20',
            'contacto.required' => 'El contacto es requerido',
            'contacto.max' => 'El maximo de caracteres es 20',
            'telefono.required' => 'El telefono es requerido.',
            'telefono.max' => 'El maximo de caracteres es 20',
        ]);

        
        $agente_ad_exportacion = AgenteAduanalExportacion::create([
            'nombre' => $request->nombre,
            'nit' => $request->nit,
            'domicilio' => $request->domicilio,
            'contacto' => $request->contacto,
            'telefono' => $request->telefono,
        ]);
        toast('Agente Aduanal de Exportación registrado correctamente!','success');
        return redirect('/ag_ad_exportacion');
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
        $agente_ad_exportacion = AgenteAduanalExportacion::findOrFail($id);
        return view('agente_ad_exportacion.edit', compact('agente_ad_exportacion'));
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
        $agente_ad_exportacion = AgenteAduanalExportacion::findOrFail($id);
        $this->validate($request, [
            'nombre' => 'required|max:100',
            'nit' => 'required|max:20',
            //'nit' => 'unique:agente_ad_exportacion,nit,'.$agente_ad_exportacion->id,
            'domicilio' => 'required|max:200',
            'contacto' => 'required|max:200',
            'telefono' => 'required|max:50',
        ],
        [   
            'nombre.required' => 'El nombre es requerido',
            'nombre.max' => 'El maximo de caracteres es 100',
            'nit.required' => 'El NIT es requerido',
            'nit.max' => 'El maximo de caracteres es 20',
            //'nit.unique' => 'Este NIT ya está registrado',
            'domicilio.required' => 'El domicilio es requerido',
            'domicilio.max' => 'El maximo de caracteres es 20',
            'contacto.required' => 'El contacto es requerido',
            'contacto.max' => 'El maximo de caracteres es 20',
            'telefono.required' => 'El telefono es requerido.',
            'telefono.max' => 'El maximo de caracteres es 20',
        ]);

        $agente_ad_exportacion->nombre = $request->nombre;
        $agente_ad_exportacion->nit = $request->nit;
        $agente_ad_exportacion->domicilio = $request->domicilio;
        $agente_ad_exportacion->contacto = $request->contacto;
        $agente_ad_exportacion->telefono = $request->telefono;
        $agente_ad_exportacion->save();
        toast('Agente Aduanal de Exportación actualizado correctamente!','success');
        return redirect('/ag_ad_exportacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agente_ad_exportacion = AgenteAduanalExportacion::findOrFail($id);
        AgenteAduanalExportacion::destroy($id);
        return redirect('/ag_ad_exportacion');
    }
}
