@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-9">
    <a href="{{url('persona/create')}}"class="pull-right">
    <button class="btn btn-success">Crear Estudiante</button></a>
    <a href="{{url('imprimirPersonas')}}"class="pull-right">
    <button class="btn btn-success">Imprimir</button></a>
    
</div>
</div>
<div class="row">
    <div class="col-md-9 col-xs-9">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <th>Id</th>
                <th>Documento Identidad</th>
                <th>Nombres Completos</th>
                <th>Apellidos</th>
                <th>Genero</th>
                <th>Grado</th>
                <th>Eps</th>
                <th>Nombres Madre</th>
                <th>Nombres Padre</th>
                <th>Correo Electrónico</th>
                <th>Telefono</th>
                <th>Opciones</th>
                </thead>
                <tbody>
                @foreach($persona as $per)
                <tr>
                    <td>{{ $per->id }}</td>
                    <td>{{ $per->documento_identidad }}</td>
                   
                    <td>{{ $per->nombre_est }}</td>
                    <td>{{ $per->apellido_est}}</td>
                    <td>{{ $per->genero }}</td>
                    <td>{{ $per->grado_cursa }}</td>
                    <td>{{ $per->eps }}</td>
                    <td>{{ $per->nombre_madre }}</td>
                    <td>{{ $per->nombre_padre }}</td>
                    <td>{{ $per->email }}</td>
                    <td>{{ $per->telefono_acudiente }}</td>
                    
                    <td>
                    <a href="{{URL::action('App\http\Controllers\PersonaController@edit',$per->id)}}"><button class="btn btn-primary">Actualizar</button></a>
                    <td>
                    <a href="" data-target="#modal-delete-{{$per->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    <td>
                    <a href="{{URL::action('App\http\Controllers\PersonaController@edit',$per->id)}}"><button class="btn btn-primary">Imprimir</button></a>
                    <td>
                </td>
                </tr>
                @include('persona.modal')
                @endforeach
</tbody>
</table>
        </div>
</div>
</div>
@endsection
