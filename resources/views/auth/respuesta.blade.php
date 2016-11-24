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
							@if( $mensaje->aprobado )
							<strong>Folio: </strong>{{ $mensaje->aprobada->id }}
							@else
							<strong>Folio: </strong> No Aprobado
							@endif
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
							@if( $mensaje->estado )
							@if( $mensaje->aprobado )
							<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-response-modal-lg">
								<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Nueva Respuesta
							</button>
							@else
							<button id="approveMessage" data-identi="{{$mensaje->id}}" type="button" class="btn btn-warning"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Aprobar</button>
							@endif
							<button id="deleteMessage" data-identi="{{$mensaje->id}}" type = "button" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>  Borrar Mensaje</button>
							@endif
						</div>
					</div>
					<hr />
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
							<h3>Respuestas</h3>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							{{-- Aqui vamos --}}
							<?php $respuestas = $mensaje->defensoras ?>
							@foreach( $respuestas as $respuesta )
							<div class="mensaje thumbnail">
								<div class="datos">
									<div class="row">
										<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
											<p class="text-left">
												<strong>Folio: </strong> {{ $respuesta->id }}
											</p>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
											<p class="text-left">
												<strong>Ultima Modificación: </strong> {{ $respuesta->fecha }}
											</p>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
											<button type="button" class="btn btn-default modify" data-toggle="modal" data-target=".bs-edit-modal-lg" data-identification="{{ $respuesta->id }}" data-message="{{ $respuesta->respuesta }}" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Modificar</button>
											<button type="button" class="btn btn-warning" ><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Publicar</button>
											<button type="button" class="btn btn-danger" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Borrar</button>
										</div>
									</div>
									<hr />
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div>
												<p>
													{{ $respuesta->respuesta }}
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
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
										<p>
											<strong>Mensaje: </strong>
										</p>
										<p>
											{{ $mensaje->mensaje }}
										</p>
									</div>
								</div>
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
								<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar</button>
							</div>
						</div>
					</div>
				</div>
				{{-- Fin de la seccion de modal --}}

				{{-- Seccion del modal Editar Respuestas --}}
                <div id="responseModalEdit" class="modal fade bs-edit-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
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
										<p>
											<strong>Mensaje: </strong>
										</p>
										<p>
											{{ $mensaje->mensaje }}
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
										<form id="editResponse" action="">
											<div class="form-group">
												<textarea  name="response" id="boxResponseEdit" rows="10" class="form-control" style="width: 100%"></textarea>
												<input id="token_respuesta" type="hidden" name="token_respuesta" value="{{$mensaje->id}}">
												{{csrf_field()}}
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button id="saveResponseEdit" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>  Guardar</button>
								<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar</button>
							</div>
						</div>
					</div>
				</div>
				<form id="accionesBotones">
					{{csrf_field()}}
				</form>
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