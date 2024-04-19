@extends('layouts.principal')

@section('hijos')
<h1>Agregar Mascota</h1>

<div class="container">
    <form action="/mascotas" method="post">
        @csrf
        <label for="">Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre">

        <label for="">Especie</label>
        <input class="form-control" type="text" name="especie" id="especie">

        <label>Raza</label>
        <input class="form-control" type="text" name="raza" id="raza">

        <label for="">Edad</label>
        <input class="form-control" type="text" name="edad" id="edad">

        <label>IdDuenio</label>
        <input class="form-control" type="text" name="IdDuenio" id="IdDuenio" value="{{$idCliente}}">
        <br>
        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>
</div>

@endsection
