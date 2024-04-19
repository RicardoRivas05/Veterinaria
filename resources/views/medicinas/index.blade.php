@extends('layouts.principal')

@section('hijos')


<h1>Vista de Medicinas</h1>
<br>
<a href="/medicinas/create" role="button" class="btn btn-primary">+ Agregar Medicina</a>
<a href="/clientes" role="button" class="btn btn-secondary">Menu principal</a>

<br>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Existencia</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($medicinas as $medicina)
            <tr>
                <th>{{$medicina->id }}</th>
                <th>{{$medicina->nombre }}</th>
                <th>{{$medicina->descripcion }}</th>
                <th>{{$medicina->existencia }}</th>
                <th>{{$medicina->precio }}</th>
                <th>
                    <a href="/medicinas/{{$medicina->id}}/edit" class="btn btn-warning">Editar </a>
                    <a href="/medicinas/{{$medicina->id}}" class="btn btn-danger">Eliminar</a>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
