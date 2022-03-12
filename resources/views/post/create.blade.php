@extends('layouts.plantillabase')

@extends('adminlte::page')

@section('title', 'Crear Post')

@section('content_header')
    <h1>CREAR POST</h1>
@stop

@section('content')
<form action="/myPosts" method="POST">
    @csrf
    <div class="mb-3">
        <label for="titulo" class="form-label">Título:</label>
        <input type="text" id="titulo" name="titulo" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="contenido" class="form-label">Contenido:</label>
        <textarea name="contenido" rows="4" cols="20" class="form-control"></textarea>
    </div>

    <a href="/post" class="btn btn-secondary" tabindex="3">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>
@stop










