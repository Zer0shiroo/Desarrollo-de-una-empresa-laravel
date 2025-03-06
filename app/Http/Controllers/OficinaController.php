<?php

namespace App\Http\Controllers;

use App\Models\Oficina;
use Illuminate\Http\Request;

class OficinaController extends Controller
{
    public function index()
    {
        $oficinas = Oficina::all(); 
        return view('oficinas.index', compact('oficinas'));
    }

    public function create()
    {
        return view('oficinas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
        ]);

        Oficina::create($request->all());

        return redirect()->route('oficinas.index');
    }

    public function show(Oficina $oficina)
    {
        $empleados = $oficina->empleados;
    
        return view('oficinas.show', compact('oficina', 'empleados'));
    
    }
}
