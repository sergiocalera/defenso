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
							<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-response-modal-lg"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  Nueva Respuesta</button>
							<button type = "button" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>  Borrar Mensaje</button>
						</div>
					</div>
					<hr />
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
                {{-- Seccion del modal --}}
                <div id="responseModal" class="modal fade bs-response-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title">Respuesta para: <strong>{{$mensaje->audiencia->nombre . " " . $mensaje->audiencia->apellido_paterno}}</strong></h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
										<form id="newResponse" action="">
											<div class="form-group">
												<textarea  name="response" id="boxResponse" rows="10" class="form-control" style="width: 100%"></textarea>
												<input type="hidden" name="token_message" value="{{$mensaje->id}}">
												{{csrf_field()}}
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button id="saveResponse" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>  Guardar</button>
								<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Enviar contestación</button>
								<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Borrar contestación</button>
								<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar</button>
							</div>
						</div>
					</div>
				</div>
				{{-- Fin de la seccion de modal --}}
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

@section('script')
<script src="{{ url('/js/defensora/respuestas.js') }}"></script>
@endsection