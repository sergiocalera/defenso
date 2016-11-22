<section id="mensajes">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>¿Qué dice la audiencia?</h3>
            <hr class="red"></hr>
		</div>
	</div>
	@foreach($aprobadas as $mensaje)	
	<div class="mensaje thumbnail">
		<div class="datos">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 header">
					<p class="nombre">
						@if( $mensaje->publico )
						<strong>Nombre: </strong> {{ $mensaje->audiencia->nombre . " " . $mensaje->audiencia->apellido_paterno . " " . $mensaje->audiencia->apellido_materno }}
						@else
						<strong>Nombre: </strong> No Público
						@endif
					</p>
				</div>
				<div class="col-xs-8 col-sm-8 col-md-3 col-lg-3 header">
					<p class="text-center">
						<strong>Fecha: </strong>{{ $mensaje->fecha }}
					</p>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 header">
					<p class="text-center folio">
						<strong>Folio: </strong>{{ $mensaje->id }}
					</p>
				</div>
			</div>
		</div>
		<div class="mensaje-contenido">
			<p>
				<strong>Mensaje: </strong>{{ $mensaje->mensaje }}
			</p>
		</div>
		<div id="respuesta">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			    <div class="panel panel-default">
			        <div class="panel-heading" role="tab" id="headingOne">
			            <h4 class="panel-title">
			            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $mensaje->id }}" aria-expanded="false" aria-controls="collapse{{ $mensaje->id }}">
			                LEER MÁS <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
			            </a>
			            </h4>
			        </div>
			        <div id="collapse{{ $mensaje->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			            <div class="panel-body">
			            	@foreach( $mensaje->defensoras as $respuesta )
			                <p>
			                    <strong>Fecha de respuesta: </strong> {{ $respuesta->fecha }}
			                </p>
			                <p>
			                    <strong>Respuesta de la defensora: </strong> {{ $respuesta->respuesta }}
			                </p>
			                @endforeach
			            </div>
			        </div>
			    </div>
		    </div>
		</div>
	</div>
	@endforeach
</section>