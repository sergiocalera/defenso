<section id="documentos" style="margin-top: 50px;">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h2>Documentos</h2>
			<hr class="red">
		</div>
	</div>
	<div class="row">
	@foreach($categorias as $categoria)
	@if( !$categoria->documents->isEmpty() )
	<?php $documentos = $categoria->documents->where('active','!=', "0"); ?>
	@if( !$documentos->isEmpty() )
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					<h5>{{$categoria->title}}</h5>
				</div>
				<table class="table">
					@foreach( $documentos as $documento )
					<tr>
						<td style="width: 70%;">
							<p>{{ $documento->title }}</p>
							<p>{{ $documento->date }}</p>
						</td>
						<td style="width: 30%;">
							<p>
								<a href="{{ url('docs/documents/' . $documento->file) }}" target="_new">Leer más...</a>
							</p>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	@endif
	@endif
	@endforeach
	</div>
</section>