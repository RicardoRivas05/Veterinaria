@extends('layouts.principal')

@section('hijos')

<h1>Editar Empleado</h1>

<div class="container">
    <div class="row">
        <div class="col">
            <form action="/medicinas/{{$editarMedicina->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="id">ID</label>
                    <input type="text" name="id" id="id" class="form-control" value="{{$editarMedicina->id}}">
                </div>

                <div class="mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{$editarMedicina->nombre}}">
                </div>

                <div class="mb-3">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{$editarMedicina->descripcion}}">
                </div>

                <div class="mb-3">
                    <label for="existencia">Existencia</label>
                    <input type="text" name="existencia" id="existencia" class="form-control" value="{{$editarMedicina->existencia}}">
                </div>
                <div class="mb-3">
                    <label for="precio">Precio</label>
                    <input type="text" name="precio" id="precio" class="form-control" value="{{$editarMedicina->precio}}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

        </div>
    </div>

</div>

@endsection
