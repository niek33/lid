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
    <div class="row">
        <div class="col-md-6 col-md-offset-3">


            {{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
                <h2 class="form-signup-heading">Please Register</h2>

                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

                <p>{{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name')) }}</p>
                <p>{{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}</p>
                <p>{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}</p>
                <p>{{ Form::text('street', null, array('class'=>'form-control', 'placeholder'=>'Street Address')) }}</p>
                <p>{{ Form::text('zipcode', null, array('class'=>'form-control', 'placeholder'=>'Zipcode')) }}</p>
                <p>{{ Form::text('city', null, array('class'=>'form-control', 'placeholder'=>'City')) }}</p>
                <p>{{ Form::text('telephone', null, array('class'=>'form-control', 'placeholder'=>'Telephone')) }}</p>
                <p>{{ Form::text('birthday', null, array('class'=>'form-control', 'placeholder'=>'Date of birth')) }}</p>
                
                

                <p>{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}</p>
                <p>{{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) }}</p>

                <div class="col-md-11 text-center">
                    {{ Form::submit('Register', array('class'=>'btn btn-primary'))}}
                </div>

            {{ Form::close() }}
        </div>
    </div>




@stop