@extends('layouts.dashboard')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <h2 class="page-header">Settings</h2>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-8">
      {{ Form::open(array('url'=>'/users/edit', 'class'=>'form-signup')) }}

      <div class="form-group">
        {{ Form::text('firstname', Auth::user()->firstname, array('class'=>'form-control', 'placeholder'=>'First Name')) }}
      </div>

      <div class="form-group">
        {{ Form::text('lastname', Auth::user()->lastname, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}
      </div>

      {{ Form::submit('Save', array('class'=>'btn btn-large btn-primary btn-block'))}}
    </div>
  </div>
@stop
