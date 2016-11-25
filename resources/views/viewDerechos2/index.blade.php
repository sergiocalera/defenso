@extends('templateAudiencia')

@section('headerTemplate')
@include('viewTemplate.subMenu')
@endsection

@section('bodyTemplate')
@include('viewDerechos.banner')
@include('viewDerechos.derechos')
@include('viewDerechos.formulario')
@endsection

@section('footerTemplate')
<link rel="stylesheet" href="{{ asset ('css/defensoria.css') }}" >
<link rel="stylesheet" type="text/css" media="all" href="{{ asset ('css/index.css') }}" >
<script type="text/javascript" src="{{ asset ('js/index.js') }}"></script>
@endsection