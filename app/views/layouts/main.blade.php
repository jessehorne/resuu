<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Resuu</title>

    <link href="/freelancer/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/freelancer/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/freelancer/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  </head>
  <body id="page-top" class="index">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#page-top">Resuu</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="hidden">
              <a href="#page-top"></a>
            </li>
            <li class="page-scroll">
              <a href="/">Home</a>
            </li>
            <li class="page-scroll">
              <a href="/about">About</a>
            </li>
            <li class="page-scroll">
              <a href="/contact">Contact</a>
            </li>

            @if(!Auth::check())
            <li class="page-scroll">
              <a href="/users/register">Register</a>
            </li>

            <li class="page-scroll">
              <a href="/users/login">Login</a>
            </li>
            @else
            <li class="page-scroll">
              <a href="/dashboard">Dashboard</a>
            </li>
            <li class="page-scroll">
              <a href="/users/logout">Logout</a>
            </li>
            @endif

          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>

    <div class="container">
      @if(View::exists('message'))
      <li class="alert alert-warning">
        {{ $message }}
      </li>
      @endif

      <br />

      @yield('content')
    </div>

    <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
              <h3>Location</h3>
              <p>Georgia, USA</p>
            </div>
            <div class="footer-col col-md-4">
              <h3>Connect with us!</h3>
              <h4>coming soon...</h4>
              <ul class="list-inline">
                <li>
                  <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                </li>
                <li>
                  <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                </li>
              </ul>
            </div>
            <div class="footer-col col-md-4">
              <h3>About Resuu</h3>
              <p>Resuu is <i>the</i> hosting service for resumes.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; Resuu 2015
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="/freelancer/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/freelancer/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="/freelancer/js/classie.js"></script>
    <script src="/freelancer/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="/freelancer/js/jqBootstrapValidation.js"></script>
    <!-- <script src="/freelancer/js/contact_me.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="/freelancer/js/freelancer.js"></script>
  </body>
</html>
