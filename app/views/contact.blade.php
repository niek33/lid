@extends('layout')

@section('content')

    <div class="container marketing">

        @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif

        </div>

        <!-- Jumbotron -->
        <div class="jumbotron blue-jumbo">
            <h2>Contact</h2>
            <p class="lead">Who are we, and what do we do?</p>
        </div>


    </div>

    <div class="container marketing">

    Eej das super mooi.


@stop