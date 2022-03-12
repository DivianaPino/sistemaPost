@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>LISTADO DE USUARIOS</h1>
@stop

@section('content')

<div>
     <div class="card">
        <div class="card-body">
            <table id="tabla_users" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
               <thead class="text-center bg-info text-white">
                   <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Rol</th>
                      <th>Editar Rol</th>
                   </tr>
               </thead>

               <tbody>
                 
                  @foreach ($users as $user )
                          @foreach ( $user->getRoleNames() as $role )
                          <tr>
                             <td>{{$user->id}}</td>
                             <td>{{$user->name}}</td>
                             <td>{{$user->email}}</td>
                             <td>{{$role}}</td>
                                 <td width="10px">
                                 <a class="btn btn-info" href="{{route('users.edit', $user)}}">Editar Rol</a>
                             </td> 
                         </tr>
                         @endforeach
                  @endforeach
               </tbody>
            </table>
        </div>
     </div>
</div>
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
    $('#tabla_users').DataTable({
      //Opciones de paginación
        "lengthMenu": [
            [5, 10, 50, -1],
            [5, 10, 50, "All"]
        ]
    });
});
</script>
@stop

