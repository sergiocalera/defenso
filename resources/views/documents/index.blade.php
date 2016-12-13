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
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<table class="table">
				<tr>
					<td>#</td>
					<td>Título</td>
					<td>Documento</td>
					<td>Sección</td>
					<td>Control</td>
				</tr>
				@foreach( $documentos as $documento )
				<tr>
					<td>#</td>
					<td>{{ $documento->title }}</td>
					<td>{{ $documento->file }}</td>
					<td>{{ $documento->user->name }}</td>
					<td>vacio</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>
@endsection

@section('script')
@endsection