@extends('layout')

@section('content')
    <div class="container marketing">

        @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif

        </div>

        <!-- Jumbotron -->
        <div class="jumbotron blue-jumbo">
            <h2>Basic needs when you come to Delft</h2>
            <p class="lead">Take a look at the most essential needs for Internationals and the offers for Internationals by LivinginDelft.</p>
        </div>


    </div>

    <div class="container marketing">

        {{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
            <h2 class="form-signup-heading">Please Register</h2>

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

            <p>{{ Form::text('firstname', null, array('class'=>'input-block-level', 'placeholder'=>'First Name')) }}</p>
            <p>{{ Form::text('lastname', null, array('class'=>'input-block-level', 'placeholder'=>'Last Name')) }}</p>
            <p>{{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}</p>
            <p>{{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}</p>
            <p>{{ Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirm Password')) }}</p>

            {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary'))}}
        {{ Form::close() }}


@stop