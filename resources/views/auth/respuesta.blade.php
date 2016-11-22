@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">			
			<div class="panel panel-default">
                <div class="panel-heading">
                	<h3>Vista del Mensaje</h3>
            	</div>
				@if( ! is_null( $mensaje ) )
                <div class="panel-body">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<strong>Folio: </strong>{{ $mensaje->id }}
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<strong>Fecha: </strong>{{$mensaje->fecha}}
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<strong>Nombre(s): </strong>{{$mensaje->audiencia->nombre}}
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<strong>Apellido Paterno: </strong>{{$mensaje->audiencia->apellido_paterno}}
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<strong>Apellido Materno: </strong>{{$mensaje->audiencia->apellido_materno}}
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<strong>Ocupación: </strong>{{$mensaje->audiencia->ocupacion}}
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<strong>Edad: </strong>{{$mensaje->audiencia->edad}} Años
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<strong>País: </strong>{{$mensaje->audiencia->pais}}
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<strong>Entidad Federativa: </strong>{{$mensaje->audiencia->estado}}
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<strong>Municipio: </strong>{{$mensaje->audiencia->municipio}}
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<strong>Correo: </strong>{{$mensaje->audiencia->email}}
						</div>
					</div>
					<hr />
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<strong>Nombre Público: </strong>{{ $mensaje->publico == 1 ? "Sí" : "No" }}
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<strong>Motivo: </strong>{{ $mensaje->motivo_mensaje }}
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<p>
								<strong>Mensaje: </strong>{{$mensaje->mensaje}}
							</p>
						</div>
					</div>
					<hr/>
					<div class="row">
						<div class="col-xs-4 col-xs-offset-8 col-sm-offset-8 col-sm-offset-8 col-sm-4 col-md-offset-8 col-md-4 col-lg-offset-8 col-lg-4 text-right">
							<!-- Large modal -->
							<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  Nueva Respuesta</button>
							<button type = "button" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>  Borrar Mensaje</button>

							<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
									...
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<form action="">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								{{-- Aqui vamos --}}
								<?php $respuestas = $mensaje->defensoras ?>
								@foreach( $respuestas as $respuesta )
								<div class="form-group">
									<textarea class="form-control" name="answer" id="answer-message" rows="10">{{ $respuesta->respuesta }}</textarea>
								</div>
								@endforeach
							</div>
							<div class="col-xs-4 col-xs-offset-8 col-sm-offset-8 col-sm-offset-8 col-sm-4 col-md-offset-8 col-md-4 col-lg-offset-8 col-lg-4 text-right">
								<div class="form-group">	
									{{--<button type = "button" class="btn btn-success"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>  Nueva Respuesta</button>--}}


								</div>
							</div>
						</form>
					</div>
					<hr />
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
						</div>
					</div>
                </div>
				@else
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<strong>¡El registro solicitado no existe!</strong>
						</div>
					</div>
				</div>
				@endif
            </div>
		</div>
	</div>
</div>
@endsection