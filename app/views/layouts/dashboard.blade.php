<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resuu - Dashboard</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/dist/css/timeline.css" rel="stylesheet">
    <link href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  </head>
  <body>

    <script src="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/bower_components/raphael/raphael-min.js"></script>
    <script src="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/bower_components/morrisjs/morris.min.js"></script>
    <script src="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/dist/js/sb-admin-2.js"></script>


    <div id="wrapper">
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/dashboard">Resuu <i style="font-size: 20px; color: 707070">Dashboard</i></a>
        </div>

        <ul class="nav navbar-top-links navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="/dashboard">
              <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
              <li><a href="/users/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>

    <!-- Sidebar -->
    <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
          <li>
            <a href="/dashboard"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
          </li>

          <li>
            <a href="/dashboard/edit"><i class="fa fa-edit fa-fw"></i>Edit Resume</a>
          </li>
          <li>
            <a href="/dashboard/view"><i class="fa fa-eye fa-fw"></i>View Resume</a>
          </li>
          <li>
            <a href="/dashboard/settings"><i class="fa fa-user fa-fw"></i>Settings</a>
          </li>
        </ul>
      </div>
    </div>

    <div id="page-wrapper">

      <ul>
        @foreach($errors->all() as $error)
        <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
      </ul>

      <div class="container">
        @if(Session::has('message'))
        <p class="alert alert-warning">{{ Session::get('message') }}</p>
        @endif
      </div>

      @yield('content')
    </div>
  </body>
</html>
