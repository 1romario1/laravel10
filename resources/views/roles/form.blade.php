@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="mb-3">
            <label for="tipo_rol" class="form-label">Tipo de Rol:</label>
            <input type="text" class="form-control" id="tipo_rol" name="tipo_rol" value="{{ $roles->tipo_rol}}">
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
    </div>
@endsection