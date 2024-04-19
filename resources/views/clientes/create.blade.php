@extends('layouts.principal')

@section('hijos')

<h1>Crear Cliente</h1>

<div class="container" >
    <form action="/clientes" method="post">
        @csrf
        <div class="row">
            <label for="">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre">
        </div>
        <div class="row">
            <label for="">Apellido</label>
            <input class="form-control" type="text" name="apellido" id="apellido">
        </div>
        <div class="row">
            <label>Telefono</label>
            <input class="form-control" type="text" name="telefono" id="telefono">
        </div>
        <div class="row">
            <label for="">Ciudad</label>
            <input class="form-control" type="text" name="ciudad" id="ciudad">
        </div>
        <div class="row">
            <label>Edad</label>
            <input class="form-control" type="text" name="edad" id="edad">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="/clientes" role="button" class="btn btn-secondary">Regresar</a>

    </form>
</div>


@endsection
