<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;
use App\Models\Cliente;


class MascotasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos = Mascota::all();
        return view("mascotas.index2")->with("mascotas", $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        //
        $idCliente=$id;
        return view("mascotas.create")->with('idCliente', $idCliente);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $registro = new Mascota();
        $registro->Nombre=$request->get("nombre");
        $registro->Especie=$request->get("especie");
        $registro->Raza=$request->get("raza");
        $registro->Edad=$request->get("edad");
        $registro->IdDuenio=$request->get("IdDuenio");
        $registro->save();
        return redirect("clientes");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $mascotas = Mascota::where('IdDuenio', $id)->get();
        $idCliente = $id;
        return view("mascotas.index")->with("mascotas",$mascotas)->with('idCliente', $idCliente);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editarMascota = Mascota::find($id);
        return view("mascotas.edit")->with("editarMascota",$editarMascota);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editarMascota = Mascota::find($id);
        $editarMascota->Nombre=$request->get("nombre");
        $editarMascota->Especie=$request->get("especie");
        $editarMascota->Raza=$request->get("raza");
        $editarMascota->Edad=$request->get("edad");
        $editarMascota->IdDuenio=$request->get("duenio");
        $editarMascota->save();
        return redirect("clientes");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarMascota = Mascota::find($id);
        $eliminarMascota->delete();
        return redirect("clientes");
    }

    public function delete(string $id)
    {
        $eliminarMascota = Mascota::find($id);
        return view('mascotas.delete')->with('eliminarMascota', $eliminarMascota);
    }
}
