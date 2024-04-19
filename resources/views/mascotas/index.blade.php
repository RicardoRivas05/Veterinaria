@extends('layouts.principal')

@section('hijos')

<h1>Vista de Mascotas</h1>
<br>
<a href="/mascotas/{{$idCliente}}/create" role="button" class="btn btn-primary">+ Agregar Mascota</a>
<a href="/clientes" role="button" class="btn btn-secondary">Menu principal</a>

<br>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Especie</th>
                <th scope="col">Raza</th>
                <th scope="col">Edad</th>
                <th scope="col">Duenio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mascotas as $mascota)
            <tr>
                <th>{{$mascota->id }}</th>
                <th>{{$mascota->Nombre }}</th>
                <th>{{$mascota->Especie }}</th>
                <th>{{$mascota->Raza }}</th>
                <th>{{$mascota->Edad }}</th>
                <th>{{$mascota->IdDuenio }}</th>
                <th>
                    <a href="/citas/{{$idCliente}}/{{$mascota->id}}" class="btn btn-info">Crear Cita</a>
                    <a href="/mascotas/{{$mascota->id}}/edit" class="btn btn-warning">Editar </a>
                    <a href="/mascotas/{{$mascota->id}}/eliminar" class="btn btn-danger">Eliminar</a>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
