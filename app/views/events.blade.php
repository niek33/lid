@extends('layout')

@section('content')
    <div class="container marketing">

        @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif

        </div>

        <!-- Jumbotron -->
        <div class="jumbotron blue-jumbo">
            <h2>Events</h2>
            <p class="lead">Showing our latest and upcoming events.</p>
        </div>


    </div>
!
    <div class="container marketing">

        <div class="row">
            @if(count($events))
                @foreach($events as $event)

                    <div class="col-lg-4">
                      <a href="{{ URL::to('/event/' . $event->id . '/' . Str::slug($event->title)) }}""><img class="img-rounded" src="{{ asset($event->image) }}" alt="Generic placeholder image" style="width: 240px; height: 200px;"></a>
                      <h2>{{ $event->title }}</h2>
                      <p>{{ $event->description }}</p>
                      <p><a class="btn btn-default" href="{{ URL::to('/event/' . $event->id . '/' . Str::slug($event->title)) }}" role="button">View details &raquo;</a>



                    </div><!-- /.col-lg-4 -->

              @endforeach
          @endif
          </div><!-- /.row -->

@stop