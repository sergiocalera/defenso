@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>Control de Agenda</h3>
					<p class="text-right">
						<a href="/home/diary/new" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo Evento</a>
					</p>
				</div>
				<table class="table">
					<tr>
						<td>#</td>
						<td>Evento</td>
						<td>Fecha</td>
						<td>Control</td>
					</tr>
					<?php $contador = 0; ?>
					@foreach( $diaries as $diary )
					<tr>
						<td>{{ ++ $contador }}</td>
						<td>{{ $diary->event }}</td>
						<td>{{ $diary->date }}</td>
						<td>
							<a href="" class="btn btn-warning"><span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span> Modificar</a>
							<a href="{{ url('/home/diary/delete/' . $diary->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Borrar</a>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
@endsection