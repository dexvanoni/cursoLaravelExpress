@extends('template')

@section('title')

  Página de Notas

@endsection

@section('content')

  Ola Sr. {{ $name }}. Sua nota é: {{ $nota }}

@endsection
