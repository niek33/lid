
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Living in Delft</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('css/bootstrap.min.css') }}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    {{ HTML::style('css/custom.css') }}
  </head>
<!-- NAVBAR
================================================== -->
  <body>


      <div class="container">

             <div class="header">
        <nav>
          <ul class="nav nav-pills pull-right">

              <li class="dropdown">
                <a href="{{ URL::to('/') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ URL::to('about') }}">About</a></li>
                  <li><a href="{{ URL::to('team') }}">Team</a></li>
                  <li><a href="{{ URL::to('contact') }}">Contact</a></li>
                </ul>
              </li>
            <li role="presentation"><a href="{{ URL::to('events') }}">Events</a></li>
            <li role="presentation"><a href="{{ URL::to('basic-needs') }}">Basic Needs</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Delft Housing <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Hof van Delft</a></li>
                  <li><a href="#">Centre</a></li>
                  <li><a href="#">Tanthof</a></li>
                </ul>
              </li>
            <li role="presentation"><a href="#">Services</a></li>


            @if(Auth::check())
                <li role="presentation"><a href="">Welcome, {{ Auth::user()->firstname }}! <a href="{{ URL::to('users/logout') }}">(log out)</a></li>
            @else
                <li role="presentation"><a href="{{ URL::to('users/login') }}">Login</a></li>
            @endif

              

          </ul>
        </nav>
        <h3 class="text-muted"><a href="{{ URL::to('/') }}"><img width="261" height="43" src="{{asset('img/logo.png')}}"></a></h3>
      </div>




      </div>

      @yield('content')


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Terug naar boven</a></p>
        <p>Living in Delft 2014 &copy; &middot; <a href="#">Over ons</a> &middot; <a href="#">Contact</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
