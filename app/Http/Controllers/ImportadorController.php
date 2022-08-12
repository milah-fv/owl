<?php

namespace App\Http\Controllers;

use App\Models\Importador;
use Illuminate\Http\Request;

class ImportadorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getEmpresa(){
        $p = Importador::all();
        return response()->json($p);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $importadores = Importador::all();
        return view('importador.index',[
            'importadores' => $importadores
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('importador.create');
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
            //'nit' => 'unique:importadores,nit',
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

        
        $importador = Importador::create([
            'nombre' => $request->nombre,
            'nit' => $request->nit,
            'domicilio' => $request->domicilio,
            'contacto' => $request->contacto,
            'telefono' => $request->telefono,
        ]);
        toast('Importador registrado correctamente!','success');
        return redirect('/importador');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Importador  $importador
     * @return \Illuminate\Http\Response
     */
    public function show(Importador $importador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Importador  $importador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $importador = Importador::findOrFail($id);
        return view('importador.edit', compact('importador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Importador  $importador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $importador = Importador::findOrFail($id);
        $this->validate($request, [
            'nombre' => 'required|max:100',
            'nit' => 'required|max:20',
            //'nit' => 'unique:importadores,nit,'.$importador->id,
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

        $importador->nombre = $request->nombre;
        $importador->nit = $request->nit;
        $importador->domicilio = $request->domicilio;
        $importador->contacto = $request->contacto;
        $importador->telefono = $request->telefono;
        $importador->save();
        toast('Importador actualizado correctamente!','success');
        return redirect('/importador');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Importador  $importador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $importador = Importador::findOrFail($id);
        Importador::destroy($id);
        return redirect('/importador');
    }
}
