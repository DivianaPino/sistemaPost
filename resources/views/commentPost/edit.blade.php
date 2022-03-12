@extends('adminlte::page')

@section('title', 'Editar Post')

@section('content_header')
    <h1>EDITAR POST</h1>
@stop

@section('content')
<form action="/commentPost/{{$comment->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="body" class="form-label">Comentario:</label>
        <textarea name="body" rows="4" cols="20" class="form-control">{{$comment->body}}</textarea>
    </div>

    <a href="/myComments" class="btn btn-secondary" tabindex="3">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>
@stop


