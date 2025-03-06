<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Oficina;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index(Oficina $oficina)
    {
        $empleados = $oficina->empleados;
        
        return view('empleados.index', compact('oficina', 'empleados'));
    }

    public function create(Oficina $oficina)
    {
        return view('empleados.create', compact('oficina'));
    }

    public function store(Request $request, Oficina $oficina)
    {
        $request->validate([
            'nombre' => 'required|string',
            'primer_apellido' => 'required|string',
            'segundo_apellido' => 'nullable|string',
            'rol' => 'nullable|string',
            'fecha_nacimiento' => 'nullable|date',
            'dni' => 'required|unique:empleados,dni',
            'email' => 'required|email|unique:empleados,email',
        ]);
    
        // Crear el nuevo empleado
        $empleado = new Empleado($request->all());
        $empleado->office_id = $oficina->id; // Asignamos la oficina
        $empleado->save();
    
        return redirect()->route('oficinas.empleados.index', $oficina)
                         ->with('success', 'Empleado creado correctamente');
    }
    

    public function edit(Oficina $oficina, Empleado $empleado)
    {
  
        return view('empleados.edit', compact('oficina', 'empleado'));

    }

    public function update(Request $request, Oficina $oficina, Empleado $empleado)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'primer_apellido' => 'required|string|max:255',
            'dni' => 'required|string|max:255',
            'email' => 'required|email|unique:empleados,email,' . $empleado->id,
            'office_id' => 'required|exists:oficinas,id'
        ]);
    
        $empleado->update($request->all());
    
        return redirect()->route('oficinas.empleados.index', ['oficina' => $oficina->id])
                         ->with('success', 'Empleado actualizado correctamente');
    }
    

    public function destroy(Empleado $empleado)
    {
        $empleado->delete();

        return redirect()->route('oficinas.empleados.index', $empleado->oficina);
    }
}
