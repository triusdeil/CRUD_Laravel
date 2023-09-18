<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //consultar de la bd
        $datos['empleados'] = Empleado::paginate(5);
        return view('empleado.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //recolectar datos del form y quitar el token
        $datosEmpleados = request()->except('_token');
        //toma el modelo inserta la bd  exceptuando el token
        if($request->hasFile('Foto')){
            $datosEmpleados['Foto']=$request->file('Foto')->store('uploads', 'public');
        }
        Empleado::insert($datosEmpleados);
        return response()->json($datosEmpleados);
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //ver los datos recuperados
        $empleado=Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //envia los datos del update
        $datosEmpleados = request()->except(['_token','_method']);
        Empleado::where('id','=', $id)->update($datosEmpleados);
        $empleado=Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Empleado::destroy($id);
        return redirect('empleado');
    }
}
