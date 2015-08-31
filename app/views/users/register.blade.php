@extends('layouts.main')

@section('content')
<section id="contact">
  <br />
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>Register</h2>
        <hr class="star-primary">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
        {{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}

        <div class="form-group">
          {{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name')) }}
        </div>

        <div class="form-group">
          {{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}
        </div>

        <div class="form-group">
          {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
        </div>

        <div>
          <div class="btn-group">
            <select name="account_type" type="button" class="form-control btn btn-default" role="menu">
              <option selected disabled>Select Account type</option>
              <option value="free">Free</option>
              <option value="premium" disabled>Premium</option>
              <option value="business" disabled>Business</option>
            </select>
          </div>
        </div>

        <br />

        <div class="form-group">
          {{ Form::text('link', null, array('class'=>'form-control', 'placeholder'=>'URI For Your Resume (example: myawesomeresume)')) }}
        </div>

        <div class="form-group">
          {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
        </div>

        <div class="form-group">
          {{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) }}
        </div>

        {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}

        <br />

        <ul>
          @foreach($errors->all() as $error)
          <li class="alert alert-danger">{{ $error }}</li>
          @endforeach
        </ul>

        {{ Form::close() }}
      </div>
    </div>
  </div>
</section>
@stop
