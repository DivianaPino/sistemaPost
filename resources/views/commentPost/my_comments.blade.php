@extends('adminlte::page')

@section('title', 'Mis Comentarios')

@section('content_header')
    <h1>LISTADO DE MIS COMENTARIOS</h1>
@stop

@section('content')
<a href="/commentPost/create" class="btn btn-primary mb-3">Crear</a>
<table id="tabla_comments" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="text-center bg-primary text-white">
        <th scope="col">Fecha y Hora</th>  
        <th scope="col">Post</th>
        <th scope="col">Id Comentario</th>
        <th scope="col">Comentario</th>
        <th scope="col">Acciones</th>
    </thead>
    <tbody>
        @foreach ($comments as $comment)
        <tr>
            <td>{{$comment->created_at}}</td>
            <td>{{$comment->post->titulo}}</td>
            <td>{{$comment->id}}</td>
            <td>{{$comment->body}}</td>
            <td>
                <form action="{{route('comments.destroy',$comment->id)}}" method="POST">
                    <a href="/comments/{{$comment->id}}/edit" class="btn btn-warning">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
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
    $('#tabla_comments').DataTable({
      //Opciones de paginación
        "lengthMenu": [
            [5, 10, 50, -1],
            [5, 10, 50, "All"]
        ]
    });
});
</script>
@stop



