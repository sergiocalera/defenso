@extends('templateAudiencia')

@section('headerTemplate')
@include('viewTemplate.subMenu')
@endsection

@section('bodyTemplate')
@include('viewForo.banner')
@include('viewForo.foro')
@include('viewForo.paginacion')
@endsection

@section('footerTemplate')
<link rel="stylesheet" href="{{ url( 'css/foro/foro.css' ) }}">
@endsection