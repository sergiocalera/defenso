<br><br><br>
<section id="secciones">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Secciones de la Defensoría de Audiencia</h3>
			<hr class="red" />
		</div>
	</div>
	<div class="row" style="margin-bottom: 5%;">
		@foreach ($secciones as $seccion)
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<a href="{{ url( $seccion->url ) }}" target="_self" style="text-decoration: none;">
				<div class="delimitador">
					<div class="contenedor">
						<div class="cuadro-derecho">
							<table>
								<tr>
									<td style="vertical-align:middle;">
										<p class="titulo text-center">{{ $seccion->titulo }}</p>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</a>
		</div>
		@endforeach
	</div>
</section>