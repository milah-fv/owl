<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use App\Http\Requests\EmpleadoRequest;
use Image;
Use Alert;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$datos['empleados'] = Empleado::paginate(500);
        //return view('empleado.index', $datos);
        $empleados = Empleado::all();
        return view('empleado.index',[
            'empleados' => $empleados
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpleadoRequest $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:150|unique:empleados,email',
        ],
        [
            'email.required' => 'El email es requerido.',
            'email.max' => 'El maximo de caracteres es 150',
            'email.unique' => 'Este email ya esta registrado',

        ]);

        $fileNameCover = null;
        if($request->hasFile('img')){
            $cover =$request->file('img');
            $fileNameCover = $cover->hashName();
            Image::make($cover)->resize(500,500)->save('img/empleados/' .$fileNameCover);
        }
        $datosEmpleado = Empleado::create([
            'img' => $fileNameCover,
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'direccion' => $request->direccion,
            'email' => $request->email,
            'celular' => $request->celular,
            //'actived' => 1,
            //'password' => bcrypt($request->password),

        ]);
        //Empleado::insert($datosEmpleado);
        //return response()->json($datosEmpleado);
        toast('Empleado registrado correctamente!','success');
        //Alert::success('Empleado creado correctamente');
        return redirect('/empleados');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);

        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(EmpleadoRequest $request, $id)
    {
        $empleado = Empleado::findOrFail($id);
        
        $this->validate($request, [
            'email' => 'required|email|max:150|unique:empleados,email,'.$empleado->id,
        ],
        [
            'email.required' => 'El email es requerido.',
            'email.max' => 'El maximo de caracteres es 150',
            'email.unique' => 'Este email ya esta registrado',

        ]);

        //$empleado = Empleado::findOrFail($id);
        if($request->hasFile('img')){
            $cover =$request->file('img');
            $fileNameCover = $cover->hashName();
            Image::make($cover)->resize(500,500)->save('img/empleados/' .$fileNameCover);
            if($empleado->img != 'img/empleados/user.png')
            {
                \File::delete($empleado->img);            
            }
            $empleado->img = $fileNameCover;
        }
        $empleado->nombre = $request->nombre;
        $empleado->apellidos = $request->apellidos;
        $empleado->direccion = $request->direccion;
        $empleado->email = $request->email;
        $empleado->celular = $request->celular;
        /*
        if($request->password != null)   
        {
            $user->password = bcrypt($request->password);            
        }*/
        $empleado->save();
        // $user->roles()->sync($request->roles);
        toast('Empleado actualizado correctamente!','success');
        //Alert::success('Empleado actualizado correctamente');
        return redirect("/empleados");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$empleado = Empleado::findOrFail($id);
        if(Storage::delete('public/'.$empleado->img)){
            Empleado::destroy($id);
        } */
        $empleado = Empleado::findOrFail($id);
        if ($empleado->img != null) 
            {
                Empleado::destroy($id);
            }

        Empleado::destroy($id);
        return redirect('empleados');
    }
}
