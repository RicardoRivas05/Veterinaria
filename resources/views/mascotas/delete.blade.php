@extends('layouts.principal')

@section('hijos')
<h1>Eliminar Mascota</h1>

<div class="container">
    <form action="/mascotas/{{$eliminarMascota->id}}" method="POST">
        @csrf
        @method('DELETE')
        <label>ID</label>
        <input class="form-control" type="text" name="id" id="id" value="{{$eliminarMascota->id}}">


        <label for="">Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre" value="{{$eliminarMascota->Nombre}}">

        <label for="">Especie</label>
        <input class="form-control" type="text" name="especie" id="especie" value="{{$eliminarMascota->Especie}}">

        <label for="">Raza</label>
        <input class="form-control" type="text" name="raza" id="raza" value="{{$eliminarMascota->Raza}}">

        <label for="">Edad</label>
        <input class="form-control" type="text" name="edad" id="edad" value="{{$eliminarMascota->Edad}}">

        <label for="">Duenio</label>
        <input class="form-control" type="text" name="duenio" id="duenio" value="{{$eliminarMascota->IdDuenio}}">
        <br>
        <button type="submit" class="btn btn-danger">Eliminar</button>

    </form>
</div>



@endsection
