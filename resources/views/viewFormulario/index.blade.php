@extends('templateAudiencia')

@section('headerTemplate')
@include('viewTemplate.subMenu')
@endsection

@section('bodyTemplate')
@include('viewFormulario.banner')
@include('viewFormulario.acerca')
@include('viewFormulario.formulario')
@include('viewForo.foro')
@include('viewForo.paginacion')
@include('viewFormulario.contenido')
@include('viewFormulario.criterios')
@endsection

@section('footerTemplate')
<script src="{{ url('/js/formulario.js') }}" ></script>
@endsection