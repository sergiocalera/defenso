<section id="mensajes">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>¿Qué dice la audiencia?</h3>
            <hr class="red"></hr>
		</div>
	</div>
	@foreach($aprobadas as $aprobada)
	<div class="mensaje thumbnail">
		<div class="datos">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 header">
					<p class="nombre">
						@if( $aprobada->mensaje->publico )
						<strong>Nombre: </strong> {{ $aprobada->mensaje->audiencia->nombre . " " . $aprobada->mensaje->audiencia->apellido_paterno . " " . $aprobada->mensaje->audiencia->apellido_materno }}
						@else
						<strong>Nombre: </strong> No Público
						@endif
					</p>
				</div>
				<div class="col-xs-8 col-sm-8 col-md-3 col-lg-3 header">
					<p class="text-center">
						<strong>Fecha: </strong>{{ $aprobada->mensaje->fecha }}
					</p>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 header">
					<p class="text-center folio">
						<strong>Folio: </strong>{{ $aprobada->id }}
					</p>
				</div>
			</div>
		</div>
		<div class="mensaje-contenido">
			<p>
				<strong>Mensaje: </strong>{{ $aprobada->mensaje->mensaje }}
			</p>
		</div>
		<div id="respuesta">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			    <div class="panel panel-default">
			        <div class="panel-heading" role="tab" id="headingOne">
			            <h4 class="panel-title">
			            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $aprobada->mensaje->id }}" aria-expanded="false" aria-controls="collapse{{ $aprobada->mensaje->id }}">
			                LEER MÁS <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
			            </a>
			            </h4>
			        </div>
			        <div id="collapse{{ $aprobada->mensaje->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			            <div class="panel-body">
			            	@foreach( $aprobada->mensaje->defensoras as $respuesta )
			            	@if( $respuesta->estado == 2 )
			                <p>
			                    <strong>Fecha de respuesta: </strong> {{ $respuesta->fecha }}
			                </p>
			                <p>
			                    <strong>Respuesta de la defensora: </strong> {{ $respuesta->respuesta }}
			                </p>
			                <hr />
			                @endif
			                @endforeach
			            </div>
			        </div>
			    </div>
		    </div>
		</div>
	</div>
	@endforeach
</section>