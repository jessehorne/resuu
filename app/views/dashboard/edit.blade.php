@extends('layouts.dashboard')

@section('content')
  <div class="row">
      <div class="col-lg-12">
        <h2 class="page-header">Edit</h2>
      </div>
  </div>

  <div class="row">
    <div class="col-lg-8">
      {{ Form::open(array('url'=>'/users/editresume', 'class'=>'form-signup')) }}

      <div class="form-group">
        <textarea name="resume" class="form-control" rows="20">{{ Auth::user()->resume }}</textarea>
      </div>

      {{ Form::submit('Save', array('class'=>'btn btn-large btn-primary btn-block'))}}

      {{ Form::close() }}
    </div>
  </div>
@stop
