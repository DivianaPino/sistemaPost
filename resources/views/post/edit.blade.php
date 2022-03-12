@extends('adminlte::page')

@section('title', 'Editar Post')

@section('content_header')
    <h1>EDITAR POST</h1>
@stop

@section('content')
<form action="/post/{{$post->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="titulo" class="form-label">Título:</label>
        <input type="text" id="titulo" name="titulo" class="form-control" value="{{$post->titulo}} ">
    </div>
    <div class="mb-3">
        <label for="contenido" class="form-label">Contenido:</label>
        <textarea name="contenido" rows="4" cols="20" class="form-control">{{$post->contenido}}</textarea>
    </div>

    <a href="/myPosts" class="btn btn-secondary" tabindex="3">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>
@stop


