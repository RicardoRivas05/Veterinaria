@extends('layouts.principal')

@section('hijos')

<h3>Eliminar Cita</h3>

<div class="container">
    <div class="row">
        <div class="col">
            <form action="/citas/{{$eliminarCita->id}}" method="post">
                @csrf
                @method('DELETE')
                <div class="mb-3">
                    <label for="idCliente">Codigo Cliente</label>
                    <input type="text" name="idCliente" id="idCliente" class="form-control" value="{{$eliminarCita->idCliente}}">
                </div>

                <div class="mb-3">
                    <label for="idMascota">Codigo Mascota</label>
                    <input type="text" name="idMascota" id="idMascota" class="form-control" value="{{$eliminarCita->idMascota}}">
                </div>

                <div class="mb-3">
                    <label for="fecha">Fecha</label>
                    <input type="text" name="fecha" id="fecha" class="form-control" value="{{$eliminarCita->fecha}}">
                </div>
                <button type="submit" class="btn btn-danger">Eliminar</button>

            </form>

        </div>
    </div>
</div>

@endsection
