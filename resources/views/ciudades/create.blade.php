@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">Crear Ciudad</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ciudades.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion">
                        </div>
                        <div class="form-group">
                            <label for="provincia_id">Provincia:</label>
                            <select class="form-control" id="provincia_id" name="provincia_id">
                                @foreach($provincias as $provincia)
                                <option value="{{ $provincia->id }}">{{ $provincia->descripcion }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#provincia_id').select2({
            placeholder: 'Seleccione una provincia', // Texto de marcador de posición
            allowClear: true, // Permitir limpiar la selección
            dropdownParent: $('#provincia_id').parent(),
            minimumInputLength: 2 // Mínimo de caracteres antes de mostrar resultados de búsqueda
        });
    });
</script>
@endsection


@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
@endsection