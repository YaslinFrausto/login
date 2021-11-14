@extends('templates.master')

@section('title', 'LOGIN')

@section('header')
@parent
<h2>Login</h2>
@stop 

@section('content')
 <form action="{{route('valid')}}" method="POST">
 {{csrf_field()}}
  <div class="mb-3">
    <label for="inuser" class="form-label">Username</label>
    <input type="text" class="form-control" name="inuser" id="inuser">
  <div class="mb-3">
    <label for="inpass" class="form-label">Password</label>
    <input type="password" class="form-control" name="inpass" id="inpass">
  </div>
  <button type="submit" class="btn btn-primary">Log in</button>
</form>
@stop 

@section('footer')
@parent
<br> {{date('Y')}}
@stop