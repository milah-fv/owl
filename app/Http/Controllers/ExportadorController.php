<?php

namespace App\Http\Controllers;

use App\Models\Exportador;
use Illuminate\Http\Request;
Use Alert;

class ExportadorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getEmpresa(){
        $p = Exportador::all();
        return response()->json($p);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exportadores = Exportador::all();
        return view('exportador.index',[
            'exportadores' => $exportadores
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exportador.create');
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
            'rfc' => 'required|max:20',
            //'rfc' => 'unique:exportadores,rfc',
            'domicilio' => 'required|max:200',
            'contacto' => 'required|max:200',
            'telefono' => 'required|max:50',
        ],
        [   
            'nombre.required' => 'El nombre es requerido',
            'nombre.max' => 'El maximo de caracteres es 100',
            'rfc.required' => 'El RFC es requerido',
            'rfc.max' => 'El maximo de caracteres es 20',
            //'rfc.unique' => 'Este RFC ya está registrado',
            'domicilio.required' => 'El domicilio es requerido',
            'domicilio.max' => 'El maximo de caracteres es 20',
            'contacto.required' => 'El contacto es requerido',
            'contacto.max' => 'El maximo de caracteres es 20',
            'telefono.required' => 'El telefono es requerido.',
            'telefono.max' => 'El maximo de caracteres es 20',
        ]);

        
        $exportador = Exportador::create([
            'nombre' => $request->nombre,
            'rfc' => $request->rfc,
            'domicilio' => $request->domicilio,
            'contacto' => $request->contacto,
            'telefono' => $request->telefono,
        ]);
        toast('Exportador registrado correctamente!','success');
        return redirect('/exportador');
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
        $exportador = Exportador::findOrFail($id);
        return view('exportador.edit', compact('exportador'));
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
        $exportador = Exportador::findOrFail($id);
        $this->validate($request, [
            'nombre' => 'required|max:100',
            'rfc' => 'required|max:20',
            //'rfc' => 'unique:exportadores,rfc,'.$exportador->id,
            'domicilio' => 'required|max:200',
            'contacto' => 'required|max:200',
            'telefono' => 'required|max:50',
        ],
        [   
            'nombre.required' => 'El nombre es requerido',
            'nombre.max' => 'El maximo de caracteres es 100',
            'rfc.required' => 'El RFC es requerido',
            'rfc.max' => 'El maximo de caracteres es 20',
            //'rfc.unique' => 'Este RFC ya está registrado',
            'domicilio.required' => 'El domicilio es requerido',
            'domicilio.max' => 'El maximo de caracteres es 20',
            'contacto.required' => 'El contacto es requerido',
            'contacto.max' => 'El maximo de caracteres es 20',
            'telefono.required' => 'El telefono es requerido.',
            'telefono.max' => 'El maximo de caracteres es 20',
        ]);

        $exportador->nombre = $request->nombre;
        $exportador->rfc = $request->rfc;
        $exportador->domicilio = $request->domicilio;
        $exportador->contacto = $request->contacto;
        $exportador->telefono = $request->telefono;
        $exportador->save();
        toast('Exportador actualizado correctamente!','success');
        return redirect('/exportador');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exportador = Exportador::findOrFail($id);
        Exportador::destroy($id);
        return redirect('/exportador');
    }
}
