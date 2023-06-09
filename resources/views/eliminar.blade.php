@extends('layout/plantilla')
@section("tituloPagina", "Eliminar un registro")
@section('contenido')
<div class="card">
    <div class="card-header">
        Eliminar una persona
    </div>
    <div class="card-body">
        <p class="card-text"> 
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar esta persona?

                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Nombre</th>
                        <th>Fecha Nacimiento</th> 
                    </thead>
                    <tbody> 
                        <tr> 
                            <td>{{ $persona->paterno }}</td>
                            <td>{{ $persona->materno }}</td>
                            <td>{{ $persona->nombre }}</td>
                            <td>{{ $persona->fecha_nacimiento }}</td> 
                        </tr> 
                    </tbody>    
                </table>
                <hr>
                
                <form action="{{ route('personas.destroy', $persona->id) }}" method="POST"> 
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-info" href="{{ route('personas.index')}}">Regresar</a>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </p>
    </div>
</div>
@endsection