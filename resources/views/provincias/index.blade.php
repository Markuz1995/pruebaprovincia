@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lista de Provincias</div>

                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{ route('provincias.create') }}" class="btn btn-success">Crear Provincia</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($provincias as $provincia)
                                <tr>
                                    <td>{{ $provincia->id }}</td>
                                    <td>{{ $provincia->descripcion }}</td>
                                    <td>
                                        <a href="{{ route('provincias.edit', $provincia->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                        <form action="{{ route('provincias.destroy', $provincia->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection