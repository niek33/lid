@extends('layout')

@section('content')


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/slider/1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
            <h1>Welcome to Delft</h1>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slider/2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">

            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slider/3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">

            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <div class="container marketing">

        @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif



              <!-- Jumbotron -->
      <div class="jumbotron">
        <h2>Sign up for our newsletter</h2>
        <p class="lead">News, events, information and exclusive offers for Internationals in Delft.</p>
        
    
        <p><a class="btn btn-lg btn-success" href="#" role="button">Keep up to date</a></p>
      </div>



	</div>
    <div class="jumbotron">
      <div class="container">
        

        <div class="row">
        <div class="col-md-4">
          <h2>Latest news</h2>

          <h4>Australian Film Festival in Delft</h4>
          <p>Filmhuis Lumen is hosting an Australian Film Festival</p>

          <h4>Welcome to Delft event a success</h4>
          <p>Click to read about the event on 1 November 2014.</p>



          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Explore Delft</h2>
          <p><iframe src="//www.youtube.com/embed/q5kRWxrYsIU" width="320" height="320" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
       </div>
        <div class="col-md-4">
          <h2>Upcoming Events</h2>

          <h4>International borrel</h4>
          <p>Borrel” is the dutch word for drinks.  “Gezellig” is the dutch word that is famously difficult to translate, but essentially means good company and great atmosphere.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>


      </div>
    </div>

    <div class="container">

            <div class="row">
        <div class="col-md-4">
          <h2>Latest news</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Explore Delft</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Upcoming Events</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>





@stop