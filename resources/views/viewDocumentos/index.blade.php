@extends('templateAudiencia')

@section('headerTemplate')
@include('layouts.subMenu')
@endsection

@section('bodyTemplate')
@include('viewDocumentos.about')
@endsection

@section('footerTemplate')
{{--<link rel="stylesheet" href="{{ asset ('css/defensoria.css') }}" > --}}
{{--<script type="text/javascript" src="{{ asset ('js/index.js') }}"></script> --}}
@endsection