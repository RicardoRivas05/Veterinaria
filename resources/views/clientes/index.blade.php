@extends('layouts.principal')

@section('hijos')
<!-- contenido de la pagina -->
<h1>Vista clientes</h1>
<br>
<a href="clientes/create" role="button" class="btn btn-primary">+ Agregar Cliente</a>

<br>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Edad</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <th>{{$cliente->id}}</th>
                <th>{{$cliente->Nombre }}</th>
                <th>{{$cliente->Apellido }}</th>
                <th>{{$cliente->Telefono }}</th>
                <th>{{$cliente->Ciudad }}</th>
                <th>{{$cliente->Edad }}</th>
                <th>
                    <a href="/mascotas/{{$cliente->id}}" class="btn btn-info">Ver Mascotas  </a>
                    <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-success">Editar  </a>
                    <a href="/clientes/{{$cliente->id}}" class="btn btn-danger">Eliminar</a>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
