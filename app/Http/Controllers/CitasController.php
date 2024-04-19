<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Mascota;
use App\Models\Cita;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos = Cita::all();
        return view('citas.index2')->with('citas', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id, string $id2)
    {
        //
        return view('citas.create')->with('idCliente', $id)->with('idMascota', $id2);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $cita = new Cita();
        $cita->idCliente= $request->get('idCliente');
        $cita->idMascota= $request->get('idMascota');
        $cita->fecha= $request->get('fecha');
        $cita->save();
        return redirect('/clientes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, string $id2)
    {
        //
        $cliente = Cliente::find($id);
        $mascota = Mascota::find($id2);
        $citas = Cita::all();
        return view('citas.index')->with('citas', $citas)
                                  ->with('idCliente', $cliente)
                                  ->with('idMascota', $mascota);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editarCita = Cita::find($id);
        return view('citas.edit')->with('editarCita', $editarCita);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editarCita = Cita::find($id);
        $editarCita->idCliente= $request->get('idCliente');
        $editarCita->idMascota= $request->get('idMascota');
        $editarCita->fecha= $request->get('fecha');
        $editarCita->save();
        return redirect('/clientes');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarCita = Cita::find($id);
        $eliminarCita->delete();
        return redirect('/clientes');
    }

    public function eliminar(string $id)
    {
        $eliminarCita = Cita::find($id);
        return view('citas.delete')->with('eliminarCita', $eliminarCita);
    }
}
