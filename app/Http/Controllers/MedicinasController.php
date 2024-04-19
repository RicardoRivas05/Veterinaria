<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicina;

class MedicinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $medicina=Medicina::all();
        return view('medicinas.index')->with('medicinas', $medicina);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('medicinas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $medicina = new Medicina();
        $medicina->nombre=$request->get('nombre');
        $medicina->descripcion=$request->get('descripcion');
        $medicina->existencia=$request->get('existencia');
        $medicina->precio=$request->get('precio');
        $medicina->save();
        return redirect('/medicinas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $eliminarMedicina = Medicina::find($id);
        return view('medicinas.delete')->with('eliminarMedicina', $eliminarMedicina);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editarMedicina = Medicina::find($id);
        return view('medicinas.edit')->with('editarMedicina', $editarMedicina);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editarMedicina = Medicina::find($id);
        $editarMedicina->nombre=$request->get('nombre');
        $editarMedicina->descripcion=$request->get('descripcion');
        $editarMedicina->existencia=$request->get('existencia');
        $editarMedicina->precio=$request->get('precio');
        $editarMedicina->save();
        return redirect('/medicinas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarMedicina = Medicina::find($id);
        $eliminarMedicina->delete();
        return redirect('/medicinas');
    }
}
