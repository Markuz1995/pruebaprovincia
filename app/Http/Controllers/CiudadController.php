<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudad;


class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ciudades = Ciudad::with('provincia')->get();
        return response()->json($ciudades);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ciudades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string|max:255',
            'provincia_id' => 'required|integer|exists:provincias,id'
        ]);

        Ciudad::create($request->all());

        return redirect()->route('ciudades.index')
            ->with('success', 'Ciudad creada exitosamente.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ciudad $ciudad)
    {
        return view('ciudades.edit', compact('ciudad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ciudad $ciudad)
    {
        $request->validate([
            'descripcion' => 'required|string|max:255',
            'provincia_id' => 'required|exists:provincias,id'
        ]);

        $ciudad->update($request->all());

        return redirect()->route('ciudades.index')
            ->with('success', 'Ciudad actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ciudad $ciudad)
    {
        $ciudad->delete();

        return redirect()->route('ciudades.index')
            ->with('success', 'Ciudad eliminada exitosamente.');
    }
}
