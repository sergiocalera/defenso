@extends('templateAudiencia')

@section('headerTemplate')
@include('viewTemplate.subMenu')
@endsection

@section('bodyTemplate')
@include('viewFormulario.banner')
@include('viewFormulario.acerca')
@include('viewFormulario.formulario')
@include('viewFormulario.contenido')
@include('viewFormulario.criterios')
@endsection

@section('footerTemplate')
@endsection