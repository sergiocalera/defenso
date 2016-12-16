@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Nuevo Evento</h3>
		</div>
	</div>
	<div class="row">
		<form action="/home/diary/add" method="post" class="form-horizontal">
			<div class="form-group">
				<label for="name_event" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-label">Nombre del Evento: </label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input name="name_event" type="text" class="form-control" placeholder="Nombre del Evento" value="{{ $diary->event }}">
				</div>
			</div>
			<div class="form-group">
				<label for="date-event" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-label">Fecha del evento:</label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input name="date-event" type="text" class="form-control" placeholder="Fecha del evento" value="{{ $diary->date }}">
				</div>
			</div>
			<div class="form-group">
				<label for="schedule-event" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-label">Horario del Evento: </label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input name="schedule-event" type="text" class="form-control" placeholder="Horario del Evento" value="{{ $diary->schedule }}">
				</div>
			</div>
			<div class="form-group">
				<label for="headquarters" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-label">Sede del Evento: </label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input name="headquarters" type="text" class="form-control" placeholder="Sede del Evento" value="{{ $diary->headquarters }}">
				</div>
			</div>
			<div class="form-group">
				<label for="address-event" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-label">Dirección del Evento: </label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input name="address-event" type="text" class="form-control" placeholder="Dirección del Evento" value="{{ $diary->address }}">
				</div>
			</div>
			<div class="form-group">
				<label for="url-event" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-label">Página web del Evento: </label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input name="url-event" type="text" class="form-control" placeholder="Página web" value="{{ $diary->url }}">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
					<input name="id-event" type="hidden" value="{{ $diary->id }}">
					{{csrf_field()}}
					<input type="submit" value="Guardar" class="btn btn-primary">
				</div>
			</div>
		</form>
	</div>
</div>
@endsection

@section('script')
@endsection