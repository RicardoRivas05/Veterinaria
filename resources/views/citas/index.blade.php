@extends('layouts.principal')

@section('hijos')

<a href="/citas/create/{{$idCliente->id}}/{{$idMascota->id}}" class="btn btn-primary">Agendar Cita</a>
<a href="/clientes" role="button" class="btn btn-secondary">Menu principal</a>


<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>IdCliente</th>
                <th>idMascota</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($citas as $cita)
            @if($cita->idCliente == $idCliente->id)
            <tr>
                <th>{{$cita->id}}</th>
                <th>{{$cita->idCliente}}</th>
                <th>{{$cita->idMascota}}</th>
                <th>{{$cita->fecha}}</th>
                <th>
                <a href="{{ route('citas.edit', $cita->id) }}" class="btn btn-warning">Editar</a>
                <a href="{{ route('citas.eliminar', $cita->id) }}" class="btn btn-danger">Eliminar</a>
                </th>
            </tr>
            @endif
            @endforeach

        </tbody>
    </table>
</div>

@endsection
