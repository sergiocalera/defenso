<br><br><br>
<section id="secciones">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Secciones de la Defensoría de Audiencia</h3>
			<hr class="red" />
		</div>
	</div>
	<div class="row">
		@foreach ($secciones as $seccion)
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<a href="{{ url( $seccion->url ) }}" target="_self">
				<article class="cuadro-derecho">
					<header>
						<p class="text-center titulo">{{ $seccion->titulo }}</p>
					</header>
					<section>
						<p class="text-justify cuerpo">{{ $seccion->url }}</p>
					</section>
				</article>
			</a>
		</div>
		@endforeach
	</div>
</section>