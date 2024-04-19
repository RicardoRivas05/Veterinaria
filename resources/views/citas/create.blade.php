@extends('layouts.principal')

@section('hijos')

<h3>Agendar Cita</h3>

<div class="container">
    <div class="row">
        <div class="col">
            <form action="/citas" method="post">
                @csrf

                <div class="mb-3">
                    <label for="idCliente">Codigo Cliente</label>
                    <input type="text" name="idCliente" id="idCliente" class="form-control" value="{{$idCliente}}">
                </div>

                <div class="mb-3">
                    <label for="idMascota">Codigo Mascota</label>
                    <input type="text" name="idMascota" id="idMascota" class="form-control" value="{{$idMascota}}">
                </div>

                <div class="mb-3">
                    <label for="fecha">Fecha</label>
                    <input type="text" name="fecha" id="fecha" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

        </div>
    </div>
</div>
@endsection
