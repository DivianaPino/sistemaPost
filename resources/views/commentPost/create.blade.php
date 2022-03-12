@extends('layouts.plantillabase')

@extends('adminlte::page')

@section('title', 'Comentar Post')

@section('content_header')
    <h1>COMENTAR POST</h1>
@stop

@section('content')

@if(session('status'))
    <p class="alert alert-info">{{ Session('status') }}</p>
@endif

<form action="/commentPost" method="POST">
    @csrf
    <div class="mb-3">
        <label for="body" class="form-label">COMENTARIO:</label>
        <textarea name="body" rows="4" cols="20" class="form-control"></textarea>
        <input type="hidden" name="post_id" value="{{ $post->id }}" />
  
    </div>
    <a href="/comments" class="btn btn-secondary" tabindex="3">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>
@stop










