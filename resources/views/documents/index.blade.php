@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Documentos</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
			<a class="btn btn-primary" href="{{ url('/home/documents/new') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo Documento</a>
		</div>
	</div>
	<div class="row" style="margin-top: 15px;">
		@foreach($categorias as $categoria)
		@if( !$categoria->documents->isEmpty() )
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>{{ $categoria->title }}</h3>
				</div>
				<table class="table">
					<tr>
						<td>#</td>
						<td>Título</td>
						<td>Documento</td>
						<td>Sección</td>
						<td>Control</td>
					</tr>
					@foreach( $categoria->documents as $documento)
					<tr>
						<td>#</td>
						<td>{{ $documento->title }}</td>
						<td><a href="{{ url('/docs/documents/' . $documento->file) }}" target="_new">{{ $documento->file }}</a></td>
						<td>{{ $documento->categories->title }}</td>
						<td><a href="{{ url('/home/documents/delete/' . $documento->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Borrar</a></td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
		@endif
		@endforeach
	</div>
</div>
@endsection

@section('script')
@endsection