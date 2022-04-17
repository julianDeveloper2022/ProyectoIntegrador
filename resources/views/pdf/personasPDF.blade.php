<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <!--Theme style --><link rel="stylesheet"href="{{public_path('dist/css/adminlte.min.css')}}">

</head>
<body>
<div class="container">

    <div class="row">
        <div class="col">
        <img src="{{public_path('img/logo1.jpg')}}"alt="" width='60px'>
    </div>

    <div class="col-md-12 col-xs-12">
        <h4 class="text-center">Jardin Creciendo</h4>
</div>
    <h3>Listado de Estudiantes</h3>


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
                <th>Nombres Completos Padres</th>
                <th>Correo Electrónico</th>
                <th>Telefono</th>
                <th>Opciones</th>
                </thead>
                <tbody>

                @foreach($personas as $per)
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
                    
                   
                </tr>
               
                @endforeach
</tbody>
</table>
        </div>
</div>
</div>

</body>
</html>