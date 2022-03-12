@extends('layouts.plantillabase')

@extends('adminlte::page')

@section('title', 'Datos User Profile')

@section('content_header')
    <h1>DATOS ADICIONALES</h1>
@stop

@section('content')

@if(session('status'))
    <p class="alert alert-info">{{ Session('status') }}</p>
@endif
<form action="/datosProfile" method="POST">
    @csrf
    <div class="mb-3">
        <label for="fechanacimiento" class="form-label">Fecha de Nacimiento:</label>
        <input type="text" id="fechanacimiento" name="fechanacimiento" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="pais" class="form-label">Nacionalidad:</label>
        <input type="text" id="pais" name="pais" class="form-control" tabindex="1">
      
    </div>

    <a href="/datosProfile" class="btn btn-secondary" tabindex="3">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>

@stop










