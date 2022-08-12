<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use App\Http\Requests\EmpleadoRequest;
use Image;
Use Alert;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EmpleadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$datos['empleados'] = Empleado::paginate(500);
        //return view('empleado.index', $datos);
        $empleados = User::all();
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
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:150|unique:users,email',
            'name' => 'required|max:150',
            'password' => 'required',
            'apellidos' => 'required|max:150',
            'celular' => 'required|max:50',
            'direccion' => 'max:250',
        ],
        [
            'email.required' => 'El email es requerido.',
            'email.max' => 'El maximo de caracteres es 150',
            'email.unique' => 'Este email ya esta registrado',
            'name.required' => 'El nombre es requerido.',
            'name.max' => 'El maximo de caracteres es 150',
            'password.required' => 'La contraseña es requerida.',
            'apellidos.required' => 'Los apellidos son requeridos.',
            'apellidos.max' => 'El maximo de caracteres es 150',
            'celular.required' => 'El nro de telefono es requerido.',
            'celular.max' => 'El maximo de caracteres es 50',
            'direccion.max' => 'El maximo de caracteres es 250',
        ]);

        $fileNameCover = null;
        if($request->hasFile('img')){
            $cover =$request->file('img');
            $fileNameCover = $cover->hashName();
            Image::make($cover)->resize(500,500)->save('img/empleados/' .$fileNameCover);
        }
        $datosEmpleado = User::create([
            'img' => $fileNameCover,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),  
            'apellidos' => $request->apellidos,
            'celular' => $request->celular,
            'cargo' => $request->cargo,
            'direccion' => $request->direccion,
            
             
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
        $empleado = User::findOrFail($id);

        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empleado = User::findOrFail($id);
        
        $this->validate($request, [
            'email' => 'required|email|max:150|unique:users,email,'.$empleado->id,
            'name' => 'required|max:150',
            
            'apellidos' => 'required|max:150',
            'celular' => 'required|max:50',
            'direccion' => 'max:250',
        ],
        [
            'email.required' => 'El email es requerido.',
            'email.max' => 'El maximo de caracteres es 150',
            'email.unique' => 'Este email ya esta registrado',
            'name.required' => 'El nombre es requerido.',
            'name.max' => 'El maximo de caracteres es 150',
           
            'apellidos.required' => 'Los apellidos son requeridos.',
            'apellidos.max' => 'El maximo de caracteres es 150',
            'celular.required' => 'El nro de telefono es requerido.',
            'celular.max' => 'El maximo de caracteres es 50',
            'direccion.max' => 'El maximo de caracteres es 250',

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
        $empleado->name = $request->name;
        $empleado->email = $request->email;
        $empleado->password = Hash::make($request->password);
        $empleado->apellidos = $request->apellidos;
        $empleado->celular = $request->celular;
        $empleado->cargo = $request->cargo;
        $empleado->direccion = $request->direccion;
        $empleado->save();
        toast('Empleado actualizado correctamente!','success');
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
        $empleado = User::findOrFail($id);
        if ($empleado->img != null) 
            {
                User::destroy($id);
            }
        User::destroy($id);
        return redirect('empleados');
    }
}
