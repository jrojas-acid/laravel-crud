@extends('layout/plantilla')

@section('tituloPagina', 'Crud con Laravel 8')
@section('contenido')

<div class="card">
    <div class="card-header">
        CRUD - Laravel 8 y MySQL
    </div>
    <div class="card-body">
        <p>
            <a href="{{ route("personas.create") }}" class="btn btn-primary">Agregar Persona</a>
        </p>
        @if ($mensaje = Session::get("success"))
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-success" role="alert">
                        {{ $mensaje }}
                    </div>
                </div>
        </div>
        @endif
        <h5 class="card-title text-center">Listado de  Comunas</h5>
        <hr>
        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead class="text-center">
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Nombre</th>
                        <th>Fecha Nacimiento</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                            <tr>
                                <td>{{ $item->paterno }}</td>
                                <td>{{ $item->materno }}</td>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->fecha_nacimiento }}</td>
                                <td class="text-center">
                                    <form action="{{ route('personas.edit', $item->id) }}" method="get">
                                        <button class="btn btn-info">Editar</button>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('personas.show', $item->id) }}" method="get">
                                        <button class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12">
                    {{ $datos->links() }}
                </div>
            </div>
        </p>
    </div>
</div>

@endsection
