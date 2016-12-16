<section id="agenda" style="margin-top:50px">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h2>Agenda</h2>
			<hr class="red">
		</div>
	</div>
	<div class="row">
		<!--  Esta sección es la que se repite -->
		@foreach( $diaries as $diary )
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="box-title">
				<h4>{{ $diary->event }}</h4>
			</div>
			<div>
				<p>
					<strong>Fecha: </strong>{{ $diary->date }}
				</p>
				<p>
					<strong>Lugar: </strong><strong>{{ $diary->headquarters . ', '}}</strong> {{ $diary->address }}
				</p>
				<p>
					<strong>Horario: </strong>{{ $diary->schedule }}
				</p>
				<p>
					<a href="{{ $diary->url }}" target="_new"><strong>Leer más...</strong></a>
				</p>
			</div>
			<hr>
		</div>
		@endforeach
		<!--  Fin de la sección que se repite -->
	</div>
</section>