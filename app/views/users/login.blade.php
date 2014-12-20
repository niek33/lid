@extends('layout')

@section('content')


    <div class="container marketing">

        @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif

        </div>

        <!-- Jumbotron -->
        <div class="jumbotron blue-jumbo">
            <h2>Please, log in</h2>
            <p class="lead">Take a look at the most essential needs for Internationals and the offers for Internationals by LivinginDelft.</p>
        </div>


    </div>

    <div class="container marketing">


        {{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin')) }}
            <h2 class="form-signin-heading">Please Login</h2>

            {{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
            {{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}

            {{ Form::submit('Login', array('class'=>'btn btn-large btn-primary'))}}
        {{ Form::close() }}

@stop

