@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">Editar Ciudad</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ciudades.update', $ciudad->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $ciudad->descripcion }}">
                        </div>
                        <div class="form-group">
                            <label for="provincia_id">Provincia:</label>
                            <select class="form-control" id="provincia_id" name="provincia_id">
                                @foreach($provincias as $provincia)
                                <option value="{{ $provincia->id }}" {{ $ciudad->provincia_id == $provincia->id ? 'selected' : '' }}>{{ $provincia->descripcion }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection