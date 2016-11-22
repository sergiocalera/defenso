@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>CONTROL DE MENSAJES</h3>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Folio</td>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Control</th>
                        </tr>
                        @foreach( $mensajes as $mensaje )
                        <tr class="{{ $mensaje->respuesta == true ? 'success' : 'warning' }}">
                            <td>{{ $mensaje->id }}</td>
                            <td>{{ $mensaje->audiencia->nombre . " " . $mensaje->audiencia->apellido_paterno . " " . $mensaje->audiencia->apellido_materno }}</td>
                            <td>{{ $mensaje->fecha }}</td>
                            <td><a class="btn btn-primary btn-sm" href="{{ url('/home/response/' . $mensaje->id) }}"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Ver mensaje</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection