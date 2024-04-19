@extends('layouts.principal')

@section('hijos')

<!-- contenido de la pagina -->
<h1>Eliminar Cliente</h1>

<div class="container">
    <form action="/clientes/{{$eliminarCliente->id}}" method="POST">
        @csrf
        @method('DELETE')
        <label>ID</label>
        <input class="form-control" type="text" name="id" id="nomre" value="{{$eliminarCliente->id}}">


        <label for="">Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre" value="{{$eliminarCliente->Nombre}}">

        <label for="">Apellido</label>
        <input class="form-control" type="text" name="apellido" id="apellido" value="{{$eliminarCliente->Apellido}}">

        <label for="">Telefono</label>
        <input class="form-control" type="text" name="telefono" id="telefono" value="{{$eliminarCliente->Telefono}}">

        <label for="">Ciudad</label>
        <input class="form-control" type="text" name="ciudad" id="ciudad" value="{{$eliminarCliente->Ciudad}}">

        <label for="">Edad</label>
        <input class="form-control" type="text" name="edad" id="edad" value="{{$eliminarCliente->Edad}}">
        <br>
        <button type="submit" class="btn btn-danger">Eliminar</button>
        <a href="/clientes" role="button" class="btn btn-secondary">Regresar</a>

    </form>
</div>


@endsection
