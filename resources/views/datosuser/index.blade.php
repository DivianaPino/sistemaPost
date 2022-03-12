@extends('adminlte::page')

@section('title', 'Datos Profile')

@section('content_header')
    <h1>PROFILE - DATOS ADICIONALES</h1>
@stop

@section('content')
<a href="/datosProfile/create" class="btn btn-primary mb-3">Crear</a>
<table id="tabla_profile" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="text-center bg-primary text-white ">
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Fecha Nacimiento</th>
        <th scope="col">Nacionalidad</th>
        <th scope="col">Acciones</th>
    </thead>
    <tbody>
        @foreach ($datos as $dato)
        <tr>
            <td>{{$dato->id}}</td>
            <td>{{$dato->user->name}}</td>
            <td>{{$dato->fechanacimiento}}</td>
            <td>{{$dato->pais}}</td>
            <td>        
        
                <form action="{{route('datosProfile.destroy',$dato->id)}}" method="POST">
                      <a href="/datosProfile/{{$dato->id}}/edit" class="btn btn-warning">Editar</a>
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
    $('#tabla_profile').DataTable({
      //Opciones de paginación
        "lengthMenu": [
            [1],
            [1]
        ]
    });
});
</script>
@stop



