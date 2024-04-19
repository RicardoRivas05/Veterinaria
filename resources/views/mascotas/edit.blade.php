@extends('layouts.principal')

@section('hijos')


<h1>Editar Mascota</h1>

<div class="container">
    <form action="/mascotas/{{$editarMascota->id}}" method="POST">
        <!-- Genera un toquen -->
        @csrf
        @method('PUT')
        <label for="">ID</label>
        <input class="form-control" type="text" name="id" id="nombre" value="{{$editarMascota->id}}">


        <label for="">Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre" value="{{$editarMascota->Nombre}}">

        <label for="">Especie</label>
        <input class="form-control" type="text" name="especie" id="especie" value="{{$editarMascota->Especie}}">

        <label for="">Raza</label>
        <input class="form-control" type="text" name="raza" id="raza" value="{{$editarMascota->Raza}}">

        <label for="">Edad</label>
        <input class="form-control" type="text" name="edad" id="edad" value="{{$editarMascota->Edad}}">

        <label for="">Duenio</label>
        <input class="form-control" type="text" name="duenio" id="duenio" value="{{$editarMascota->IdDuenio}}">
        <br>
        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>
</div>



@endsection
