@extends('layouts/app')

@section('content')
<h1>{{ $message }}</h1>

@include('layouts/alerts')

@endsection

@section('footer')
Ini adalah halaman utama
@endsection