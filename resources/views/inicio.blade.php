@extends('templates.master')

@section('title', 'LOGIN')

@section('header')
@parent
<h2>Frases bonitas de peliculas infantiles</h2>
@stop 

@section('content')
<h3>Frases</h3> 
@stop 

@section('footer')
@parent
<br> {{date('Y')}}
@stop