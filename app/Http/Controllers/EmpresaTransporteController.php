<?php

namespace App\Http\Controllers;

use App\Models\EmpresaTransporte;
use Illuminate\Http\Request;
Use Alert;

class EmpresaTransporteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
        $empresas = EmpresaTransporte::all();
        return view('empresa.index',[
            'empresas' => $empresas
        ]);
    }

    public function datatableEmpresas()
    {
        $model = EmpresaTransporte::all();
        $data = datatables()->of($model)
        ->addColumn('btn', 'empresa.botones')
        ->rawColumns(['btn'])
        ->toJson();
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
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
            'empresa_nombre' => 'required|max:100',
            'empresa_domicilio' => 'required|max:200',
            'empresa_contacto' => 'required|max:200',
            'empresa_telefono' => 'required|max:100',
        ],
        [   
            'empresa_nombre.required' => 'El nombre es requerido',
            'empresa_nombre.max' => 'El maximo de caracteres es 100',
            'empresa_domicilio.required' => 'El domicilio es requerido',
            'empresa_domicilio.max' => 'El maximo de caracteres es 200',
            'empresa_contacto.required' => 'El contacto es requerido',
            'empresa_contacto.max' => 'El maximo de caracteres es 200',
            'empresa_telefono.required' => 'El telefono es requerido.',
            'empresa_telefono.max' => 'El maximo de caracteres es 100',
        ]);

        
        $empresa = EmpresaTransporte::create([
            'nombre' => $request->empresa_nombre,
            'domicilio' => $request->empresa_domicilio,
            'contacto' => $request->empresa_contacto,
            'telefono' => $request->empresa_telefono,
        ]);
        toast('Empresa registrada correctamente!','success');
        return redirect('/empresa');
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
    public function edit($id)
    {
        $empresa = EmpresaTransporte::findOrFail($id);
        return view('empresa.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmpresaTransporte  $empresaTransporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empresa = EmpresaTransporte::findOrFail($id);
        $this->validate($request, [
            'empresa_nombre' => 'required|max:100',
            'empresa_domicilio' => 'required|max:200',
            'empresa_contacto' => 'required|max:200',
            'empresa_telefono' => 'required|max:100',
        ],
        [   
            'empresa_nombre.required' => 'El nombre es requerido',
            'empresa_nombre.max' => 'El maximo de caracteres es 100',
            'empresa_domicilio.required' => 'El domicilio es requerido',
            'empresa_domicilio.max' => 'El maximo de caracteres es 200',
            'empresa_contacto.required' => 'El contacto es requerido',
            'empresa_contacto.max' => 'El maximo de caracteres es 200',
            'empresa_telefono.required' => 'El telefono es requerido.',
            'empresa_telefono.max' => 'El maximo de caracteres es 100',
        ]);

        $empresa->nombre = $request->empresa_nombre;
        $empresa->domicilio = $request->empresa_domicilio;
        $empresa->contacto = $request->empresa_contacto;
        $empresa->telefono = $request->empresa_telefono;
        $empresa->save();
        toast('Empresa actualizado correctamente!','success');
        return redirect('/empresa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmpresaTransporte  $empresaTransporte
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa = EmpresaTransporte::findOrFail($id);
        EmpresaTransporte::destroy($id);
        return redirect('/empresa');
    }


}
