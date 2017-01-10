@extends('templateAudiencia')

@section('headerTemplate')
@include('viewTemplate.subMenu')
@endsection

@section('bodyTemplate')
@include('viewFormulario.banner')
@include('viewFormulario.acerca')
{{--@include('viewForo.paginacion')--}}
@include('viewFormulario.contenido')
@include('viewFormulario.criterios')
@include('viewFormulario.formulario')
@endsection

@section('footerTemplate')
<script src="{{ url('/js/formulario.js') }}" ></script>
@endsection