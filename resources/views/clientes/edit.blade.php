@extends('layouts.principal')

@section('hijos')

<h1>Editar Cliente</h1>

<div class="container" >
    <form action="/clientes/{{$editarCliente->id}}" method="POST">
        <!-- Genera un toquen -->
        @csrf
        @method('PUT')
        <label for="">ID</label>
        <input class="form-control" type="text" name="id" id="nombre" value="{{$editarCliente->id}}">

        <label for="">Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre" value="{{$editarCliente->Nombre}}">

        <label for="">Apellido</label>
        <input class="form-control" type="text" name="apellido" id="apellido" value="{{$editarCliente->Apellido}}">

        <label for="">Telefono</label>
        <input class="form-control" type="text" name="telefono" id="telefono" value="{{$editarCliente->Telefono}}">

        <label for="">Ciudad</label>
        <input class="form-control" type="text" name="ciudad" id="ciudad" value="{{$editarCliente->Ciudad}}">

        <label for="">Edad</label>
        <input class="form-control" type="text" name="edad" id="edad" value="{{$editarCliente->Edad}}">
        <br>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="/clientes" role="button" class="btn btn-secondary">Regresar</a>

    </form>
</div>

@endsection
