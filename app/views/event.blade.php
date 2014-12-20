@extends('layout')

@section('content')

    <div class="container marketing">

        @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif

        </div>

        <!-- Jumbotron -->
        <div class="jumbotron blue-jumbo">
            <h2>{{ $event->title }}</h2>
            <p class="lead">{{ $event->description }}</p>
        </div>


    </div>

    <div class="container marketing">

        @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif

        </div>



    </div>

    <div class="container marketing">


          <img class="img-rounded" src="{{ asset($event->image) }}" alt="Generic placeholder image" style="width: 240px; height: 200px;">
          <h2>{{ $event->title }}</h2>
          <p>{{ $event->description }}</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>



@stop