@extends('layouts.principal')

@section('hijos')

<h1>Agregar Medicina</h1>


<div class="container">
    <div class="row">
        <div class="col">
            <form action="/medicinas" method="post">
                @csrf

                <div class="mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="existencia">Existencia</label>
                    <input type="text" name="existencia" id="existencia" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="precio">Precio</label>
                    <input type="text" name="precio" id="precio"  class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

        </div>
    </div>
</div>

@endsection
