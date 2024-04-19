<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Mascota;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos = Cliente::all();
        return view("clientes.index")->with("clientes", $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("clientes.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $registro = new Cliente();
        $registro->Nombre=$request->get('nombre');
        $registro->Apellido=$request->get('apellido');
        $registro->Telefono=$request->get('telefono');
        $registro->Ciudad=$request->get('ciudad');
        $registro->Edad=$request->get('edad');
        $registro->save();
        return redirect('clientes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $eliminarCliente = Cliente::find($id);
        return view("clientes.delete")->with("eliminarCliente", $eliminarCliente);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editarCliente = Cliente::find($id);
        return view("clientes.edit")->with("editarCliente", $editarCliente);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editarCliente = Cliente::find($id);
        $editarCliente->Nombre=$request->get("nombre");
        $editarCliente->Apellido=$request->get("apellido");
        $editarCliente->Telefono=$request->get("telefono");
        $editarCliente->Ciudad= $request->get("ciudad");
        $editarCliente->Edad=$request->get("edad");
        $editarCliente->save();
        return redirect('clientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarCliente = Cliente::find($id);
        $eliminarCliente->delete();
        return redirect('clientes');
    }
}
