<?php

namespace App\Http\Controllers;

use App\Models\AgenteAduanalImportacion;
use Illuminate\Http\Request;

class AgenteAduanalImportacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agentes_ad_importacion = AgenteAduanalImportacion::all();
        return view('agente_ad_importacion.index',[
            'agentes_ad_importacion' => $agentes_ad_importacion
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agente_ad_importacion.create');
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
            //'nit' => 'unique:agente_ad_importacion,nit',
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

        
        $agente_ad_importacion = AgenteAduanalImportacion::create([
            'nombre' => $request->nombre,
            'nit' => $request->nit,
            'domicilio' => $request->domicilio,
            'contacto' => $request->contacto,
            'telefono' => $request->telefono,
        ]);
        toast('Agente Aduanal de Importación registrado correctamente!','success');
        return redirect('/ag_ad_importacion');
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
        $agente_ad_importacion = AgenteAduanalImportacion::findOrFail($id);
        return view('agente_ad_importacion.edit', compact('agente_ad_importacion'));
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
        $agente_ad_importacion = AgenteAduanalImportacion::findOrFail($id);
        $this->validate($request, [
            'nombre' => 'required|max:100',
            'nit' => 'required|max:20',
            //'nit' => 'unique:agente_ad_importacion,nit,'.$agente_ad_importacion->id,
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

        $agente_ad_importacion->nombre = $request->nombre;
        $agente_ad_importacion->nit = $request->nit;
        $agente_ad_importacion->domicilio = $request->domicilio;
        $agente_ad_importacion->contacto = $request->contacto;
        $agente_ad_importacion->telefono = $request->telefono;
        $agente_ad_importacion->save();
        toast('Agente Aduanal de Importación actualizado correctamente!','success');
        return redirect('/ag_ad_importacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agente_ad_importacion = AgenteAduanalImportacion::findOrFail($id);
        AgenteAduanalImportacion::destroy($id);
        return redirect('/ag_ad_importacion');
    }
}
