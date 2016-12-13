@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Guardar un nuevo Documento</h3>
		</div>
	</div>
	<div class="row">
		<form id="new_doc" action="/home/documents/upload" method="post" class="form-horizontal" enctype="multipart/form-data">
			<div class="form-group">
				<label class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-right control-label" for="categorie_document">Selecciona la categoria del documento:</label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<select class="form-control" name="categorie_document" id="">
						<option value="" selected>Selecciona una opción</option>
						@foreach($categories as $categorie)
						<option value="{{ $categorie->id }}">{{ $categorie->title }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="title_document" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-label text-right">
					Título del documento:
				</label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input type="text" name="title_document" placeholder="Título del documento" class="form-control" style="width: 100%;">
				</div>
			</div>
			<div class="form-group">
				<label for="file_document" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-label text-right">Selección del Documento</label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				    <div class="input-group">
		                <label class="input-group-btn">
		                    <span class="btn btn-primary">
		                        Archivo&hellip; <input name="file_document[]" type="file" style="display: none;" multiple>
		                    </span>
		                </label>
		                <input type="text" class="form-control" readonly>
		            </div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
					{{csrf_field()}}
					<input class="btn btn-primary" type="submit" value="Subir Documento">
				</div>
			</div>
		</form>
	</div>
</div>
@endsection

@section('script')
<style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }
</style>

<script src="{{ url('js/documents/documents.js') }}"></script>
@endsection