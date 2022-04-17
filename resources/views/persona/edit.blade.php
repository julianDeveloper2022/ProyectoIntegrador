@extends('layout.plantilla')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Estudiante</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
{{Form::open(array('action'=>array('App\http\Controllers\PersonaController@update', $persona->id),'method'=>'patch'))}}
<div class="row">
    <div class="col-lg-6 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="documento">
                Numero documento</label>
                <input type="number"name="documento_identidad"
                id="documento_identidad"class="form-control"
                value="{{$persona->documento_identidad}}">
            </div>
        </div>
        <div class="col-lg-6 col-md-9 col-sm-6 col-xs-12">   
        <div class="form-group">
            <label for="pnombre">Nombre Estudiante</label>
            <input type="text"name="nombre_est"id="nombre"class="form-control"
            value="{{$persona->nombre_est}}">
        </div>
        </div>
        
        <div class="col-lg-6 col-md-9 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="papellido">Apellido Estudiante</label>
                <input type="text"name="apellido_est"id="apellido"class="form-control"
                value="{{$persona->apellido_est}}">
                </div>
        </div>
        <div class="col-lg-6 col-md-9 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="pemail">Email</label>
                <input type="text"name="email"id="email"class="form-control"
                value="{{$persona->email}}">
            </div>
        </div>
        <div class="col-lg-6 col-md-9 col-sm-6 col-xs-12">   
        <div class="form-group">
            <label for="pgenero">Genero</label>
            <input type="text"name="genero"id="genero"class="form-control"
            value="{{$persona->genero}}">
        </div>
        </div>
        <div class="col-lg-6 col-md-9 col-sm-6 col-xs-12">   
        <div class="form-group">
            <label for="pgrado">Grado</label>
            <input type="text"name="grado_cursa"id="grado"class="form-control"
            value="{{$persona->grado_cursa}}">
        </div>
        </div>
        <div class="col-lg-6 col-md-9 col-sm-6 col-xs-12">   
        <div class="form-group">
            <label for="peps">Eps</label>
            <input type="text"name="eps"id="eps"class="form-control"
            value="{{$persona->eps}}">
        </div>
        </div>
        <div class="col-lg-6 col-md-9 col-sm-6 col-xs-12">   
        <div class="form-group">
            <label for="pnombremadre">Nombre Madre</label>
            <input type="text"name="nombre_madre"id="nombre_madre"class="form-control"
            value="{{$persona->nombre_madre}}">
        </div>
        </div>
        <div class="col-lg-6 col-md-9 col-sm-6 col-xs-12">   
        <div class="form-group">
            <label for="pnombrepadre">Nombre Padre</label>
            <input type="text"name="nombre_padre"id="nombre_padre"class="form-control"
            value="{{$persona->nombre_padre}}">
        </div>
        </div>
        <div class="col-lg-6 col-md-9 col-sm-6 col-xs-12">
            <div class="form-group"><label for="telefono">Telefono</label>
            <input type="text"name="telefono_acudiente"id="telefono_acudiente"class="form-control"
            value="{{$persona->telefono_acudiente}}">
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
        <div class="form-group">
            <button class="btn btn-primary"type="submit"><span
            class="glyphicon glyphicon-refresh"></span>Actualizar
        </button><a class="btn btn-info"type="reset"
        href="{{url('persona')}}"><span
         class="glyphicon glyphicon-home"></span>Regresar </a>
        </div>
    </div>
</div>

{!!Form::close()!!}
@endsection 