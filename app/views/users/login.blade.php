@extends('layouts.main')

@section('content')
<section id="contact">
  <br />
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>Login</h2>
        <hr class="star-primary">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
{{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin')) }}

  <div class="form-group">
    {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
  </div>

  <div class="form-group">
    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
  </div>

  {{ Form::submit('Login', array('class'=>'btn btn-large btn-primary btn-block')) }}

{{ Form::close() }}

<br />

<div class="container">
  <ul>
    @foreach($errors->all() as $error)
    <li class="alert alert-danger">{{ $error }}</li>
    @endforeach
  </ul>
</div>

{{ Form::close() }}
</div>
</div>
</div>
</section>
@stop
