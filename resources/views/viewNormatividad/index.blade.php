@extends('templateAudiencia')

@section('headerTemplate')
@include('viewTemplate.subMenu')
@endsection

@section('bodyTemplate')
@include('viewNormatividad.banner')
@include('viewNormatividad.acerca')
@endsection

@section('footerTemplate')
@endsection