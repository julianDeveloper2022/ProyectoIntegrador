@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Ingresar Estudiante</h3>
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
{!!Form::open(array('url'=>'persona','method'=>'POST','autocomplete'=>'off')
    )!!}
    {{Form::token()}}
<div class="row">
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="documento">Numero Documento</label>
            <input type="number"name="documento_identidad"
            id="documento_identidad"class="form-control"
            placeholder="Digite el númeroDocumento">
        </div>
        </div>
        <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombres Estudiantes</label>

                <input type="text"name="nombre_est"id="nombre:est"class="form-control"
                placeholder="Nombre Completo">
            </div>
        </div>
        <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="apellido">Apellidos Estudiante</label>
                <input type="text"name="apellido_est"id="apellido_est"class="form-control"
                placeholder="Apellidos Completos">
            </div>
        </div>
        <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="genero">Genero</label>

                <input type="text"name="genero"id="genero"class="form-control"
                placeholder="Genero del Estudiante">
            </div>
            </div>
            <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="grado_cursa">Grado a Cursar</label>

                <input type="text"name="grado_cursa"id="grado_cursa"class="form-control"
                placeholder="Grado a cursar">
            </div>
            </div>
            <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="eps">EPS</label>

                <input type="text"name="eps"id="eps"class="form-control"
                placeholder="EPS">
            </div>
            </div>
            <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="nombre_madre">Nombre Madre</label>

                <input type="text"name="nombre_madre"id="nombre_madre"class="form-control"
                placeholder="Nombres Completo">
            </div>
            </div>
            <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="nombre_padre">Nombre Padre</label>

                <input type="text"name="nombre_padre"id="nombre_padre"class="form-control"
                placeholder="Nombres Completo">
            </div>
            </div>
        <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text"name="email"id="email"class="form-control"
                placeholder="Correo Electrónico">
            </div>
        </div>
        <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="email">Telefono</label>
                <input type="text"name="telefono_acudiente"id="telefono_acudiente"class="form-control"
                placeholder="Telefono">
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
            <div class="form-group">
                <br><button class="btn btn-primary"type="submit">
                    <span class="glyphicon glyphicon-ok"></span>Guardar</button>
                    <button class="btn btn-danger"type="reset">
                        <span class="glyphicon glyphicon-remove"></span>Vaciar Campos</button>
                        <a class="btn btn-info"type="reset"
                        href="{{url('persona')}}"><span class="glyphicon glyphicon-home"></span>Regresar </a>
                    </div>
                </div>
            </div>
            {!!Form::close()!!}
            @endsection