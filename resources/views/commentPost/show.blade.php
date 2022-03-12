@extends('adminlte::page')

@section('title', 'Comentarios Post')

@section('content_header')
    <h1>COMENTARIOS DEL POST</h1>
@stop

@section('content')
<a href="/commentPost/{{$post->id}}/create" class="btn btn-primary mb-3">Crear</a>
<table id="tabla_comment" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="text-center bg-primary text-white">
       <th scope="col">Post</th>
       <th scope="col">Fecha y Hora</th>
        <th scope="col">Id Comentario</th>
        <th scope="col">Comentador Por:</th>
        <th scope="col">Comentario</th>
        <th scope="col">Acciones</th>
    </thead>
    <tbody>

   
        @foreach ($post->comments  as $comment)
        <tr>
            <td>{{$comment->post->titulo}}</td>
            <td>{{$comment->created_at}}</td>
            <td>{{$comment->id}}</td>
            <td>{{$comment->user->name}}</td>
            <td>{{$comment->body}}</td>
            <td>
            @can('commentPost.destroy')
                <form action="{{route('commentPost.destroy',$comment->id)}}" method="POST">
                    <a href="/commentPost/{{$comment->id}}/edit" class="btn btn-warning">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form> 
            @else
                <p>Acciones no disponibles para este usuario</p>
            @endcan
            </td>


        </tr>
        @endforeach


    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#tabla_comment').DataTable({
      //Opciones de paginación
        "lengthMenu": [
            [5, 10, 50, -1],
            [5, 10, 50, "All"]
        ]
    });
});
</script>
@stop



