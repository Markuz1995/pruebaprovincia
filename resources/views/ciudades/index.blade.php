@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lista de Ciudades</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Descripción</th>
                                    <th>Provincia</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ciudades as $ciudad)
                                <tr>
                                    <td>{{ $ciudad->id }}</td>
                                    <td>{{ $ciudad->descripcion }}</td>
                                    <td>{{ $ciudad->provincia->descripcion }}</td>
                                    <td>
                                        <a href="{{ route('ciudades.edit', $ciudad->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                        <form action="{{ route('ciudades.destroy', $ciudad->id) }}" method="POST" style="display: inline;">
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