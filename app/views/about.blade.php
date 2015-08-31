@extends('layouts.main')

@section('content')
<section class="success" id="about">
  <br />
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>About</h2>
        <hr class="star-light">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-lg-offset-2">
        <p>Resuu is a better way to manage and distribute your resume. Resuu gives users an easy way to create a beautifully organized resume, accessible by a simple url that you get to pick.</p>
      </div>
      <div class="col-lg-4">
        <p>Whether you're an inexperienced teen looking to get a headstart on your career path, or a professional searching for an easier way to send out your resumes, Resuu has the tools you need to land your next job.</p>
      </div>
      <div class="col-lg-8 col-lg-offset-2 text-center">
        <a href="/users/register" class="btn btn-lg btn-outline">
          <i class="fa fa-rocket"></i> Register
        </a>
      </div>
    </div>
  </div>
</section>
@stop
