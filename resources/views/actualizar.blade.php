@extends('layout/plantilla')
@section("tituloPagina", "Actualizar una persona")
@section('contenido')
<div class="card">
    <div class="card-header">
        Actualizar persona
    </div> 

    <div class="card-body">
        <p class="card-text">
            <form action="{{ route('personas.update', $persona->id) }} " method="POST">
                @csrf
                @method("PUT")
                <label for="">Apellido paterno</label>
                <input type="text" name="paterno" class="form-control" required value="{{ $persona->paterno }}">
                <label for="">Apellido materno</label>
                <input type="text" name="materno" class="form-control" required value="{{ $persona->materno }}">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{ $persona->nombre }}">
                <label for="">Fecha de nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required value="{{ $persona->fecha_nacimiento }}">
                <br>
                <a class="btn btn-danger" href="{{ route('personas.index')}}">Regresar</a>
                <button type="submit" class="btn btn-warning">Actualizar</button>
            </form>
        </p>
    </div>
</div>
@endsection