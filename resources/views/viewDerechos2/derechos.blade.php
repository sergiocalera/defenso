<section id="derechos">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Conoce tus derechos</h3>
			<hr class="red">
		</div>
	</div>
	<div class="row">
		@foreach ($derechos as $key => $value)
		<div class="col-xs-12 col-sm-6 col-md-4 col-ls-4">
			<article class="cuadro-derecho">
				<header>
					<p class="text-center titulo">{{$key}}</p>
				</header>
				<section>
					<p class="text-justify cuerpo">{{$value}}</p>
				</section>
			</article>
		</div>
		@endforeach
	</div>
</section>